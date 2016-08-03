<?php

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\GenusFormType;
use Symfony\Component\HttpFoundation\Request;

class GenusAdminController extends Controller
{
    /**
     * @Route("/admin/genus/new", name="admin_genus_new")
     */
    public function newAction(Request $request)
    {
        $form = $this->createForm(GenusFormType::class);

        // only handles data on POST
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $genus = $form->getData();

            //saving data
            $em = $this->getDoctrine()->getManager();
            $em->persist($genus);
            $em->flush();

            $this->addFlash('success', 'Genus created!');
            return $this->redirectToRoute('app_admin_genusadmin_list');
        }

        return $this->render('admin/genus/new.html.twig', [
            'genusForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/genus/list")
     */

    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $genuses = $em->getRepository('AppBundle:Genus')
            ->findAll();

        return $this->render('admin/genus/list.html.twig', [
            'genuses' => $genuses
        ]);
    }
}