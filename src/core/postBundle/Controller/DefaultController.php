<?php

namespace core\postBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('corepostBundle:Default:index.html.twig', array('name' => $name));
    }
}
