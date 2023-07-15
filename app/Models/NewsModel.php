<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model

{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'deskripsi', 'gambar'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}