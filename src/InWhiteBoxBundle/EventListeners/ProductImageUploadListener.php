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
        $filesDirectory = $this->uploader->upload($files);

        $entity->setPicture($filesDirectory);
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    public function preRemove(LifecycleEventArgs $args)
    {

        $entity = $args->getEntity();

        $this->removeFiles($entity);
    }

    private function removeFiles($entity)
    {
        if (!$entity instanceof Catalog) {
            return;
        }

        $files = glob($entity->getPicture() . DIRECTORY_SEPARATOR . '*');
        foreach ($files as $file) {
            if (is_file($file)){
                unlink($file);
            }
        }
        rmdir($entity->getPicture());
    }
//    public function postLoad(LifecycleEventArgs $args)
//    {
//        $entity = $args->getEntity();
//
//        if (!$entity instanceof Catalog) {
//            return;
//        }
//
//        if ($fileName = $entity->getBrochure()) {
//            $entity->setBrochure(new File($this->uploader->getTargetDir().'/'.$fileName));
//        }
//    }
}