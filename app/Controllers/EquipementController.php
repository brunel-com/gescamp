<?php
namespace App\Controllers;

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
}