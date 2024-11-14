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
        $data = [
            'objList' => $objList,
            'title' => 'Liste des chambres',
        ];

        return view('chambres/index', $data);
    }

    public function show($id)
    {
        $model = model(Obj::class);
        $obj = $model->get($id);
    }

    /**
     *  Create view
     */
    public function create()
    {
        $data = [
            'title' => 'Ajouter une chambre',
        ];
        return view('chambres/create_view');
    }

    
}