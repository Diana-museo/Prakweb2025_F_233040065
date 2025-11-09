<?php

class User extends Controller
{
    // default method
    public function index()
    {
        $data['judul'] = 'Daftar User';
        $data['users'] = $this->model('User_model')->getAllUsers();

        $this->view('templates/header', $data);
        $this->view('list', $data);
        $this->view('templates/footer');
    }

    // lihat semua user
    public function detail($id)
    {
        if (!$id) {
            header('Location: ' . BASEURL . '/User');
            exit;
        }

        $data['user'] = $this->model('User_model')->getUserById($id);
        $this->view('templates/header', $data);
        $this->view('detail', $data);
        $this->view('templates/footer');
    }


    // detail user
    public function getUserById($id)
    {
        $data['judul'] = 'Detail User';
        $data['user'] = $this->model('User_model')->getUserById($id);

        $this->view('templates/header', $data);
        $this->view('detail', $data);
        $this->view('templates/footer');
    }

    // tambah user (form)
    public function tambah()
    {
        $data['judul'] = 'Tambah User';

        $this->view('templates/header', $data);
        $this->view('tambah', $data);
        $this->view('templates/footer');
    }

    // simpan user baru
    public function simpan()
    {
        if ($this->model('User_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        }
        header('Location: ' . BASEURL . '/User');
        exit;
    }


    // edit user (form)
    public function edit($id)
    {
        $data['judul'] = 'Edit User';
        $data['user'] = $this->model('User_model')->getUserById($id);

        $this->view('templates/header', $data);
        $this->view('edit', $data);
        $this->view('templates/footer');
    }

    // update user
    public function update()
    {
        $hasil = $this->model('User_model')->ubahData($_POST);
        $pesan = ($hasil > 0) ? ['berhasil', 'diupdate', 'success'] : ['gagal', 'diupdate', 'danger'];

        Flasher::setFlash(...$pesan);
        header('Location: ' . BASEURL . '/User');
        exit;
    }

    // hapus user
    public function hapus($id)
    {
        $hasil = $this->model('User_model')->hapusData($id);
        $pesan = ($hasil > 0) ? ['berhasil', 'dihapus', 'success'] : ['gagal', 'dihapus', 'danger'];

        Flasher::setFlash(...$pesan);
        header('Location: ' . BASEURL . '/User');
        exit;
    }
}