<?php
declare(strict_types=1);

namespace App\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;

class DefaultController extends FOSRestController
{

    /**
     * @Rest\Get("/")
     * @throws \Exception
     */
    public function indexAction() {
        throw new \Exception('test');
    }
}