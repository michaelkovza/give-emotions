<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 27.09.2017
 * Time: 18:54
 */

namespace InWhiteBoxBundle\Service;

use InWhiteBoxBundle\Entity\Catalog;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    /**
     * @var string Where need to store files
     */
    private $targetDir;

    /**
     * FileUploader constructor.
     * @param $targetDir
     */
    public function __construct($targetDir)
    {
        $this->targetDir = $targetDir;
    }

    /**
     * @param array $files
     * @throws \RuntimeException
     */
    public function upload(array $files, $dir)
    {
            /** @var $file UploadedFile */
            foreach ($files as $key => $file) {
                if ($key === 'main') {
                    $fileName = uniqid('main_', false) . '.' . $file->guessExtension();
                } else {
                    $fileName = md5(uniqid('', false)) . '.' . $file->guessExtension();
                }
                $file->move($this->getTargetDir() . DIRECTORY_SEPARATOR . $dir, $fileName);
            }
    }

    /**
     * @return string
     */
    public function getTargetDir()
    {
        return $this->targetDir;
    }

    public function removeFiles($entity)
    {
        if (!$entity instanceof Catalog) {
            return;
        }

        $files = glob($this->getTargetDir() . DIRECTORY_SEPARATOR . $entity->getPicture() . DIRECTORY_SEPARATOR . '*');
        foreach ($files as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }
        rmdir($this->getTargetDir() . DIRECTORY_SEPARATOR . $entity->getPicture());
        $entity->setPicture(null);
    }

    public function removeFilesFromDir($dir)
    {
        $files = glob($dir . DIRECTORY_SEPARATOR . '*');
        foreach ($files as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }
        rmdir($dir);
    }
}