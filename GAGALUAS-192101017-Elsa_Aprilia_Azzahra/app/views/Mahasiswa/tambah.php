
<div class="container mt-3">
 <form action="<?= BASEURL; ?>/mahasiswa/simpanmahasiswa" method="POST" enctype="multipart/form-data">
  <input class="form-control form-control-lg mt-2" type="text" name="nim" placeholder="NIM">
  <input class="form-control form-control-lg mt-2" type="text" name="nama" placeholder="Nama">
  <input class="form-control form-control-lg mt-2" type="text" name="email" placeholder="Email">
<select class="form-control form-control-lg mt-2" name="jurusan" id="jurusan">
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Teknik Industri">Teknik Industri</option>
        <option value="Teknik Kimia">Teknik Kimia</option>
        <option value="Teknik Elektro">Teknik Elektro</option>
</select>
  <input type="submit" value="simpan" class="btn btn-success mt-2">
  <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-primary mt-2">Kembali</a>
 </form>

</div>