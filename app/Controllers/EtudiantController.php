<?php
namespace App\Controllers;

use App\Models\Etudiant as Obj;

class EtudiantController extends BaseController
{
    public function index()
    {
        $obj = new Obj();
        $objList = $obj->getAll();
        $data = [
            'objList' => $objList,
            'title' => 'Liste des étudiants',
        ];
        return view('etudiants/index', $data);
    }

    public function create_view()
    {
        $data = [
            'title' => 'Ajouter un étudiant',
        ];
        return view('etudiants/create', $data);
    }

    public function create()
    {
        $obj = model(Obj::class);
        if ($this->validate([
            'nom' => 'required|min_length[3]|max_length[100]',
            'prenom' => 'required|min_length[3]|max_length[100]',
            'classe' => 'required|min_length[3]|max_length[30]',
            'filiere' => 'required|min_length[3]|max_length[30]',
            'cycle' => 'required|min_length[3]|max_length[10]',
        ])) {

            $obj->insert($this->request->getPost());
            return redirect()->route('etudiants.index');
        } else {
            return $this->create_view();
        }
    }

    public function edit($id)
    {
        $obj = new Obj();
        $data['etudiant'] = $obj->find($id);
        return view('etudiants/update', $data);
    }

    public function update($id)
    {
        $obj = new Obj();
        $obj->update($id, $this->request->getPost());
        return redirect()->to('/etudiant');
    }

    public function delete($id)
    {
        $obj = new Obj();
        $obj->delete($id);
        return redirect()->to('/etudiant');
    }
}   
