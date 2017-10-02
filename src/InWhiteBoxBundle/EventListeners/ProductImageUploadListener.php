<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 27.09.2017
 * Time: 19:07
 */

namespace InWhiteBoxBundle\EventListeners;


use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use InWhiteBoxBundle\Entity\Catalog;
use InWhiteBoxBundle\Service\FileUploader;
use Symfony\Component\Finder\Finder;

class ProductImageUploadListener
{
    private $uploader;

    public function __construct(FileUploader $uploader)
    {
        $this->uploader = $uploader;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    private function uploadFile($entity)
    {
        if (!$entity instanceof Catalog) {
            return;
        }

        $files = $entity->getPictureCollection();
        $files['main'] = $entity->getMainPicture();
        if (($originalDirectory = $entity->getPicture()) !== null){
            $mainFilesDirectory = $originalDirectory;
        } else {
            $mainFilesDirectory = md5(uniqid('catalog_item', false));
        }

        $this->uploader->upload($files, $mainFilesDirectory);
        $entity->setPicture($mainFilesDirectory);
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    public function preRemove(LifecycleEventArgs $args)
    {

        $entity = $args->getEntity();

        $this->uploader->removeFiles($entity);
    }

    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if ((!$entity instanceof Catalog) || ($entity->getPicture() === null)) {
            return;
        }

        $filesFinder = new Finder();
        $filesFinder->files()->in($this->uploader->getTargetDir() . DIRECTORY_SEPARATOR . $entity->getPicture());
        foreach ($filesFinder as $imageFile) {
            $fileUrl = $imageFile->getRelativePathname();
            if (strpos($imageFile->getFilename(), 'main_') !== false) {
                $entity->setMainPicture($fileUrl);
            } else {
                $entity->addFileToCollection($fileUrl);
            }
        }
    }
}