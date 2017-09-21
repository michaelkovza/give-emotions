<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 21.09.2017
 * Time: 19:04
 */

namespace InWhiteBoxBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CatalogController extends Controller
{
    public function indexAction()
    {
        $catalogElements = [];
        return $this->render('InWhiteBoxBundle:Admin/Catalog:index.html.twig',[
            'catalog' => $catalogElements,
        ]);
    }

    public function showAction($id)
    {

    }

    public function newAction()
    {

    }

    public function deleteAction($id)
    {

    }

    public function editAction($id)
    {

    }
}
