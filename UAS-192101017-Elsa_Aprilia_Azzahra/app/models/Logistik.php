<?php
    class Logistik{
        private $table = "data_lks";
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

 public function tambahData($kelas, $jumlah, $harga, $nilai_persediaan)
 {
  $this->db->query('INSERT INTO ' . $this->table . '(kelas, jumlah,harga, nilai_persediaan) VALUES(:kelas, :jumlah, :harga, :nilai_persediaan)');
  $this->db->bind('kelas',$kelas);
  $this->db->bind('jumlah',$jumlah);
  $this->db->bind('harga',$harga);
  $this->db->bind('nilai_persediaan',$nilai_persediaan);
  $this->db->execute();
 }

 public function updateData( $jumlah, $harga, $nilai_persediaan)
 {
    $this->db->query('UPDATE' . $this->table . ' SET  harga=:harga, jumlah=:jumlah, nilai_persediaan=:nilai_persediaan WHERE id=:id');
  
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

public function jumlahLks(){
   $this->db->query('SELECT SUM(jumlah) FROM data_lks');
   $this->db->bind('jumlah',$jumlah);
   return $this->db->single();

}

 public function hitungJumlahLKS()
{
   $this->db->select_sum('jumlah');
   $query = $this->db->get('data_lks');
   if($query->num_rows()>0)
   {
     return $query->row()->jumlah;
   }
   else
   {
     return 0;
   }
}

    }