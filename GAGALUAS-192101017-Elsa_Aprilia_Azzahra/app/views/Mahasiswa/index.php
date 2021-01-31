
<div class="container mt-3">
  </br>
    <div class="col-12">
    <h1>Daftar Mahasiswa</h1>
    </br>
    </br>
      <div class="row">
        <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
    </div>
      <div class="row">
      <div class="col-6">
      <a href="<?= BASEURL; ?>/mahasiswa/tambah" class="btn btn-primary mt-2">Tambah Mahasiswa</a>
      </div>
 </br>
 </br>
   <ul class="list-group">
     <table class="table table-stripped">
      <thead>
       <tr>
        <th scope="col">Nama</th>
        <th scope="col" width="200px">Action</th>
       </tr>
      </thead>
      <tbody>
       <?php foreach ($data['mhs'] as $mhs) :?>
       <tr>
        <td><?= $mhs['nama'];?></td>
        <td>
         <a href="<?= BASEURL; ?>mahasiswa/detail/<?= $mhs['id'] ?>" class="btn btn-success ">Detail</a>
       
         <a href="<?= BASEURL; ?>mahasiswa/edit/<?= $mhs['id'] ?>" class=" btn btn-warning">Edit</a>
      <a href="<?= BASEURL; ?>mahasiswa/hapus/<?= $mhs['id'] ?>" class="btn btn-danger">Hapus</a>
        </td>
       </tr>
       <?php endforeach; ?>
      </tbody>
     </table>    
   </ul>
 
  </div>
 </div>
</div>
