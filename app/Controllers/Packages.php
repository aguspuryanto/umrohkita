<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PackageModel;
use CodeIgniter\HTTP\ResponseInterface;

class Packages extends BaseController
{
    public function index()
    {
        $model = new PackageModel();
        $data['packages'] = $model->findAll();

        return view('packages/index', $data);
    }

    public function view($id = null)
    {
        $model = new PackageModel();
        $data['package'] = $model->find($id);

        return view('packages/view', $data);
    }

    public function create()
    {
        // Logic to show form for creating a package
    }

    public function store()
    {
        $model = new PackageModel();

        $img = $this->request->getFile('images');
        if ($img->isValid() && !$img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move(WRITEPATH . 'uploads', $newName);

            $data = [
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'price' => $this->request->getPost('price'),
                'includes' => $this->request->getPost('includes'),
                'excludes' => $this->request->getPost('excludes'),
                'images' => $newName,
            ];

            $model->save($data);
        }

        return redirect()->to('/packages');
    }

}
