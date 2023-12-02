<?php

namespace App\Models;

use CodeIgniter\Model;

class MerekModel extends Model
{
    protected $table = 'merek';
    protected $primaryKey = 'id_merek';
    protected $allowedFields = ['nama_merek'];

    public function getMereks()
    {
        return $this->findAll();
    }

    public function getMerek($id)
    {
        return $this->find($id);
    }
}
