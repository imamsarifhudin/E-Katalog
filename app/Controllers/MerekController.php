<?php

namespace App\Controllers;

use App\Database\Migrations\Kategori;
use App\Models\ProdukModel;
use App\Models\KategoriModel;
use App\Models\MerekModel;

class MerekController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Brand List';

        $merekModel = new MerekModel();

        $data['mereks'] = $merekModel->getMereks();

        return view('merek/index', $data);
    }

    public function create()
    {
        $data['title'] = 'Create Brand';

        $merekModel = new MerekModel();

        $data['mereks'] = $merekModel->getMereks();

        return view('merek/create', $data);
    }

    public function store()
    {
        $merekModel = new MerekModel();

        $data = [
            'nama_merek' => $this->request->getPost('nama_merek'),
        ];

        $merekModel->insert($data);

        return redirect()->to('/merek');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Brand';

        $merekModel = new MerekModel();

        $data['mereks'] = $merekModel->getMerek($id);

        return view('merek/edit', $data);
    }

    public function update($id)
    {
        $merekModel = new MerekModel();

        $data = [
            'nama_merek' => $this->request->getPost('nama_merek'),
        ];

        $merekModel->update($id, $data);

        return redirect()->to('/merek');
    }

    public function delete($id)
    {
        $merekModel = new MerekModel();

        $merekModel->delete($id);

        return redirect()->to('/merek');
    }
}
