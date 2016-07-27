<?php
/**
 * Created by PhpStorm.
 * User: montells
 * Date: 27/07/16
 * Time: 15:44
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
//        return new Response('The genus: '.$genusName);
        $templating = $this->container->get('templating');
        $html = $templating->render('genus/show.html.twig', array(
            'name' => $genusName
        ));
        return new Response($html);
    }
}