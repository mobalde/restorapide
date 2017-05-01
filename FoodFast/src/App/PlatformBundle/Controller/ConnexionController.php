<?php

namespace App\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ConnexionController extends Controller
{
    public function connexionAction()
    {
        return $this->render('AppPlatformBundle:Connexion:connexion.html.twig');
    }
}
