<?php
    class Distribusi_Model{
        private $table = "distribusi";
        private $db;


 public function __construct()
 {
  $this->db = new Database;
 }

 public function getAllData()
 {
  $this->db->query('SELECT * FROM ' . $this->table);
  return $this->db->resultSet();
 }

 public function getAllDataById($id)
 {
  $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
  $this->db->bind('id',$id);
  return $this->db->single();
 }

 public function tambahData($nama_sekolah,$kelas, $jumlah)
 {
  $this->db->query('INSERT INTO ' . $this->table . '(nama_sekolah, kelas, jumlah) VALUES(:nama_sekolah, :kelas, :jumlah)');
  $this->db->bind('nama_Sekolah',$nama_sekolah);
  $this->db->bind('kelas',$kelas);
  $this->db->bind('jumlah',$jumlah);
  $this->db->execute();
 }

 public function updateData( $nama_sekolah, $kelas, $jumlah)
 {
    $this->db->query('UPDATE' . $this->table . ' SET  nama_sekolah=:nama_sekolah, kelas=:kelas, jumlah:jumlah WHERE id:id');
  
    $this->db->bind('jumlah',$jumlah);
    $this->db->bind('harga',$harga);
    $this->db->bind('nilai_persediaan',$nilai_persediaan);
    $this->db->execute();
       return $this->db->rowCount();
 

 }
 

 public function deleteData($id)
 {
  $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
  $this->db->bind('id',$id);
  $this->db->execute();
 }



    }