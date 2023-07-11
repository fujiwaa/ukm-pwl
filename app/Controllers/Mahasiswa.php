<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        return view('pages/mahasiswa/register');
    }

    public function create()
    {
        $session = session();
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nama' => 'required',
            'nim' => 'required|min_length[10]',
            'nomorhp' => 'required|min_length[10]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]',
        ], 
        [   // Errors
            'nama' => [
                'required' => '<div class="error alert alert-danger role="alert">Nama harus diisi.</div>'
            ],
            'nim' => [
                'required' => '<div class="error alert alert-danger role="alert">Nim harus diisi.</div>' 
            ],
            'nomorhp' => [
                'min_length' => '<div class="error alert alert-danger role="alert">Nomor handphone minimal 10 angka.</div>',
            ],
            'email' => [
                'valid_email' => '<div class="error alert alert-danger role="alert">Email anda salah.</div>',
            ],
            'password' => [
                'min_length' => '<div class="error alert alert-danger role="alert">Password minimal 8 karakter.</div>',
            ],
        ]
    );
        
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Proses penyimpanan data ke database
        $request = \Config\Services::request();

        $data = [
            'nama' => $request->getPost('nama'),
            'nim' => $request->getPost('nim'),
            'nomorhp' => $request->getPost('nomorhp'),
            'email' => $request->getPost('email'),
            'role' => $request->getPost("role"),
            'password' => password_hash($request->getPost('password'), PASSWORD_DEFAULT),
        ];
        $mahasiswa = new \App\Models\Users();
        $mahasiswa->insert($data);

        $session->setFlashdata('message', '<div class="message alert alert-success" role="alert">Selamat akunmu telah terbuat. </div>');
        return redirect()->to('login/mahasiswa');
    }

    public function login()
    {
        return view('pages/mahasiswa/login');
    }

    public function auth()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        $mahasiswa = new \App\Models\Users();
        $user = $mahasiswa->where('email', $email)->first();
        if ($user && password_verify($password, $user['password'])) {
            session()->set('mahasiswa', $user);
            return redirect()->to('home');
        } else {
            session()->setFlashdata('errors', '<div class="error alert alert-danger" role="alert">Invalid email or password.</div>');
            return redirect()->to('login/mahasiswa');
        }
    }
}