<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\PlatformBundle\Entity\produit;
use App\PlatformBundle\Entity\promo;
use App\PlatformBundle\Form\produitType;
use App\PlatformBundle\Form\promoType;

class GestionController extends Controller
{
    /**
     * Ajout de produit
     * @return type
     */
    public function produitAction(){
        $produit = new produit();
        $form   = $this->get('form.factory')->create(produitType::class, $produit);
        return $this->render(
                'AppAdminBundle:Gestion:produit.html.twig',
                array('form' => $form->createView())
                );
    }
    
    /**
     * Ajout promo
     * @return type
     */
    public function promoAction(){
        // On récupère le service
        $codePro = $this->container->get('app_admin.bibliotheques');
        $promo = new promo();
        $form   = $this->get('form.factory')->create(promoType::class, $promo);
        return $this->render(
                'AppAdminBundle:Gestion:promo.html.twig',
                array('form' => $form->createView())
                );
    }
    
    
    public function menuAction(){
        return $this->render(
                'AppAdminBundle:Gestion:menu.html.twig'
                );
    }
}
