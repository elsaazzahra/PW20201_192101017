<?php

class Mahasiswa_model{
  
 private $table = 'mahasiswa';
 private $db;

 public function __construct()
 {
  $this->db = new Database;
 }

 public function getAllMhasiswa()
 {
  $this->db->query('SELECT * FROM ' . $this->table);
  return $this->db->resultSet();
 }

 public function getAllMhasiswaById($id)
 {
  $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
  $this->db->bind('id',$id);
  return $this->db->single();
 }

 public function tambahMahasiswa($nim, $nama, $email, $jurusan)
 {
  $this->db->query('INSERT INTO ' . $this->table . '(nim, nama,email, jurusan) VALUES(:nim, :nama, :email, :jurusan)');
  $this->db->bind('nim',$nim);
  $this->db->bind('nama',$nama);
  $this->db->bind('email',$email);
  $this->db->bind('jurusan',$jurusan);
  $this->db->execute();
 }

 public function updateMahasiswa($nim, $nama, $jurusan)
 {
    $this->db->query('UPDATE ' . $this->table . ' SET nama=:nama, email=:email, jurusan=:jurusan WHERE nim=:nim');
    $this->db->bind('nim',$nim);
    $this->db->bind('nama',$nama);
    $this->db->bind('email',$email);
    $this->db->bind('jurusan',$jurusan);
    $this->db->execute();
    return $this->db->rowCount();
 }
 
 

 public function deleteMhs($id)
 {
  $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
  $this->db->bind('id',$id);
  $this->db->execute();
 }

}