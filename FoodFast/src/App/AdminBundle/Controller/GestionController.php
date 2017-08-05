<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\PlatformBundle\Entity\produit;
use App\PlatformBundle\Form\produitType;
use App\PlatformBundle\Entity\promo;
use App\PlatformBundle\Form\promoType;

use Symfony\Component\HttpFoundation\Request;

/**
 * gère les produits et les promos
 */
class GestionController extends Controller
{
    /**
     * Ajout de produit
     * @return type
     */
    public function produitAction(Request $request){
        $produit = new produit();
        $form   = $this->get('form.factory')->create(produitType::class, $produit);
        // Verification du formulaire
        if ($request->isMethod('POST')){
             if ($form->handleRequest($request)->isValid()){
                 $em = $this->getDoctrine()->getManager(); // Doctrine manager
                 $produitbis = clone $produit;
                 if(!empty($request->request->get('app_platformbundle_produit_taille2'))){
                     // 2eme produit
                     $produitbis->setTaille($request->request->get('app_platformbundle_produit_taille2'));
                     $produitbis->setPrix($request->request->get('app_platformbundle_produit_prix2'));
                     $em->persist($produit); // 1er produit
                     $em->persist($produitbis);
                 }
                 if(!empty($request->request->get('app_platformbundle_produit_taille4'))){
                     // 3eme produit
                     
                 }
                 $em->flush();
             }
        }
        return $this->render(
                    'AppAdminBundle:Gestion:produit.html.twig',
                    array('form' => $form->createView())
                );
    }
    
    /**
     * Ajout promo
     * @return type
     */
    public function promoAction(Request $request){
        // On récupère le service
        $codePro = $this->container->get('app_admin.bibliotheques');
        $promo = new promo();
        $form   = $this->get('form.factory')->create(promoType::class, $promo);
        // Verification du formulaire
        if ($request->isMethod('POST')){
             if ($form->handleRequest($request)->isValid()){
                 $em = $this->getDoctrine()->getManager(); // Doctrine manager
                 
                 // service code promo
                 $codePromo = $this->container->get('app_admin.bibliotheques');
                 // code promo  
                 $promo->setCodePromo($codePromo->generate_code_promo());
                 $em->persist($promo); // 1er produit
                 $em->persist($promo);
                 $em->flush();
             }
        }
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
