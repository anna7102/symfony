<?php

namespace Ania\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PostsController extends Controller
{
    protected $itemsLimit = 3;

    /**
     * @Route(
     *     "/{page}",
     *     name = "blog_index",
     *     defaults = {"page" = 1},
     *     requirements = {"page" = "\d+"}
     * )
     * @Template("AniaBlogBundle:Posts:postsList.html.twig")
     */
    public function indexAction($page)
    {
        $pagination = $this->getPaginatedPosts(array(
            'status' => 'published',
            'orderBy'=> 'p.publishedDate',
            'orderDir' => 'DESC'
        ), $page);

        return array(
            'pagination' => $pagination,
            'listTitle' => 'Derniers articles'
        );
    }

    /**
     * @Route(
     *     "/search/{page}",
     *     name = "blog_search",
     *     defaults = {"page" = 1},
     *     requirements = {"page" = "\d+"}
     * )
     * @Template("AniaBlogBundle:Posts:postsList.html.twig")
     */
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request, $page)
    {
        $searchParam = $request->query->get('search');
        $pagination = $this->getPaginatedPosts(array(
            'status' => 'published',
            'orderBy'=> 'p.publishedDate',
            'orderDir' => 'DESC',
            'search' => $searchParam
        ), $page);

        return array(
            'pagination' => $pagination,
            'listTitle' => sprintf('Résultats de la recherche "%s"', $searchParam),
            'searchParam' => $searchParam
        );
    }

    /**
     * @Route(
     *     "/post/{slug}",
     *     name = "blog_post"
     * )
     * @Template()
     */
    public function postAction($slug)
    {

        $PostRepo = $this->getDoctrine()->getRepository('AniaBlogBundle:Post');

        $Post = $PostRepo->getPublishedPost($slug);

        if(null === $Post){
            throw $this->createNotFoundException('Article non trouvé');
        }



        return array(
            'post'=> $Post
        );
    }

    /**
     * @Route(
     *     "/category/{slug}/{page}",
     *     name = "blog_category",
     *     defaults = {"page" = 1},
     *     requirements = {"page" = "\d+"}
     * )
     * @Template("AniaBlogBundle:Posts:postsList.html.twig")
     */
    public function categoryAction($slug, $page)
    {

        $pagination = $this->getPaginatedPosts(array(
            'status' => 'published',
            'orderBy'=> 'p.publishedDate',
            'orderDir' => 'DESC',
            'categorySlug' => $slug
        ), $page);

        $CategoryRepo = $this->getDoctrine()->getRepository('AniaBlogBundle:Category');
        $Category = $CategoryRepo->findOneBySlug($slug);


        return array(
            'pagination' => $pagination,
            'listTitle' => sprintf("Les articles dans la catégorie \"%s\"", $Category->getName())
        );
    }

    /**
     * @Route(
     *     "/tag/{slug}/{page}",
     *     name = "blog_tag",
     *     defaults = {"page" = 1},
     *     requirements = {"page" = "\d+"}
     * )
     * @Template("AniaBlogBundle:Posts:postsList.html.twig")
     */
    public function tagAction($slug, $page)
    {
        $TagRepo = $this->getDoctrine()->getRepository('AniaBlogBundle:Tag');
        $Tag = $TagRepo->findOneBySlug($slug);

        $pagination = $this->getPaginatedPosts(
            array(
                'status' => 'published',
                'orderBy'=> 'p.publishedDate',
                'orderDir' => 'DESC',
                'tagSlug' => $slug
            ), $page
        );

        return array(
            'pagination' => $pagination,
            'listTitle' => sprintf("Les articles tagés par \"%s\"", $Tag->getName())
        );
    }

    protected function getPaginatedPosts(array $params = array(), $page){
        $PostRepo = $this->getDoctrine()->getRepository('AniaBlogBundle:Post');

        $qb = $PostRepo->getQueryBuilder($params);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($qb, $page, $this->itemsLimit);

        return $pagination;

    }
}
