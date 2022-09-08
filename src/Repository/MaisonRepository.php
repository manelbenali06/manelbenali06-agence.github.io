<?php

namespace App\Repository;

use App\Entity\Maison;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Maison|null find($id, $lockMode = null, $lockVersion = null)
 * @method Maison|null findOneBy(array $criteria, array $orderBy = null)
 * @method Maison[]    findAll()
 * @method Maison[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MaisonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Maison::class);
    }

    // /**
    //  * @return Maison[] Returns an array of Maison objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Maison
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findLastSix()
    {
        return $this->createQueryBuilder('m') // 'm' est un alias
            ->orderBy('m.id', 'DESC') // tri en ordre décroissant
            ->setMaxResults(6) // on sélectionn 6 résultats
            ->getQuery() // construit la requête
            ->getResult() // exécute - récupère le(s) résultat(s)
        ;
    }

    public function trouverSixDerniers()
    {
        $bdd = $this->getEntityManager()->getConnection();
        $req = $bdd->query('SELECT * FROM maison ORDER BY id DESC LIMIT 6');
        // $req->executeQuery();
        return $req->fetchAllAssociative();
    }
}