<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    protected $users;

    function __construct()
    {
        $this->users = new UsersModel();
    }

    public function index()
    {
        $data['users'] = $this->users->findAll();
        return view('content_backend/users/users', $data);
    }

    public function create()
    {
        return view('content_backend/users/users_create');
    }

    function store()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[users.username]',
                'errors' => [
                    'required' => 'Username Harus diisi',
                    'min_length' => 'Username Minimal 4 Karakter',
                    'max_length' => 'Username Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'name' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'Name Harus diisi',
                    'min_length' => 'Name Minimal 4 Karakter',
                    'max_length' => 'Name Maksimal 100 Karakter',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => 'Password Harus diisi',
                    'min_length' => 'Password Minimal 4 Karakter',
                    'max_length' => 'Password Maksimal 50 Karakter',
                ]
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new UsersModel();
        $users->insert([
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'name' => $this->request->getVar('name')
        ]);
        session()->setFlashdata('message', 'Tambah Data User Berhasil');
        return redirect()->to('backend/users');
    }

    function delete($id)
    {
        $dataUsers = $this->users->find($id);
        if (empty($dataUsers)) {
            session()->setFlashdata('message', 'Data User Tidak Di temukan !');
            return redirect()->to('backend/users');
        }
        $this->users->delete($id);
        session()->setFlashdata('message', 'Hapus Data User Berhasil');
        return redirect()->to('backend/users');
    }

    
    /*

    function edit($id)
    {
        $dataPegawai = $this->pegawai->find($id);
        if (empty($dataPegawai)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pegawai Tidak ditemukan !');
        }
        $data['pegawai'] = $dataPegawai;
        return view('pegawai/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->pegawai->update($id, [
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat')
        ]);
        session()->setFlashdata('message', 'Update Data Pegawai Berhasil');
        return redirect()->to('/pegawai');
    }

    
    */
}