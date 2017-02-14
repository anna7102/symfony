<?php

namespace Common\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Common\UserBundle\Entity\User;


class UsersFixtures extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface{
    
    /**
     *
     * @var ContainerInterface
     */
    private $container;
    
    public function getOrder() {
        return 0;
    }
    
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    public function load(ObjectManager $manager) {
        
        $usersList = array(
            array(
                'nick' => 'joe25',
                'email' => 'jou@joe.joe',
                'password' => 'joe',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'aude',
                'email' => 'aude@aude.com',
                'password' => '123',
                'role' => 'ROLE_EDITOR'
            ),
            array(
                'nick' => 'chris',
                'email' => 'chris@chris.com',
                'password' => '123',
                'role' => 'ROLE_ADMIN'
            ),
            array(
                'nick' => 'caro',
                'email' => 'caro@caro.com',
                'password' => '123',
                'role' => 'ROLE_SUPER_ADMIN'
            ),
        );
        
        $encoderFactory = $this->container->get('security.encoder_factory');
        
        foreach ($usersList as $userDetails) {
            $User = new User();
            
            $password = $encoderFactory->getEncoder($User)->encodePassword($userDetails['password'], null);
            
            $User->setUsername($userDetails['nick'])
                    ->setEmail($userDetails['email'])
                    ->setPassword($password)
                    ->setRoles(array($userDetails['role']))
                    ->setEnabled(true);
            
            $this->addReference('user-'.$userDetails['nick'], $User);
            
            $manager->persist($User);
            
        }
        
        $manager->flush();
        
    }

    

}
