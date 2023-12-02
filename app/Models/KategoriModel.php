<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $allowedFields = ['nama_kategori'];

    public function getKategoris()
    {
        return $this->findAll();
    }

    public function getKategori($id)
    {
        return $this->find($id);
    }
}
