<div class="container">
    <div class="jumbotron mt-3">
    <h2 style="font-size:40px;">Data Logistik Lembar Kerja Siswa (LKS)</h2>
        <br>
        <br>
        <br>

        <h4 style="font-size:30px;">Programmer: Elsa Aprilia Azzahra</h4>
        <br>
        <br>
        <a href="<?= BASEURL; ?>" style="font-size:20px;">Input Stock</a>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        <a href="<?= BASEURL; ?>/Distribusi" style="font-size:20px;">Distribusi</a>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        <a href="<?= BASEURL; ?>/Stock" style="font-size:20px;">Cek Stock</a>
        <br>
        <br>
        <br>
        <br>
        <h4><b style="font-size:20px;" >Distribusi LKS</b></h4>
        <br>
        <br>

        <div class="container md">
            <form action=" <?= BASEURL; ?>/distribusi/UpdateDis" method="POST" enctype="multipart/form-data">

            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label" style="font-size: 20px;">Nama Sekolah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_sekolah" value="<?= $data['dis']['nama_sekolah']; ?>" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label" style="font-size: 17;">Kelas</label>
                <input type="text" class="form-control" name="nama_sekolah" value="<?= $data['dis']['kelas']; ?>" >
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label" style="font-size: 20px;">Jumlah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah" value="<?= $data['dis']['jumlah']; ?>" >
                </div>
            </div>
            <center><input type="submit" value="simpan" class="btn btn-Success btn-lg" ></center>
        </div>
        <br>
      

    </div>
</div>