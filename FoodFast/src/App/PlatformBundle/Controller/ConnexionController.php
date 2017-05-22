<?php

namespace App\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use App\PlatformBundle\Entity\user;
use App\PlatformBundle\Form\userType;

class ConnexionController extends Controller
{
    /** 
     * @author Balde Mamadou <mamoudous2005@yahoo.fr>
     * controlleur de la page login.html, il gère la connexion
     * et l'inscription d'un clien
     */
    public function connexionAction()
    {
        $utilisateur = new user();
        $form   = $this->get('form.factory')->create(userType::class, $utilisateur);
        return $this->render(
                'AppPlatformBundle:Connexion:connexion.html.twig', array(
                'form' => $form->createView()
               ));
    }
}
