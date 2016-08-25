<?php
/**
 * Created by PhpStorm.
 * User: sk
 * Date: 2016/8/20
 * Time: 15:13
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class BlogController extends Controller
{

    /**
     * @Route("/b")
     */
    public function listAction($page = 1,Request $request)
    {
        $page = $request->query->get('page', 1);
        var_dump($page);
        $session = $request->getSession();

        // store an attribute for reuse during a later user request
        $session->set('foo', 'bar');

        // get the attribute set by another controller in another request
        $foobar = $session->get('foo');
        var_dump($foobar);

        return $this->json(array('username' => 'jane.doe'));

        // use a default value if the attribute doesn't exist
        $filters = $session->get('filters', array());
    }

    /**
     * @Route(
     *     "/articles/{_locale}/{year}/{title}.{_format}",
     *     defaults={"_format": "html"},
     *     requirements={
     *         "_locale": "en|fr",
     *         "_format": "html|rss",
     *         "year": "\d+"
     *     }
     * )
     */
    public function showAction($_locale, $year, $title)
    {

    }

    /**
     * @Route("/test/{slug}", name="blog_list")
     */
    public function testAction($slug)
    {
        $url = $this->generateUrl(
            'blog_list',
            array('slug' => 'my-blog-post')
        );
        var_dump($url);
        $url2 = $this->generateUrl('blog_list', array('slug' => 'my-blog-post'), UrlGeneratorInterface::ABSOLUTE_URL);
        var_dump($url2);
    }

    public function redirectAction()
    {
        // redirect to the "homepage" route
        return $this->redirectToRoute('homepage');

        // do a permanent - 301 redirect
        return $this->redirectToRoute('homepage', array(), 301);

        // redirect to a route with parameters
        return $this->redirectToRoute('blog_show', array('slug' => 'my-page'));

        // redirect externally
        return $this->redirect('http://symfony.com/doc');
    }

}