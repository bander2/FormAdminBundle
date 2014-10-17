<?php

namespace Bander2\FormAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Bander2FormAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
