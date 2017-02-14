<?php
/**
 * Created by PhpStorm.
 * User: ania
 * Date: 24/07/2016
 * Time: 16:52
 */

namespace Ania\BlogBundle\Twig\Extension;

//use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;
//use Symfony\Component\Security\Core\SecurityContext;

class BlogExtension extends \Twig_Extension
{
    /**
     * @var \Doctrine\Bundle\DoctrineBundle\Registry
     */
    private $doctrine;

    /**
     * @var \Twig_Environment
     */
    private $environment;

    private $categoriesList;

    /**
     * BlogExtension constructor.
     * @param \Doctrine\Bundle\DoctrineBundle\Registry $doctrine
     */
    public function __construct(\Doctrine\Bundle\DoctrineBundle\Registry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function initRuntime(\Twig_Environment $environment)
    {
        $this->environment = $environment;
    }


    public function getName()
    {
        return 'ania_blog_extension';
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('ab_shorten', array($this, 'shorten'),
            array('is_safe' => array('html'))
            )
        );
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('print_categories_list',
                array($this, 'printCategoriesList'),
                array('is_safe' => array('html'))
            ),
            new \Twig_SimpleFunction('print_main_menu',
                array($this, 'printMainMenu'),
                array('is_safe' => array('html'))
            ),
            new \Twig_SimpleFunction('print_tags_cloud',
                array($this, 'TagsCloud'),
                array('is_safe' => array('html'))
            )
        );
    }

    public function printCategoriesList(){

        if(!isset($this->categoriesList)){
            $CategoryRepo = $this->doctrine->getRepository('AniaBlogBundle:Category');
            $this->categoriesList = $CategoryRepo->findAll();
        }


        return $this->environment->render('AniaBlogBundle:Template:categoriesList.html.twig',
            array(
                'categoriesList' => $this->categoriesList
            ));

    }

    public function printMainMenu(){
        $mainMenu = array(
            'accueil' => 'blog_index',
            'a propos de moi' => 'blog_about',
            'contact' => 'blog_contact'
        );

        return $this->environment->render('AniaBlogBundle:Template:mainMenu.html.twig',
            array(
                'mainMenu' => $mainMenu
            )
        );
    }

    public function tagsCloud($limit = 40, $minFontSize = 1, $maxFontSize = 3.5){
        $TagRepo = $this->doctrine->getRepository('AniaBlogBundle:Tag');
        $tagsList = $TagRepo->getTagsListOcc();
        $tagsList = $this->prepareTagsCloud($tagsList, $limit, $minFontSize, $maxFontSize);

        return $this->environment->render('AniaBlogBundle:Template:tagsCloud.html.twig',
            array(
                'tagsList' => $tagsList
            )
        );

    }

    protected function prepareTagsCloud($tagsList, $limit, $minFontSize, $maxFontSize){
        $occs = array_map(function($row){
            return (int)$row['occ'];
        }, $tagsList);

        $minOcc = min($occs);
        $maxOcc = max($occs);

        $spread = $maxOcc - $minOcc;

        $spread = ($spread == 0) ? 1 : $spread;

        usort($tagsList, function($a, $b){
            $ao = $a['occ'];
            $bo = $b['occ'];

            if($ao === $bo) return 0;

            return ($ao < $bo) ? 1 : -1;
        });

        $tagsList = array_slice($tagsList, 0, $limit);

        shuffle($tagsList);

        foreach($tagsList as &$row){
            $row['fontSize'] = round(($minFontSize + ($row['occ'] - $minOcc) * ($maxFontSize - $minFontSize) / $spread), 2);
        }

        return $tagsList;
    }

    public function shorten($text, $length = 200, $wrapTag = 'p'){
        $text = strip_tags($text);
        $text = substr($text, 0, $length). '[...]';
        $openTag = "<{$wrapTag}>";
        $closeTag = "</{$wrapTag}>";

        return $openTag.$text.$closeTag;
    }






}