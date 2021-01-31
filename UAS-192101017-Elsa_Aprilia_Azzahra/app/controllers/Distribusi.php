<?php
class Distribusi extends Controller
{
    public function index()
    {
     $data['judul'] = 'Home';
    $data['nama'] = $this->model('User_model')->getUser();
    $data['dis'] = $this->model('Distribusi_Model')->getAllData();
    $this->view('templates/header', $data);
    $this->view('home/view_distribusi', $data);
    $this->view('templates/footer');
    }

    public function hapus($id){
        $data['dis'] = $this->model('Distribusi_Model')->deleteData($id);
        // return $this->index();
        header('location:../home');
       }

       public function edit($id){

        $data['title'] = 'Detail Mahasiswa';
        $data['log'] = $this->model('Distribusi_Model')->getAllDataById($id);
        $this->view('templates/header', $data);
        $this->view('home/edit_distribusi', $data);
        $this->view('templates/header');
       }
    
       public function update(){  
  
        $nama_sekolah  = $_POST['nama_sekolah'];
        $kelas    = $_POST['kelas'];
        $jumlah  = $_POST['jumlah'];
        $data['dis'] = model('Distribusi_Model')->updateData($nama_sekolah, $kelas,$jumlah);
        // return $this->index();
        header('location:../home');
       }

    public function simpanDi(){  
        $nama_sekolah   = $_POST['nama_sekolah'];
        $kelas    = $_POST['kelas'];
        $jumlah  = $_POST['jumlah'];
        if($this->model('Distribusi_Model')->tambahData($nama_sekolah,$kelas,$jumlah) > 0)
        {
          header('location:../home');
          exit;
        } else {   
          header('location:../home'); 
          exit; 
          }
       }
}