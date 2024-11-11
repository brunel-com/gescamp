<?php
namespace App\Models;

use CodeIgniter\Model;

class Site extends Model
{
    protected $table = 'sites';
    protected $primaryKey = 'id';

    // les champs de la table qu'on peut edit lors des inserts et updates sur la db
    protected $allowedFields = ['id', 'chambres', 'label'];

    /**
     * Liste des objets
     */
    public function getAll()
    {
        return $this->findAll();
    }

    /**
     * Obtenir un objet via son ID
     */
    public function get($id)
    {
        return $this->find($id);
    }

    /**
     * Creer un objet dans la db
     */
    public function create($data)
    {
        return $this->insert($data);
    }

    /**
     * Modifier un objet dans la db
     */
    public function edit($id, $data)
    {
        return $this->update($id, $data);
    }

    /**
     * Supprimer un objet dans la db
     */
    public function destroy($id)
    {
        return $this->delete($id);
    }
}
