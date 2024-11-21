<?php

namespace App\Controllers;

use App\Models\Chambre;
use App\Models\Equipement;
use App\Models\Etudiant;
use App\Models\Site;

class HomeController extends BaseController
{
    public function index(): string
    {
        $siteModel = model(Site::class);
        $sites = $siteModel->getAll();

        $chambreModel = model(Chambre::class);
        $chambres = $chambreModel->getAll();

        $equipementModel = model(Equipement::class);
        $equipements = $equipementModel->getAll();

        $etudiantModel = model(Etudiant::class);
        $etudiants = $etudiantModel->getAll();
        

        $data = [
            'chambres' => $chambres,
            'sites' => $sites,
            'equipements' => $equipements,
            'etudiants' => $etudiants,
            'title' => 'Tableau de bord'
        ];
        return view('home', $data);
    }
}
