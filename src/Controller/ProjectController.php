<?php

namespace App\Controller;

// use App\Entity\Project;
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
     * @Route("/projects", name="get_project_list", methods={"GET"})
     */
    public function getProjectList(ProjectRepository $projectRepository, SerializerInterface $serializer)
    {
        $projects = $projectRepository->findAll();
        $data = $serializer->serialize($projects, 'json');
        return new Response($data, 200, [
            'Content-Type' => 'application/json'
        ]);
    }  
}

