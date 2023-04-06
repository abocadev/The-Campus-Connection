<?php

namespace App\Controller\Auth;

use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\HttpFoundation\File\File;

class FileToStringTransformer implements \Symfony\Component\Form\DataTransformerInterface
{

    public function transform($file)
    {
        if($file instanceof File){
            return $file->getFilename();
        }

        return '';
    }

    /**
     * @inheritDoc
     */
    public function reverseTransform($string)
    {
        try {
            return new File($string);
        }catch (\Exception $e){
            throw new TransformationFailedException($e->getMessage());
        }
    }
}