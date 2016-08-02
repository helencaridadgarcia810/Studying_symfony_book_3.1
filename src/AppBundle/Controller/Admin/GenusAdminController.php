<?php
/**
 * Created by PhpStorm.
 * User: montells
 * Date: 2/08/16
 * Time: 11:35
 */

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\GenusFormType;

class GenusAdminController extends Controller
{
    /**
     * @Route("/genus/new", name="admin_genus_new")
     */
    public function newAction()
    {
        $form = $this->createForm(GenusFormType::class);
        return $this->render('admin/genus/new.html.twig', [
            'genusForm' => $form->createView()
        ]);

    }
}