<?php
/**
 * Created by PhpStorm.
 * User: sk
 * Date: 2016/8/20
 * Time: 11:52
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number", name="luck")
     */
    public function numberAction()
    {
        $number=mt_rand(0,100);
        var_dump($number);
        return true;
//        return $this->render('lucky/number.html.twig', array(
//            'number' => $number
//        ));
    }
}