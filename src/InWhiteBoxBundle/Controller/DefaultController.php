<?php

namespace InWhiteBoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InWhiteBoxBundle:Default:index.html.twig');
    }
}
