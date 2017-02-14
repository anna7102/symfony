<?php

namespace Common\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class RememberPasswordType extends AbstractType {

    public function getName() {
        return 'rememberPassword';
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('email', 'email', array(
                'label' => 'Votre adresse email',
                'constraints' => array(
                    new Assert\NotBlank(),
                    new Assert\Email()
                )
            ))
            ->add('submit', 'submit', array(
                'label' => 'Rappeler le mot de passe'
            ));
    }

}