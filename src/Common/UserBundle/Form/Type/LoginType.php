<?php
/**
 * Created by PhpStorm.
 * User: ania
 * Date: 25/07/2016
 * Time: 19:44
 */

namespace Common\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class LoginType extends AbstractType
{
    public function getName()
    {
        return 'login';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('username','text', array(
                    'label' => 'Login'
                ))
                ->add('password', 'password', array(
                    'label' => 'Mot de passe'
                ))
                ->add('remember_me', 'checkbox', array(
                    'label' => 'Se souvenir de moi'
                ))
                ->add('save', 'submit', array(
                    'label' => 'Connexion'
                ));
    }
}