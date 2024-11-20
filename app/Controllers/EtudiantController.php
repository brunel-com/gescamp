<?php
namespace App\Controllers;

use App\Models\Chambre;
use App\Models\Etudiant as Obj;

class EtudiantController extends BaseController
{
    public function index()
    {
        $model = model(Obj::class);
        $objList = $model->getAll();
        $data = [
            'objList' => $objList,
            'title' => 'Liste des étudiants',
        ];
        return view('etudiants/index', $data);
    }

    public function create_view()
    {
        $chambreModel = model(Chambre::class);
        $chambres = $chambreModel->getAll();
        $data = [
            'title' => 'Ajouter un étudiant',
            'chambres' => $chambres
        ];
        return view('etudiants/create', $data);
    }

    public function create()
    {
        $obj = model(Obj::class);
        if ($this->validate([
            'nom' => 'required|min_length[3]|max_length[100]',
            'prenom' => 'required|min_length[3]|max_length[100]',
            'classe' => 'required|min_length[1]|max_length[30]',
            'filiere' => 'required|min_length[1]|max_length[30]',
            'cycle' => 'required|min_length[1]|max_length[10]',
        ])) {

            $obj->create($this->request->getPost());

            session()->setFlashData('flash_operation_success', 'success');

            return redirect()->to('/etudiants');
        } else {
            return $this->create_view();
        }
    }

    public function update_view()
    {
        $model = new Obj();
        $chambreModel = model(Chambre::class);

        $obj = $model->get($this->request->getGet('id'));
        $chambres = $chambreModel->getAll();
        $data = [
            'chambres' => $chambres,
            'obj' => $obj,
            'title' => 'Éditer étudiant ' . $obj['nom'] . ' ' . $obj['prenom'],
        ];
        return view('etudiants/update', $data);
    }

    public function update()
    {
        $model = model(Obj::class);
        if ($this->validate([
            'nom' => 'required|min_length[3]|max_length[100]',
            'prenom' => 'required|min_length[3]|max_length[100]',
            'classe' => 'required|min_length[1]|max_length[30]',
            'filiere' => 'required|min_length[1]|max_length[30]',
            'cycle' => 'required|min_length[1]|max_length[10]',
        ])) {
            $id = $this->request->getPost('id');
            $model->update($id, $this->request->getPost());

            session()->setFlashData('flash_operation_success', 'success');

            return redirect()->to('/etudiants');
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
            'title' => 'Supprimer  l\'étudiant ' . $obj['nom'] . ' ' . $obj['prenom'],
            'obj' => $obj
        ];
        return view('etudiants/delete', $data);
    }

    public function delete()
    {
        $obj = model(Obj::class);
        $obj->delete($this->request->getPost('id'));

        session()->setFlashData('flash_operation_success', 'success');

        return redirect()->to('/etudiants');
    }
}   
