<?php

namespace App\Models;

use CodeIgniter\Model;

class Organisasi extends Model

{
    protected $table = 'organisasi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'nomorhp', 'email', 'password'];
}