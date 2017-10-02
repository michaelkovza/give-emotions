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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class CatalogController extends Controller
{
    public function indexAction()
    {
        $catalogRepository = $this->getDoctrine()->getRepository('InWhiteBoxBundle:Catalog');
        $products = $catalogRepository->findAll();
        $catalog = [];
        foreach ($products as $key => $product) {
            $catalog[$key]['deleteForm'] = $this->createDeleteForm($product)->createView();
            $catalog[$key]['product'] = $product;
        }
        return $this->render('@InWhiteBox/Admin/Catalog/index.html.twig', ['catalog' => $catalog]);
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

    public function showAction(Request $request, Catalog $catalog)
    {
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'name' => $catalog->getName(),
                'description' => $catalog->getDescription(),
                'images' => $catalog->getAllFilesURLArray(),
                'price' => $catalog->getPrice(),
            ]);
        }
        $deleteForm = $this->createDeleteForm($catalog);
        return $this->render('@InWhiteBox/Admin/Catalog/show.html.twig', ['product' => $catalog, 'delete_form' => $deleteForm->createView()]);
    }

    public function newAction(Request $request)
    {
        $catalog = new Catalog();
        $form = $this->createForm(CatalogType::class, $catalog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

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

    public function editAction(Catalog $catalog, Request $request)
    {
        list($originalMainImage, $originalImageCollectionFiles) = $this->initFromExist($catalog);
        $originalProductImageDirectory = $catalog->getPicture();
        $deleteForm = $this->createDeleteForm($catalog);
        $editForm = $this->createForm(CatalogType::class, $catalog);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            if ($catalog->getMainPicture() === null || !($catalog->getMainPicture() instanceof UploadedFile)) {
                $catalog->setMainPicture($originalMainImage);
            }
            if (empty($catalog->getPictureCollection())) {
                $catalog->setPictureCollection($originalImageCollectionFiles);
            }


            $catalog->setPicture(null);
            $em = $this->getDoctrine()->getManager();
            $em->persist($catalog);
            $em->flush();
            $uploader = $this->get('in_white_box.file_uploader');
            $this->removeOldFiles($uploader->getTargetDir() . DIRECTORY_SEPARATOR . $originalProductImageDirectory);

            return $this->redirectToRoute('catalog_show', ['id' => $catalog->getId()]);
        }

        return $this->render('@InWhiteBox/Admin/Catalog/edit.html.twig', [
            'product' => $catalog,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ]);
    }

    /**
     * @param Catalog $catalog
     * @return array
     * @throws \Symfony\Component\HttpFoundation\File\Exception\FileException
     */
    private function initFromExist(Catalog $catalog)
    {
        $fileUploader = $this->get('in_white_box.file_uploader');
        $catalogPicturesDirectoryPath = $fileUploader->getTargetDir() . DIRECTORY_SEPARATOR . $catalog->getPicture() . DIRECTORY_SEPARATOR;

        $originalMainImage = $catalog->getMainPicture();
        $catalog->setMainPicture(
            new UploadedFile($catalogPicturesDirectoryPath . $originalMainImage, $originalMainImage, null, null, null, true)
        );

        $originalImageCollection = $catalog->getPictureCollection();
        $originalImageCollectionFiles = [];
        foreach ($originalImageCollection as $originalImage) {
            $originalImageCollectionFiles[] = new UploadedFile($catalogPicturesDirectoryPath . $originalImage, $originalImage, null, null, null, true);
        }
        return array($originalMainImage, $originalImageCollectionFiles);
    }

    /**
     * @param $originalProductImageDirectory
     */
    private function removeOldFiles($originalProductImageDirectory)
    {
        $fileUploader = $this->get('in_white_box.file_uploader');
        $fileUploader->removeFilesFromDir($originalProductImageDirectory);
    }
}
