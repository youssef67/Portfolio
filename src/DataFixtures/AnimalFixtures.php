<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Famille;
use App\Entity\Continent;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $c1 = new Continent();
        $c1->setLibelle('Europe');
        $manager->persist($c1);
        
        $c2 = new Continent();
        $c2->setLibelle('Amerique');
        $manager->persist($c2);
        
        $c3 = new Continent();
        $c3->setLibelle('Asie');
        $manager->persist($c3);

        $c4 = new Continent();
        $c4->setLibelle('Afrique');
        $manager->persist($c4);
        
        $c5 = new Continent();
        $c5->setLibelle('Océanie');
        $manager->persist($c5);

        $f1 = new Famille();
        $f1->setLibelle("mamimfère")
            ->setDescription("Animaux vertébrés nourissant leurs petits avec du lait");
        $manager->persist($f1);

        $f2 = new Famille();
        $f2->setLibelle("reptile")
            ->setDescription("Animaux vertébrés nourissant qui rampent");
        $manager->persist($f2);
        
        $f3 = new Famille();
        $f3->setLibelle("poissons")
            ->setDescription("Animaux invertébrés du monde aquatique");
        $manager->persist($f3);

        $a1 = new Animal();
        $a1->setNom('Chien')
            ->setDescription('Un animal domestique')
            ->setImage('chien.png')
            ->setPoids(12)
            ->setDangereux(false)
            ->setFamille($f1)
            ->addContinent($c1)
            ->addContinent($c2)
            ->addContinent($c3)
            ->addContinent($c4);
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom('Cochon')
            ->setDescription('Un animal d\'élévage')
            ->setImage('cochon.png')
            ->setPoids(30)
            ->setDangereux(false)
            ->setFamille($f1)
            ->addContinent($c1)
            ->addContinent($c2)
            ->addContinent($c3)
            ->addContinent($c4);
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom('Serpent')
            ->setDescription('Un animal dangereux')
            ->setImage('serpent.png')
            ->setPoids(3)
            ->setDangereux(true)
            ->setFamille($f2)
            ->addContinent($c1)
            ->addContinent($c2)
            ->addContinent($c5)
            ->addContinent($c3);
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom('Crocodile')
            ->setDescription('Un animal trés dangereux')
            ->setImage('crocodile.png')
            ->setPoids(110)
            ->setDangereux(true)
            ->setFamille($f2)
            ->addContinent($c2)
            ->addContinent($c5);
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom('Requin')
            ->setDescription('Un animal marin trés dangereux')
            ->setImage('requin.png')
            ->setPoids(150)
            ->setDangereux(true)
            ->setFamille($f3)
            ->addContinent($c1)
            ->addContinent($c2)
            ->addContinent($c4)
            ->addContinent($c5);
        $manager->persist($a5);

        $manager->flush();
    }
}
