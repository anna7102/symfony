<?php

namespace Ania\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ania\BlogBundle\Entity\Post;


class PostsFixtures extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $postsList = array(

            array(
                'title' => 'HTML5 se dévoile',
                'content' => '<p>Nam placerat massa eu purus euismod, vitae interdum diam feugiat. Curabitur porttitor, arcu non dapibus tempus, ex ante ornare felis, et fringilla lectus purus et nisl. Fusce in luctus nulla. Vestibulum ac metus vitae ex elementum faucibus eget in dui. Nulla vitae efficitur purus. Nunc imperdiet nisi non urna sagittis, ac sodales lacus luctus. Nam quis blandit metus, nec accumsan nibh.</p>',
                'category' => 'html',
                'tags' => array('html', 'css'),
                'author' => 'Gucio Brzeczyk',
                'createDate' => '2016-07-24 09:47:22',
                'publishedDate' => '2016-07-24 10:47:22'
            ),

            array(
                'title' => 'JavaScript & JQuery: Interactive Front-End Web Development',
                'content' => '</p>Nam placerat massa eu purus euismod, vitae interdum diam feugiat. Curabitur porttitor, arcu non dapibus tempus, ex ante ornare felis, et fringilla lectus purus et nisl. Fusce in luctus nulla. Vestibulum ac metus vitae ex elementum faucibus eget in dui. Nulla vitae efficitur purus. Nunc imperdiet nisi non urna sagittis, ac sodales lacus luctus. Nam quis blandit metus, nec accumsan nibh.</p>',
                'category' => 'js',
                'tags' => array('js', 'jquery'),
                'author' => 'Pszczolka Maja',
                'createDate' => '2016-07-24 11:47:22',
                'publishedDate' => '2016-07-24 12:47:22'
            ),

            array(
                'title' => 'Symfony3',
                'content' => '<p>Nam placerat massa eu purus euismod, vitae interdum diam feugiat. Curabitur porttitor, arcu non dapibus tempus, ex ante ornare felis, et fringilla lectus purus et nisl. Fusce in luctus nulla. Vestibulum ac metus vitae ex elementum faucibus eget in dui. Nulla vitae efficitur purus. Nunc imperdiet nisi non urna sagittis, ac sodales lacus luctus. Nam quis blandit metus, nec accumsan nibh.</p>',
                'category' => 'symfony',
                'tags' => array('php', 'symfony'),
                'author' => 'Mama Muminka',
                'createDate' => '2016-07-24 13:47:22',
                'publishedDate' => '2016-07-24 14:47:22'
            ),

            array(
                'title' => 'Sécurité PHP5 et MySQL',
                'content' => '<p>Nam placerat massa eu purus euismod, vitae interdum diam feugiat. Curabitur porttitor, arcu non dapibus tempus, ex ante ornare felis, et fringilla lectus purus et nisl. Fusce in luctus nulla. Vestibulum ac metus vitae ex elementum faucibus eget in dui. Nulla vitae efficitur purus. Nunc imperdiet nisi non urna sagittis, ac sodales lacus luctus. Nam quis blandit metus, nec accumsan nibh.</p>',
                'category' => 'php',
                'tags' => array('php', 'mysql'),
                'author' => 'Mala Mi',
                'createDate' => '2016-07-24 15:47:22',
                'publishedDate' => '2016-07-24 16:47:22'
            ),

            array(
                'title' => 'CSS3 Flexbox, plongez dans les CSS modernes',
                'content' => '<p>Nam placerat massa eu purus euismod, vitae interdum diam feugiat. Curabitur porttitor, arcu non dapibus tempus, ex ante ornare felis, et fringilla lectus purus et nisl. Fusce in luctus nulla. Vestibulum ac metus vitae ex elementum faucibus eget in dui. Nulla vitae efficitur purus. Nunc imperdiet nisi non urna sagittis, ac sodales lacus luctus. Nam quis blandit metus, nec accumsan nibh.</p>',
                'category' => 'html',
                'tags' => array('css', 'flexbox'),
                'author' => 'Paszczak Wloczykij',
                'createDate' => '2016-07-24 17:47:22',
                'publishedDate' => '2016-07-24 18:47:22'
            ),

        );

        foreach ($postsList as $details){
            $Post = new Post();
            $Post->setTitle($details['title'])
                ->setContent($details['content'])
                ->setAuthor($details['author'])
                ->setCreateDate(new \DateTime($details['createDate']));

            if(null !== $details['publishedDate']){
                $Post->setPublishedDate(new \DateTime($details['publishedDate']));
            }


            $Post
                ->setCategory($this->getReference('category_'.$details['category']));

            foreach($details['tags'] as $tagName) {
                $Post->addTag($this->getReference('tag_'.$tagName));
            }

            $manager->persist($Post);
        }

        $manager->flush();
    }

    public function getOrder()
    {
       return 1;
    }

}