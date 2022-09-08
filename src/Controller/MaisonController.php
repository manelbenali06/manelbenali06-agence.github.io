<?php

namespace App\Controller;

use App\Entity\Maison;
use App\Form\MaisonType;
use App\Repository\MaisonRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MaisonController extends AbstractController
{
    #[Route('/maisons', name: 'maisons')]
    public function showAll(MaisonRepository $maisonRepository): Response
    {
        $houses = $maisonRepository->findAll();
        return $this->render('maison/maisons.html.twig', [
            'maisons' => $houses,
        ]);
    }

    #[Route('/maison-{id}', name: 'maison')]
    public function show(MaisonRepository $maisonRepository, int $id)
    {
        $house = $maisonRepository->find($id);
        return $this->render('maison/maison.html.twig', [
            'maison' => $house
        ]);
    }

    #[Route('/admin/maisons', name: 'admin_maisons')]
    public function showAllAdmin(MaisonRepository $maisonRepository)
    {
        $houses = $maisonRepository->findAll();
        return $this->render('admin/maisons.html.twig', [
            'maisons' => $houses
        ]);
    }

    #[Route('admin/maison/create', name: 'admin_maison_create')]
    public function create(Request $request, ManagerRegistry $managerRegistry)
    {
        $house = new Maison(); // création d'une nouvelle maison
        $form = $this->createForm(MaisonType::class, $house); // création du formulaire avec en paramètre la nouvelle maison
        $form->handleRequest($request); // gestionnaire de requêtes HTTP
        if ($form->isSubmitted() && $form->isValid()) {
            $infoImg1 = $form['img1']->getData(); // récupère les informations de l'image 1
            $extensionImg1 = $infoImg1->guessExtension(); // récupère l'extension de fichier de l'image 1
            $nomImg1 = time() . '-1.' . $extensionImg1; // reconstitue un nom d'image unique pour l'image 1
            $infoImg1->move($this->getParameter('house_pictures_directory'), $nomImg1); // déplace l'image 1 dans le dossier adéquat
            $house->setImg1($nomImg1); // définit le nom de l'iamge 2 à mettre en base de données
            $infoImg2 = $form['img2']->getData();
            if ($infoImg2 !== null) {
                $extensionImg2 = $infoImg2->guessExtension(); // récupère les informations de l'image 2
                $nomImg2 = time() . '-2.' . $extensionImg2; // reconstitue un nom d'image unique pour l'image 2
                $infoImg2->move($this->getParameter('house_pictures_directory'), $nomImg2); // déplace l'image 2 dans le dossier adéquat
                $house->setImg2($nomImg2); // définit le nom de l'iamge 2 à mettre en base de données
            }
            $manager = $managerRegistry->getManager(); // récupère le manager de Doctrine
            $manager->persist($house); // dit à Doctrine qu'on va vouloir sauvegarder en bdd
            $manager->flush(); // exécute la requête
            
            $this->addFlash('success', 'La maison à bien été ajoutée');//génère un message flash tjr avant le return(redirection)
            return $this->redirectToRoute('admin_maisons');
        }

        return $this->render('admin/maisonForm.html.twig', [
            'formulaire' => $form->createView() // création de la vue du formulaire et envoi à la vue (fichier)
        ]);
    }

    #[Route('admin/maison/update/{id}', name: 'admin_maison_update')]
    public function update(MaisonRepository $maisonRepository, int $id, Request $request, ManagerRegistry $managerRegistry)
    {
        $house = $maisonRepository->find($id); // récupère la maison grâce à l'id
        $form = $this->createForm(MaisonType::class, $house); // crée le formulaire prérempli avec la maison récupérée juste avant
        $form->handleRequest($request); // gestionnaire de requêtes HTTP

        if ($form->isSubmitted() && $form->isValid()) {


            // vérifier s'il y a une img2 dans le formulaire
                // non : garde l'ancienne
                // oui : récupérer le nom de l'ancienne img2
                    // s'il y en a une => supprimer
                    // sinon => ajout

            $infoImg1 = $form['img1']->getData();
            $nomOldImg1 = $house->getImg1(); // récupère le nom de l'ancienne img1
            if ($infoImg1 !== null) { // vérifie si il y a une img1 dans le formulaire
                $cheminOldImg1 = $this->getParameter('house_pictures_directory') . '/' . $nomOldImg1;
                if (file_exists($cheminOldImg1)) {
                    unlink($cheminOldImg1); // supprime l'ancienne img1
                }
                $nomImg1 = time() . '-1.' . $infoImg1->guessExtension(); // reconstitue le nom de la nouvelle img1
                $house->setImg1($nomImg1); // définit le nom de l'img1 de l'objet Maison
                $infoImg1->move($this->getParameter('house_pictures_directory'), $nomImg1); // upload
            } else {
                $house->setImg1($nomOldImg1); // re-définit le nom de l'img1 à mettre en bdd
            }

            $infoImg2 = $form['img2']->getData();
            $nomOldImg2 = $house->getImg2();
            if ($infoImg2 !== null) { // on a une img2 dans le formulaire
                if ($nomOldImg2 !== null) { // on a une img2 en bdd
                    $cheminOldImg2 = $this->getParameter('house_pictures_directory') . '/' . $nomOldImg2;
                    if (file_exists($cheminOldImg2)) {
                        unlink($cheminOldImg2);
                    }
                }
                $nomImg2 = time() . '-2.' . $infoImg2->guessExtension();
                $house->setImg2($nomImg2);
                $infoImg2->move($this->getParameter('house_pictures_directory'), $nomImg2);
            } else { // on a pas d'img2 dans le formulaire
                $house->setImg2($nomOldImg2);
            }

            $manager = $managerRegistry->getManager();
            $manager->persist($house);
            $manager->flush();
            $this->addFlash('success', 'La maison à bien été modifié');//success couleur bootstrap
            return $this->redirectToRoute('admin_maisons');
        }

        return $this->render('admin/maisonForm.html.twig', [
            'formulaire' => $form->createView()
        ]);
    }

    #[Route('admin/maison/delete/{id}', name: 'admin_maison_delete')]
    public function delete(MaisonRepository $maisonRepository, int $id, ManagerRegistry $managerRegistry)
    {
        $house = $maisonRepository->find($id);
        // throw new \Exception('TODO: gérer la suppression des images du dossier img');
        $img1 = $this->getParameter('house_pictures_directory') . '/' . $house->getImg1();
        $img2 = $this->getParameter('house_pictures_directory') . '/' . $house->getImg2();
        if ($house->getImg1() && file_exists($img1)) {
            unlink($img1);
        }
        if ($house->getImg2() && file_exists($img2)) {
            unlink($img2);
        }
        $manager = $managerRegistry->getManager();
        $manager->remove($house);
        $manager->flush();
        $this->addFlash('success', 'La maison à bien été suprimé');
        return $this->redirectToRoute('admin_maisons');
    }
}