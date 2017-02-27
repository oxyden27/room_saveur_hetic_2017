<?php

namespace HETIC\UserBundle\Form;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('attr' => array('placeholder' => 'Votre adresse email')))
            ->add('username', null, array('attr' => array('placeholder' => 'Nom d\'utilisateur')))
            ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array('first_options' => array('attr' => array('placeholder' => 'Mot de passe')), 'second_options' => array('attr' => array('placeholder' => 'Confirmer le mot de passe'))))
            ->add('company', TextType::class, array('label' => 'Entreprise', 'required' => false, 'attr' => array('placeholder' => 'Entreprise')))
            ->add('mobile', TextType::class, array('label' => 'Téléphone mobile', 'required' => false, 'attr' => array('placeholder' => 'Numéro de téléphone portable')))
        ;

    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'hetic_core_user_registration';
    }
}
