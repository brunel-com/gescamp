<?php
namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom', 'prenom', 'role', 'email', 'password'];

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }

    public function create($data)
    {
        return $this->insert($data);
    }
}