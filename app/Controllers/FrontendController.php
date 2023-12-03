<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\KategoriModel;
use App\Models\MerekModel;

class FrontendController extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Arora Putra Sport Music';
        $produkModel = new ProdukModel();
        $data['produks'] = $produkModel
            ->select('produk.*, kategori.nama_kategori, merek.nama_merek')
            ->join('kategori', 'kategori.id_kategori = produk.id_kategori')
            ->join('merek', 'merek.id_merek = produk.id_merek')
            ->findAll();

        return view('frontend/index', $data);
    }
}
