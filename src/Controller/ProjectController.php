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

        // $response = new Response($data);
        // $response->header->set('Content-Type', 'application/json');

        // return $response;
        // dump('dsdsdsqd');die;
        return new Response($data, 200, [
            'Content-Type' => 'application/json'
        ]);
    }

    /**
     * @Route("/projects", name="create_project", methods={"POST"})
     */
    public function createProject()
    {
    }

    /**
     * @Route("/project/{id}", name="get_project", methods={"GET"})
     */
    public function getProject()
    {
    }

    /**
     * @Route("/project/{id}", name="update_project", methods={"PUT"})
     */
    public function updateProject()
    {
    }
}

