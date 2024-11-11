<?php
namespace App\Controllers;

use App\Models\Chambre as Obj;

class ChambreController extends BaseController
{
    /**
     * Liste des objets
     */
    public function index()
    {
        $model = model(Obj::class);
        $objList = $model->getAll();
    }

    public function show($id)
    {
        $model = model(Obj::class);
        $obj = $model->get($id);
    }

    
}