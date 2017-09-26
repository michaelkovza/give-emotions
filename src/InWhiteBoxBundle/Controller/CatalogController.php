<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 21.09.2017
 * Time: 19:04
 */

namespace InWhiteBoxBundle\Controller;


use InWhiteBoxBundle\Entity\Catalog;
use InWhiteBoxBundle\Form\CatalogType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

class CatalogController extends Controller
{
    public function indexAction()
    {
        $catalogRepository = $this->getDoctrine()->getRepository('InWhiteBoxBundle:Catalog');
        $catalog = $catalogRepository->findAll();
        return $this->render('@InWhiteBox/Admin/Catalog/index.html.twig', ['catalog' => $catalog]);
    }

    public function showAction(Catalog $catalog)
    {
        $deleteForm = $this->createDeleteForm($catalog);
        return $this->render('@InWhiteBox/Admin/Catalog/show.html.twig', ['product' => $catalog, 'delete_form' => $deleteForm->createView()]);
    }

    public function newAction( Request $request)
    {
        $catalog = new Catalog();
        $form = $this->createForm(CatalogType::class,$catalog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /** @var UploadedFile $file */
            $file = $catalog->getPicture();

            $fileName = md5(uniqid('', true)) . '.' . $file->guessExtension();

            $file->move(
                $this->getParameter('product_directory'),
                $fileName
            );
            $catalog->setPicture($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($catalog);
            $em->flush();

            return $this->redirect($this->generateUrl('catalog_index'));
        }
        return $this->render('@InWhiteBox/Admin/Catalog/new.html.twig', ['form' => $form->createView()]);
    }

    public function deleteAction(Catalog $catalog, Request $request)
    {
        $form = $this->createDeleteForm($catalog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($catalog);
            $em->flush();
        }

        return $this->redirectToRoute('catalog_index');
    }

    public function editAction( Catalog $catalog, Request $request)
    {
        $originalImage = $catalog->getPicture();
        $catalog->setPicture(
            new UploadedFile('uploads/products/' . $catalog->getPicture(), $catalog->getPicture())
        );
        $deleteForm = $this->createDeleteForm($catalog);
        $editForm = $this->createForm(CatalogType::class, $catalog);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            if ($catalog->getPicture() === null) {
                $image = $originalImage;
            } else {
                $fileUploader = $this->get('kam.news_picture_uploader');
                $image = $fileUploader->upload($catalog->getPicture());
            }
            $catalog->setPicture($image);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('catalog_show', ['id' => $catalog->getId()]);
        }

        return $this->render('@InWhiteBox/Admin/Catalog/edit.html.twig', [
            'product' => $catalog,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ]);
    }

    /**
     * Creates a form to delete a news entity.
     *
     * @param Catalog $catalog
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Catalog $catalog)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('catalog_delete', ['id' => $catalog->getId()]))
            ->setMethod('DELETE')
            ->getForm();
    }
}
