<?php

namespace Ania\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Ania\BlogBundle\Entity\Category;

class CategoriesFixtures extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $categoriesList = array(
            'js' => 'JavaScript',
            'php' => 'Php',
            'html'=> 'Html',
            'css' => 'Css',
            'symfony' => 'Symfony'
        );

        foreach ($categoriesList as $key =>$name){
            $Category = new Category();
            $Category->setName($name);

            $manager->persist($Category);
            $this->addReference('category_'.$key, $Category);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 0;
    }
}