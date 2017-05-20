<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GestionController extends Controller
{
    public function produitAction(){
        return $this->render('AppAdminBundle:Gestion:produit.html.twig');
    }
}
