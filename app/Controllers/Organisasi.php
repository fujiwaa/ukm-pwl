<?php

namespace App\Controllers;

class Organisasi extends BaseController
{
    public function index()
    {
        return view('pages/organisasi/register');
    }

    public function create()
    {
        $session = session();
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nama' => 'required',
            'nomorhp' => 'required|min_length[10]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]',
        ], 
        [   // Errors
            'nama' => [
                'required' => '<div class="error alert alert-danger role="alert">Nama harus diisi.</div>'
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

        $request = \Config\Services::request();
        // Proses penyimpanan data ke database
        $data = [
            'nama' => $request->getPost('nama'),
            'nomorhp' => $request->getPost('nomorhp'),
            'email' => $request->getPost('email'),
            'role' => $request->getPost('role'),
            'password' => password_hash($request->getPost('password'), PASSWORD_DEFAULT),
        ];
        $organisasi = new \App\Models\Users();
        $organisasi->insert($data);

        $session->setFlashdata('message', '<div class="message alert alert-success" role="alert">Selamat akunmu telah terbuat. </div>');
        return redirect()->to('login/organisasi');
    }
    public function login()
    {
        return view('pages/organisasi/login');
    }
    public function auth()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        $organisasi = new \App\Models\Users();
        $user = $organisasi->where('email', $email)->first();
        if ($user && password_verify($password, $user['password'])) {
            session()->set('users', $user);
            if ($user['role'] == 'organisasi') {
                return redirect()->to('home');
            } else {
                return redirect()->to('home');
            }
        } else {
            session()->setFlashdata('errors', '<div class="error alert alert-danger" role="alert">Invalid email or password.</div>');
            return redirect()->to('login/organisasi');
        }
    }
}