<?php

namespace SunKe\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/sk")
     */
    public function indexAction()
    {
        echo "sk222";
        exit;
        return $this->render('SkTestBundle:Default:index.html.twig');
    }
}
