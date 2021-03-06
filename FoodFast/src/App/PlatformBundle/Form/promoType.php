<?php

namespace App\PlatformBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class promoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('Type', EntityType::class, array(
                        'class'        => 'AppPlatformBundle:type_produit',
                        'choice_label' => 'nomType',
                        'multiple'     => false,
                        'label'        => 'Type *',
                        'attr'=>array('class'=>'form-control libelleproduit')
                      ))
                ->add('description', TextType::class, array('label'=>' Description', 'attr'=>array('class'=>'form-control description')))
                ->add('prix', NumberType::class, array('required' => true, 'label'=>' Prix *', 'attr'=>array('class'=>'form-control prix')))
                ->add('quantite', NumberType::class, array('attr'=>array('class'=>'form-control quantite'), 'label'=>' Quantite *'))
                ->add('Valider', SubmitType::class, array('attr'=>array('class'=>'btn btn-primary pull-right bouton-valider')))
                ->add('Annuler', ResetType::class, array('attr'=>array('class'=>'btn btn-warning pull-right')));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\PlatformBundle\Entity\promo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_platformbundle_promo';
    }


}
