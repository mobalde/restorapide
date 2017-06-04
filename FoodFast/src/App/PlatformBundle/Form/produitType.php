<?php

namespace App\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class produitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nomProduit', TextType::class, array('required' => true, 'label'=>'Nom produit', 'attr'=>array('placeholder'=>' Libelle produit *', 'class'=>'form-control libelleproduit')) )
                ->add('typeProduit', type_produitType::class)
                ->add('detailProduit', detail_produitType::class)
                ->add('Valider', SubmitType::class, array('attr'=>array('class'=>'btn btn-primary pull-right')));
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
