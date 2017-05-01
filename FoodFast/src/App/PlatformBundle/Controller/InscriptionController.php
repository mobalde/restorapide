<?php

namespace App\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class InscriptionController extends Controller
{
    public function inscriptionAction()
    {
        return $this->render('AppPlatformBundle:Inscription:inscription.html.twig');
    }
}
