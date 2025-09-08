<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController {

    #[Route("/", name: "home")]
    function index(Request $request): Response {
        // pour analyser un objet dump(), dd() = dump + dive
        // donne methodes, fichiers envoyes, plus de var globale
        // dd($request);
        // return new Response('Bonjour '. $request->query->get('name', 'Inconnu'));
        return $this->render('home/index.html.twig');
    }
}
