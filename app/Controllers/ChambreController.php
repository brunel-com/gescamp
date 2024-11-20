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
        return view('chambres/create', $data);
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

            /* $siteModel = model(Site::class);
            $site = $siteModel->where('label', $this->request->getPost('site'))->first();
            $chambres = $site['chambres'];
            if (!empty($chambres)) {
                $chambres = $chambres . ','. $this->request->getPost('numero');
            } else {
                $chambres = $this->request->getPost('numero');
            }
            $siteModel->update($site['id'], ['chambres' => $chambres]); */

            session()->setFlashData('flash_operation_success', 'Chambre ajouté avec succès');

            // echo view('chambres/success');
            return redirect()->route('chambres.index');
        } else {
            // afficher la vue du formulaire si le formulaire n'est pas bien rempli
            return $this->create_view();
        }
    }

    /**
     *  Update view
     */
    public function update_view()
    {
        $siteModel = model(Site::class);
        $sites = $siteModel->getAll();

        $model = model(Obj::class);
        $obj = $model->get($_GET['id']);

        $data = [
            'title' => 'Éditer chambre numéro ' . $obj['numero'],
            'sites' => $sites,
            'obj' => $obj
        ];
        return view('chambres/update', $data);
    }

    /**
     * Update obj dans la BD
     */
    public function update()
    {
        $model = model(Obj::class);
        if ($this->validate([
            'numero' => 'required|min_length[3]|max_length[10]',
            'site' => 'required',
            'statut' => 'required',
        ])) {
            $data = [
                'numero' => $this->request->getPost('numero'),
                'site' => $this->request->getPost('site'),
                'statut' => $this->request->getPost('statut'),
            ];
            $id = $this->request->getPost('id');
            $model->update($id, $data);

            session()->setFlashData('flash_operation_success', 'Chambre edité avec succès');

            return redirect()->route('chambres.index');
        } else {
            // afficher la vue du formulaire si le formulaire n'est pas bien rempli
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
            'title' => 'Supprimer une chambre',
            'obj' => $obj
        ];
        return view('chambres/delete', $data);
    }

    /**
     * Supprimer un objet de la bd
     */
    public function delete()
    {
        $model = model(Obj::class);
        $model->delete($this->request->getGet('id'));

        session()->setFlashData('flash_operation_success', 'Chambre supprimé avec succès');

        return redirect()->route('chambres.index');
    }
}
