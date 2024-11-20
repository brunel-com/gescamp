<?php

namespace App\Models;

use CodeIgniter\Model;

class Equipement extends Model
{
    protected $table = 'equipements';
    protected $primaryKey = 'id';
    protected $allowedFields = ['type', 'etat', 'chambre', 'quantite'];

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
