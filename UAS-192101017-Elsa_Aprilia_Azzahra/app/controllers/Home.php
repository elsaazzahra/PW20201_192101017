<?php
class Home extends Controller
{
 public function index()
 {
$data['judul'] = 'Home';
 $data['nama'] = $this->model('User_model')->getUser();
 $data['log'] = $this->model('Logistik')->getAllData();
 $this->view('templates/header', $data);
 $this->view('home/index', $data);
 $this->view('templates/footer');
 }

 public function simpanLogistik(){  
    $kelas    = $_POST['kelas'];
    $jumlah  = $_POST['jumlah'];
    $harga  = $_POST['harga'];
    $nilai_persediaan = $_POST['nilai_persediaan'];
    if($this->model('Logistik')->tambahData($kelas,$jumlah,$harga,$nilai_persediaan) > 0)
    {
      header('location:../home');
      exit;
    } else {   
      header('location:../home'); 
      exit; 
      }
   }
   public function hapus($id){
    $data['mhs'] = $this->model('Logistik')->deleteData($id);
    // return $this->index();
    header('location:../home');
   }

   public function jumlahLks($jumlah){
    $data['jml'] = $this->model('Logistik')->jumlahLks();
    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
   }
   public function edit($id){

    $data['title'] = 'Detail Mahasiswa';
    $data['log'] = $this->model('Logistik')->getAllDataById($id);
    $this->view('templates/header', $data);
    $this->view('home/edit_index', $data);
    $this->view('templates/header');
   }

   public function updateLks(){  
  
    $jumlah  = $_POST['jumlah'];
    $harga  = $_POST['harga'];
    $nilai_persediaan = $_POST['nilai_persediaan'];
    $data['log'] = $this->model('Logistik')->updateData($jumlah,$harga,$nilai_persediaan);
     return $this->index();
    header('location:../home');
   }

   public function total_jumlah(){
    $data['jumlah'] = $this->model->hitungJumlahLKS();
  }
   }
   