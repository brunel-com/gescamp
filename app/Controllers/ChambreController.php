<?php

namespace App\Controllers;

use App\Models\Chambre as Obj;
use App\Models\Site;

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
    public function create_view()
    {
        $siteModel = model(Site::class);
        $sites = $siteModel->getAll();
        $data = [
            'title' => 'Ajouter une chambre',
            'sites' => $sites
        ];
        return view('chambres/create_view', $data);
    }

    /**
     * Insert dans la BD
     */
    public function create()
    {
        $model = model(Obj::class);
        if ($this->validate([
            'numero' => 'required|min_length[3]|max_length[10]',
            'site' => 'required',
            'statut' => 'required',
        ])) {
            $model->save([
                'numero' => $this->request->getPost('numero'),
                'site' => $this->request->getPost('site'),
                'statut' => $this->request->getPost('statut'),
            ]);

            session()->setFlashData('chambres_create_success', 'Chambre ajouté avec succès');

            // echo view('chambres/success');
            return redirect()->route('chambres.index');
        } else {
            // afficher la vue du formulaire si le formulaire n'est pas bien rempli
            return $this->create();
        }
    }
}
