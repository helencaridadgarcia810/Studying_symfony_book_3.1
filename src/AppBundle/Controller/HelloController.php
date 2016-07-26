<?php
/**
 * Created by PhpStorm.
 * User: montells
 * Date: 26/07/16
 * Time: 16:54
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{

    /**
     * @Route("/hello/{name}", name="hello")
     */

    public function indexAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
//        return $this->render('hello/index.html.twig', array('name' => $name));
    }
}