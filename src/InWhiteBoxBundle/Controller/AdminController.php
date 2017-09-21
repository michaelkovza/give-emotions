<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 21.09.2017
 * Time: 18:53
 */

namespace InWhiteBoxBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('InWhiteBoxBundle:Admin:admin.html.twig');
    }
}