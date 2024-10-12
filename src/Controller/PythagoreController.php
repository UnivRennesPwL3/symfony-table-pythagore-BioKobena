<?php

namespace App\Controller;

use App\Utility\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PythagoreController extends AbstractController
{
    private PythagoreUtility $pythagoreUtility;

    // Injecter la classe PythagoreUtility dans le constructeur
    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }

    // Action pour afficher la table de Pythagore
    #[Route('/pythagore/view', name: 'display_pythagore')]
    public function displayPythagoreAction(): Response
    {
        // Utilisation de la méthode display() pour générer le tableau HTML
        $pythagoreView = $this->pythagoreUtility->display();

        // Retourne le rendu du fichier Twig avec les données HTML
        return $this->render('displayPythagore.html.twig', [
            'htmlResponse' => $pythagoreView,
        ]);
    }
}
