<?php

namespace App\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class produitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nomProduit', TextType::class, array('required' => true, 'label'=>'Nom produit *', 'attr'=>array('placeholder'=>'Libelle produit *', 'class'=>'form-control libelleproduit')) )
                ->add('Type', EntityType::class, array(
                        'class'        => 'AppPlatformBundle:type_produit',
                        'choice_label' => 'nomType',
                        'multiple'     => false,
                        'label'        => 'Type *',
                        'attr'=>array('class'=>'form-control libelleproduit')
                      ))
                ->add('ingrediens', TextType::class, array('required' => true, 'label'=>'Ingrediens *', 'attr'=>array('placeholder'=>'Exemple: creme fraiche...', 'class'=>'form-control ingrediens')))
                ->add('taille', TextType::class, array('required' => true, 'label'=>'Taille *', 'attr'=>array('placeholder'=>'Exemple: senior...', 'class'=>'form-control taille')))
                ->add('prix', NumberType::class, array('required' => true, 'label'=>'Prix *', 'attr'=>array('placeholder'=>'Exemple: 8.92', 'class'=>'form-control prix')))
                ->add('Valider', SubmitType::class, array('attr'=>array('class'=>'btn btn-primary pull-right bouton-valider')))
                ->add('Annuler', ResetType::class, array('attr'=>array('class'=>'btn btn-warning pull-right')));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\PlatformBundle\Entity\produit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_platformbundle_produit';
    }


}
