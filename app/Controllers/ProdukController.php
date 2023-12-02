<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\KategoriModel;
use App\Models\MerekModel;

class ProdukController extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Product List';
        $produkModel = new ProdukModel();
        $data['produks'] = $produkModel
            ->select('produk.*, kategori.nama_kategori, merek.nama_merek')
            ->join('kategori', 'kategori.id_kategori = produk.id_kategori')
            ->join('merek', 'merek.id_merek = produk.id_merek')
            ->findAll();

        return view('produk/index', $data);
    }
    public function create()
    {
        $data['title'] = 'Create Product';

        $produkModel = new ProdukModel();
        $kategoriModel = new KategoriModel();
        $merekModel = new MerekModel();

        $data['kategoris'] = $kategoriModel->getKategoris();
        $data['mereks'] = $merekModel->getMereks();
        $data['produks'] = $produkModel
            ->select('produk.*, kategori.nama_kategori, merek.nama_merek')
            ->join('kategori', 'kategori.id_kategori = produk.id_kategori')
            ->join('merek', 'merek.id_merek = produk.id_merek')
            ->findAll();

        return view('produk/create', $data);
    }

    public function store()
    {
        if ($this->request->getFile('gambar_produk')->isValid()) {
            $fileImage = $this->request->getFile('gambar_produk');
            $imageName = $fileImage->getRandomName();
            $fileImage->move('img', $imageName);
        } else {
            $imageName = 'default.png';
        }

        $produkModel = new ProdukModel();

        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'id_kategori' => $this->request->getPost('id_kategori'),
            'id_merek' => $this->request->getPost('id_merek'),
            'gambar_produk' => $imageName
        ];



        $produkModel->insert($data);

        return redirect()->to('/produk');
    }

    public function show($id) {
        $data['title'] = 'Produk Detail';
        $produkModel = new ProdukModel();
        $data['produk'] = $produkModel
            ->select('produk.*, kategori.nama_kategori, merek.nama_merek')
            ->join('kategori', 'kategori.id_kategori = produk.id_kategori')
            ->join('merek', 'merek.id_merek = produk.id_merek')
            ->find($id);

        return view('', $data);

    }

    public function edit($id)
    {
        $data['title'] = 'Edit Product';
        $produkModel = new ProdukModel();
        $kategoriModel = new KategoriModel();
        $merekModel = new MerekModel();

        $data['produk'] = $produkModel
            ->select('produk.*, kategori.nama_kategori, merek.nama_merek')
            ->join('kategori', 'kategori.id_kategori = produk.id_kategori')
            ->join('merek', 'merek.id_merek = produk.id_merek')
            ->find($id);
        $data['kategoris'] = $kategoriModel->findAll();
        $data['mereks'] = $merekModel->findAll();


        return view('produk/edit', $data);
    }

    public function update($id)
    {

        $imgProduk = new ProdukModel();
        $imgProduk = $imgProduk->find($id);
        $oldImgProduk = $imgProduk['gambar_produk'];


        if ($this->request->getFile('gambar_produk')->isValid()) {
            $fileImage = $this->request->getFile('gambar_produk');
            $imageName = $fileImage->getRandomName();
            $fileImage->move('img', $imageName);
        } else {
            $imageName = $oldImgProduk;
        }

        $produkModel = new ProdukModel();

        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'id_kategori' => $this->request->getPost('id_kategori'),
            'id_merek' => $this->request->getPost('id_merek'),
            'gambar_produk' => $imageName,
        ];

        $produkModel->update($id, $data);

        return redirect()->to('/produk');
    }

    public function delete($id)
    {
        $produkModel = new ProdukModel();
        $produkModel->delete($id);

        return redirect()->to('/produk');
    }
}
