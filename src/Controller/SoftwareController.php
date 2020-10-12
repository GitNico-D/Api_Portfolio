<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SoftwareController extends AbstractController
{
    /**
     * @Route("/software", name="software")
     */
    public function softwareList()
    {
    }
}
