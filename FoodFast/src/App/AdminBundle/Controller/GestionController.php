<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\PlatformBundle\Entity\produit;
use App\PlatformBundle\Form\produitType;

class GestionController extends Controller
{
    public function produitAction(){
        $produit = new produit();
        $form   = $this->get('form.factory')->create(produitType::class, $produit);
        return $this->render(
                'AppAdminBundle:Gestion:produit.html.twig',
                array('form' => $form->createView())
                );
    }
}
