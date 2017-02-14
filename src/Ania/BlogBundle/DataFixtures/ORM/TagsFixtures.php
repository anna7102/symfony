<?php

namespace Ania\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Ania\BlogBundle\Entity\Tag;

class TagsFixtures extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $tagsList = array(
            'js',
            'php',
            'mysql',
            'html',
            'css',
            'flexbox',
            'symfony',
            'bootstrap',
            'sass',
            'less',
            'angular',
            'react',
            'jquery',
            'ajax'
        );

        foreach ($tagsList as $key =>$name){
            $Tag = new Tag();
            $Tag->setName($name);

            $manager->persist($Tag);
            $this->addReference('tag_'.$name, $Tag);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 0;
    }
}