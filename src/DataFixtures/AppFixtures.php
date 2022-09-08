<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Maison;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture//cree des données avec fixtures
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        //$maison= new Maison();
        //$maison->setTitle('Jolie maison de compagne');
        //$maison->setDescription('Maison de compagne en bordure de rivière avec domaine de 2 hectares attenant');
        //$maison->setSurface('185');
        //$maison->setRooms('12');
        //$maison->setBedrooms('6');
        //$maison->setPrice('580000');
        //$maison->setImg1('maison.jpg');
        //$manager->persist($maison);//preparer

         $faker = Factory::create();

        for ($i = 1; $i <= 10; $i++){

            $maison= new Maison();
            $maison->setTitle('Maison de ' . $faker->name());
            $maison->setDescription($faker->text(255));
            $maison->setSurface($faker->numberBetween(49, 199));
            $maison->setRooms($faker->numberBetween(6, 15));
            $maison->setBedrooms($faker->numberBetween(1, 5));
            $maison->setPrice($faker->numberBetween(75000, 58000));
            $maison->setImg1('maison.jpg');
            $manager->persist($maison);//preparer
        }

        $manager->flush();//executer
    }
}
