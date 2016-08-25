<?php

namespace SunKe\TestBundle\Controller\Blog;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SunKe\TestBundle\Entity\Blog\Post;
use SunKe\TestBundle\Form\Blog\PostType;

/**
 * Blog\Post controller.
 *
 * @Route("/blog_post")
 */
class PostController extends Controller
{
    /**
     * Lists all Blog\Post entities.
     *
     * @Route("/blog", name="blog_post_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $blogPosts = $em->getRepository('SkTestBundle:table_blog')->findAll();
        var_dump($blogPosts);
    }


}
