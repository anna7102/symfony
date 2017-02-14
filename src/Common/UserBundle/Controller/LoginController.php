<?php

namespace Common\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Acl\Exception\Exception;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Request;
use Common\UserBundle\Form\Type\LoginType;
use Common\UserBundle\Form\Type\RememberPasswordType;
use Common\UserBundle\Exception\UserException;
use Symfony\Component\Form\FormError;


class LoginController extends Controller
{
    /**
     * @Route(
     *     "/login",
     *     name = "blog_login"
     * )
     *
     * @Template()
     */
    public function loginAction(Request $Request)
    {
        $Session = $this->get('session');

        // Login Form
        if($Request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)){
            $loginError = $Request->attributes->get(SecurityContextInterface::AUTHENTICATION_ERROR);
        }else{
            $loginError = $Session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        }

        if(isset($loginError)){
            $this->get('session')->getFlashBag()->add('error', $loginError->getMessage());

        }

        $loginForm = $this->createForm(new LoginType(), array(
            'username' => $Session->get(SecurityContextInterface::LAST_USERNAME)
        ));

        // Remember Password Form
        $rememberPasswordForm = $this->createForm(new RememberPasswordType());

        if($Request->isMethod('POST')){
            $rememberPasswordForm->handleRequest($Request);

            if($rememberPasswordForm->isValid()){
                try{
                    $userEmail = $rememberPasswordForm->get('email')->getData();

                    $userManager = $this->get('user_manager');
                    $userManager->sendResetPasswordLink($userEmail);

                    $this->get('session')->getFlashBag()->add('success',
                        'Instructions pour la réinitialisation de votre mot de passe ont été envoyés');
                    return $this->redirect($this->generateUrl('blog_login'));
                }catch (UserException $exc){
                    $error = new FormError($exc->getMessage());
                    $rememberPasswordForm->get('email')->addError($error);

                }

            }
        }

        return array(
            'loginForm' => $loginForm->createView(),
            'rememberPasswordForm' => $rememberPasswordForm->createView()
        );
    }

    /**
     * @Route(
     *     "/reset-password/{actionToken}",
     *     name = "user_resetPassword"
     * )
     */
    public function resetPasswordAction($actionToken)
    {
        try{
            $userManager = $this->get('user_manager');
            $userManager->resetPassword($actionToken);

            $this->get('session')->getFlashBag()->add('success', 'Mot de passe a été envoyé!');
        }catch (Exception $ex){
            $this->get('session')->getFlashBag()->add('error', $ex->getMessage());

        }

        return $this->redirect($this->generateUrl('blog_login'));

    }

}
