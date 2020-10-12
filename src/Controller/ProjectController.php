<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;

/**
* @Route("/api")
*/
class ProjectController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
    }

}

