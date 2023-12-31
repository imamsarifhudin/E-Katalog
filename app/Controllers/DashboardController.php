<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\KategoriModel;
use App\Models\MerekModel;

class DashboardController extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Dashboard';
        $produkModel = new ProdukModel();
        $data['produks'] = $produkModel
            ->select('produk.*, kategori.nama_kategori, merek.nama_merek')
            ->join('kategori', 'kategori.id_kategori = produk.id_kategori')
            ->join('merek', 'merek.id_merek = produk.id_merek')
            ->findAll();

        return view('dashboard/index', $data);
    }

    public function detail($id)
    {
        $data['title'] = 'Product Detail';
        $produkModel = new ProdukModel();
        $data['produks'] = $produkModel
            ->select('produk.*, kategori.nama_kategori, merek.nama_merek')
            ->join('kategori', 'kategori.id_kategori = produk.id_kategori')
            ->join('merek', 'merek.id_merek = produk.id_merek')
            ->findAll();

        return view('dashboard/detailproduk', $data);
    }
}
