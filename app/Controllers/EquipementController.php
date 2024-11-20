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

    public function update_view()
    {
        $model = model(Obj::class);
        $chambreModel = model(Chambre::class);

        $obj = $model->get($this->request->getGet('id'));
        $chambres = $chambreModel->getAll();
        $data = [
            'chambres' => $chambres,
            'obj' => $obj,
            'title' => 'Éditer équipement ' . $obj['type'],
        ];
        return view('equipements/update', $data);
    }

    public function update()
    {
        $obj = model(Obj::class);
        if ($this->validate([
            'type' => 'required|min_length[3]|max_length[100]',
            'etat' => 'required|min_length[3]|max_length[100]',
            'chambre' => 'required|min_length[1]|max_length[30]',
            'quantite' => 'required|min_length[1]',
        ])) {
            $obj->update($this->request->getPost('id'), $this->request->getPost());
            return redirect()->to('/equipements');
        } else {
            return $this->update_view();
        }
    }

    /**
     * Vue pour supprimer un objet
     */
    public function delete_view()
    {
        $model = model(Obj::class);
        $obj = $model->get($this->request->getGet('id'));

        $data = [
            'title' => 'Supprimer  l\'équipement ' . $obj['type'],
            'obj' => $obj
        ];
        return view('equipements/delete', $data);
    }

    public function delete()
    {
        $obj = model(Obj::class);
        $obj->delete($this->request->getPost('id'));
        return redirect()->to('/equipements');
    }
}
