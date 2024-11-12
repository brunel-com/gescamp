<?php
namespace App\Controllers;

use App\Models\Site as Obj;

class SiteController extends BaseController
{
    /**
     * Liste des objets
     */
    public function index()
    {
        $model = model(Obj::class);
        $objList = $model->getAll();
        $data = [
            'objList' => $objList,
            'title' => 'Liste des sites',
        ];

        return view('sites/index', $data);
        
    }

    public function show($id)
    {
        $model = model(Obj::class);
        $obj = $model->get($id);
    }

    
}