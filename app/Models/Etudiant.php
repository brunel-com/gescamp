<?php

namespace App\Models;

use CodeIgniter\Model;

class Etudiant extends Model
{
    protected $table = 'etudiants';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom', 'prenom', 'classe', 'filiere', 'cycle', 'chambre'];

    public function getAll()
    {
        return $this->findAll();
    }

    public function get($id)
    {
        return $this->find($id);
    }

    public function create($data)
    {
        return $this->insert($data);
    }
}
