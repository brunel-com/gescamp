<?php

namespace App\Controllers;

use App\Models\Chambre;
use App\Models\Equipement as Obj;

class EquipementController extends BaseController
{
    public function index()
    {
        $model = model(Obj::class);
        $objList = $model->getAll();
        $data = [
            'objList' => $objList,
            'title' => 'Liste des équipements'
        ];
        return view('equipements/index', $data);
    }

    public function create_view()
    {
        $chambreModel = model(Chambre::class);
        $chambres = $chambreModel->getAll();
        $data = [
            'title' => 'Ajouter un équipement',
            'chambres' => $chambres
        ];
        return view('/equipements/create', $data);
    }

    public function create()
    {
        $obj = model(Obj::class);
        if ($this->validate([
            'type' => 'required|min_length[3]|max_length[100]',
            'etat' => 'required|min_length[3]|max_length[100]',
            'chambre' => 'required|min_length[1]|max_length[30]',
            'quantite' => 'required|min_length[1]',
        ])) {

            $obj->create($this->request->getPost());
            return redirect()->to('/equipements');
        } else {
            return $this->create_view();
        }
    }
}
