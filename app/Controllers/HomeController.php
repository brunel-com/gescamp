<?php

namespace App\Controllers;

use App\Models\Chambre;
use App\Models\Site;

class HomeController extends BaseController
{
    public function index(): string
    {
        $siteModel = model(Site::class);
        $sites = $siteModel->getAll();
        $chambreModel = model(Chambre::class);
        $chambres = $chambreModel->getAll();

        $equipements = [];
        $etudiants = [];

        $data = [
            'chambres' => $chambres,
            'sites' => $sites,
            'equipements' => $equipements,
            'etudiants' => $etudiants,
            'title' => 'Acceuil'
        ];
        return view('home', $data);
    }
}
