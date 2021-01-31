<?php
class Stock extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['log'] = $this->model('Logistik')->getAllData();
        $this->view('templates/header', $data);
        $this->view('home/cek_stock', $data);
        $this->view('templates/footer');
    }
}