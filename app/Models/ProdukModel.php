<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $allowedFields = ['nama_produk', 'deskripsi', 'harga', 'stok', 'id_kategori', 'id_merek', 'gambar_produk'];

    public function getProduks()
    {
        return $this->findAll();
    }

    public function getProduk($id)
    {
        return $this->find($id);
    }

    public function insertProduk($data)
    {
        return $this->insert($data);
    }

    public function updateProduk($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteProduk($id)
    {
        return $this->delete($id);
    }
}
