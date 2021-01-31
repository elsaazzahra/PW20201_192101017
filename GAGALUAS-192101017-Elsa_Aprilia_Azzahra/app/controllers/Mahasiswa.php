<?php

class Mahasiswa extends Controller {
 public function index(){
  $data['title'] = 'Data Mahasiswa';
  $data['mhs'] = $this->model('Mahasiswa_model')->getAllMhasiswa();
  $this->view('templates/header', $data);
  $this->view('mahasiswa/index', $data);
  $this->view('templates/header');
 }

 public function detail($id){

  $data['title'] = 'Detail Mahasiswa';
  $data['mhs'] = $this->model('Mahasiswa_model')->getAllMhasiswaById($id);
  $this->view('templates/header', $data);
  $this->view('mahasiswa/detail', $data);
  $this->view('templates/header');
 }

 public function edit($id){

  $data['title'] = 'Detail Mahasiswa';
  $data['mhs'] = $this->model('Mahasiswa_model')->getAllMhasiswaById($id);
  $this->view('templates/header', $data);
  $this->view('mahasiswa/edit', $data);
  $this->view('templates/header');
 }

 public function tambah(){
  $data['title'] = 'Tambah Mahasiswa';  
  $this->view('templates/header', $data);
  $this->view('mahasiswa/tambah');
  $this->view('templates/header');
 }

 public function simpanmahasiswa(){  
  $nim     = $_POST['nim'];
  $nama    = $_POST['nama'];
  $email   = $_POST['email'];
  $jurusan = $_POST['jurusan'];
  if($this->model('Mahasiswa_model')->tambahMahasiswa($nim,$nama,$email,$jurusan) > 0)
  {
    Flasher::setFlash('berhasil', 'ditambahkan', 'success');
    header('location:../mahasiswa');
    exit;
  } else {   
    Flasher::setFlash('berhasil', 'ditambahkan', 'success');      
    header('location:../mahasiswa'); 
    exit; 
    }
 }

 public function updateMahasiswa(){  
    $nim     = $_POST['nim'];
    $nama    = $_POST['nama'];
    $email   = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $data['mhs'] = $this->model('Mahasiswa_model')->updateMahasiswa($nim,$nama,$email,$jurusan);
    // return $this->index();
    header('location:../mahasiswa');
   }

 public function hapus($id){
  $data['mhs'] = $this->model('Mahasiswa_model')->deleteMhs($id);
  // return $this->index();
  header('location:../../mahasiswa');
 }
}