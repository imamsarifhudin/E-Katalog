<?php

namespace App\Controllers;

use App\Database\Migrations\Kategori;
use App\Models\ProdukModel;
use App\Models\KategoriModel;
use App\Models\MerekModel;

class KategoriController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Category List';

        $kategoriModel = new KategoriModel();

        $data['kategoris'] = $kategoriModel->getKategoris();

        return view('kategori/index', $data);
    }

    public function create()
    {
        $data['title'] = 'Create Category';

        $kategoriModel = new KategoriModel();
        $data['kategoris'] = $kategoriModel->getKategoris();

        return view('kategori/create', $data);
    }

    public function store()
    {
        $kategoriModel = new KategoriModel();

        $data = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
        ];

        $kategoriModel->insert($data);

        return redirect()->to('/kategori');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Category';

        $kategoriModel = new KategoriModel();

        $data['kategoris'] = $kategoriModel->getKategori($id);

        return view('kategori/edit', $data);
    }

    public function update($id)
    {
        $kategoriModel = new KategoriModel();

        $data = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
        ];

        $kategoriModel->update($id, $data);

        return redirect()->to('/kategori');
    }

    public function delete($id)
    {
        $kategoriModel = new KategoriModel();

        $kategoriModel->delete($id);

        return redirect()->to('/kategori');
    }
}
