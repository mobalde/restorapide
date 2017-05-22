<?php

namespace App\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class detail_produitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('ingrdiens', TextType::class, array('required' => true, 'attr'=>array('placeholder'=>' Ingrediens *', 'class'=>'form-control ingrediens')))
                ->add('taille', TextType::class, array('required' => true, 'attr'=>array('placeholder'=>' Taille: senior... *', 'class'=>'form-control taille')))
                ->add('prix', NumberType::class, array('required' => true, 'attr'=>array('placeholder'=>' Prix *', 'class'=>'form-control prix')))
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\PlatformBundle\Entity\detail_produit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_platformbundle_detail_produit';
    }


}
