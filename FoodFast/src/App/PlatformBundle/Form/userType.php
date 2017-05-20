<?php

namespace App\PlatformBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class userType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nom', TextType::class, array('required' => true, 'attr'=>array('placeholder'=>' Nom *', 'class'=>'form-control nom')))
                ->add('prenom', TextType::class, array('required' => true, 'attr'=>array('placeholder'=>' Prenom *', 'class'=>'form-control prenom')))
                ->add('email', TextType::class, array('required' => true, 'attr'=>array('placeholder'=>' Email *', 'class'=>'form-control email')))
                ->add('passwrd', TextType::class, array('required' => true, 'attr'=>array('placeholder'=>' Mot de passe *', 'class'=>'form-control motdepasse')))
                ->add('adresse', TextType::class, array('required' => true, 'attr'=>array('placeholder'=>' Adresse *', 'class'=>'form-control adresse')))
                ->add('codePostal', TextType::class, array('required' => true, 'attr'=>array('maxlength'=>"5", 'placeholder'=>' Code postal *', 'class'=>'form-control codepostal')))
                ->add('telephone', TextType::class, array('required' => true, 'attr'=>array('maxlength'=>"10", 'placeholder'=>' Telephone *', 'class'=>'form-control telephone')))
                ->add('Inscription', SubmitType::class, array('attr'=>array('class'=>'btn btn-primary')));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\PlatformBundle\Entity\user'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_platformbundle_user';
    }


}
