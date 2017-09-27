<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 27.09.2017
 * Time: 18:54
 */

namespace InWhiteBoxBundle\Service;

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
     * @return string
     * @throws \RuntimeException
     */
    public function upload(array $files)
    {
        $mainFilesDirectory = $this->getTargetDir() . DIRECTORY_SEPARATOR . md5(uniqid('catalog_item', false));

        /** @var $file UploadedFile */
        foreach ($files as $key => $file) {
            if ($key === 'main') {
                $fileName = uniqid('main', false) . '.' . $file->guessExtension();
            } else {
                $fileName = md5(uniqid('', false)) . '.' . $file->guessExtension();
            }
            $file->move($mainFilesDirectory, $fileName);
        }
        return $mainFilesDirectory;
    }

    /**
     * @return string
     */
    public function getTargetDir()
    {
        return $this->targetDir;
    }
}