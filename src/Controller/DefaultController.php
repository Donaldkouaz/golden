<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'Page d\'accueil',
        ]);
    }

    public function projets($page)
    {
        return $this->render('default/projets.html.twig', [
            'controller_name' => 'Plans',
        ]);
    }

    public function projetscat($categorie, $page)
    {
        return $this->render('default/projetcat.html.twig', [
            'controller_name' => 'Plans Categorie',
        ]);
    }
}
