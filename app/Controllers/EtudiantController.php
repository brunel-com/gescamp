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

    public function create()
    {
        return view('etudiant/create');
    }

    public function store()
    {
        $obj = new Obj();
        $obj->insert($this->request->getPost());
        return redirect()->to('/etudiant');
    }

    public function edit($id)
    {
        $obj = new Obj();
        $data['etudiant'] = $obj->find($id);
        return view('etudiant/edit', $data);
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
