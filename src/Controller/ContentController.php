<?php

namespace App\Controller;


use App\Repository\ContentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContentController extends AbstractController
{
    #[Route('/content', name: 'app_content')]
    public function index(ContentRepository $contentRepository): Response
    {   
        return $this->render('content/index.html.twig', [
            'content' => $contentRepository->findAll(),
        ]);
    }

    #[Route('/content/{id<\d+>}', name: 'app_content_push')]
    public function change(ContentRepository $contentRepository): Response
    {   
        return $this->render('content/index.html.twig', [
            'content' => $contentRepository->findAll(),
        ]);
    }
}
