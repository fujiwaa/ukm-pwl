<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{
    protected $newsModel;

    public function __construct()
    {
        $this->newsModel = new NewsModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        $data['news'] = $this->newsModel->findAll();
        $data['formData'] = session()->getFlashdata('formData');

        return view('/pages/news/index', $data);
    }

    public function store()
    {
    $validationRule = [
        'gambar' => [
            'label' => 'Image File',
            'rules' => 'uploaded[gambar]'
                . '|is_image[gambar]'
                . '|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                . '|max_size[gambar,10000]'
                . '|max_dims[gambar,40000,40000]',
        ],
        'judul' => 'required',
        'deskripsi' => 'required'
    ];

    $validated = $this->validate($validationRule);

    if ($validated) {
        $judul = $this->request->getPost('judul');
        $deskripsi = $this->request->getPost('deskripsi');
        $gambar = $this->request->getFile('gambar');
        $filename = $gambar->getRandomName();
        $gambar->move(ROOTPATH . 'public/img/news', $filename);

        $data = [
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'gambar' => $filename
        ];

        $save = $this->newsModel->save($data);
        if ($save) {
            session()->setFlashdata('formData', $data);
            return redirect()->to('news')->with('success', 'Berita sudah dipublish');
        } else {
            session()->setFlashdata('error', $this->newsModel->errors());
            return redirect()->back();
        }
    }

    session()->setFlashdata('error', $this->validator->getErrors());
    return redirect()->back();

    }   

    public function delete($id)
    {
        $newsItem = $this->newsModel->find($id); // Mengambil data berita berdasarkan ID

        if ($newsItem) {
            $image = 'public/img/news' . $newsItem['gambar'];

            if (file_exists($image)) {
                unlink($image); // Menghapus file gambar
            }

            $this->newsModel->delete($id); // Menghapus data berita dari database
        }

        return redirect()->to('news');
    }
}
