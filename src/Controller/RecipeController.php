<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

/**
 * @return Response
 * @param Slug $slug
 * @param Id $id
 */
final class RecipeController extends AbstractController
{
    #[Route('/recettes', name: 'recipe.index')]
    public function index(Request $request): Response
    {
        // return new Response('Recettes');
        return $this->render('recipe/index.html.twig');
    }

    #[Route('/recettes/{slug}-{id}', name: 'recipe.show', requirements: ['id' => '\d+', 'slug' => '[a-z0-9-]+'])]
    public function show(Request $request, string $slug, int $id): Response
    {
        // dd($slug, $id);
        // return $this->json([
        //     'slug' => $slug
        // ]);
        return $this->render('recipe/show.html.twig', [
            'slug' => $slug,
            'id' => $id
        ]);
    }
}
