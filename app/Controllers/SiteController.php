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
        /* $model = model(Obj::class);
        $objList = $model->getAll();
        $data = [
            'objList' => $objList,
            'title' => 'Liste des sites',
        ]; */
        $data = [
            'title' => 'Liste des sites'
        ];

        return view('templates/header', $data)
            . view('site/index')
            . view('templates/footer');
        
    }

    public function show($id)
    {
        $model = model(Obj::class);
        $obj = $model->get($id);
    }

    
}