<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use App\PlatformBundle\Entity\type_produit;

/**
 * Description of LoadTypeData
 *
 * @author balde
 */
class LoadTypeData implements FixtureInterface{
    public function load(ObjectManager $manager)
    {
        $produits = array(
            'pizzas',
            'tex mex',
            'pates',
            'salades',
            'escalopes',
            'desserts',
            'boissons',
            'menu midi',
            'panizzas'
            
        );
        foreach($produits as $value){
            $type = new type_produit();
            $type->setNomType($value);
            $manager->persist($type);
        }
        $manager->flush();
    }
}
