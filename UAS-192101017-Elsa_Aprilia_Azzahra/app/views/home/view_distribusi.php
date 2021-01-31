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
            <form action=" <?= BASEURL; ?>/distribusi/simpanDi" method="POST" enctype="multipart/form-data">

            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label" style="font-size: 20px;">Nama Sekolah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_sekolah" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label" style="font-size: 17;">Kelas</label>
                &nbsp;
                &nbsp;
                <select class="form-select form-select-lg mt-2" style="width: 100px; font-size: 17;" name="kelas" id="kelas">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label" style="font-size: 20px;">Jumlah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah" >
                </div>
            </div>
            <center><input type="submit" value="simpan" class="btn btn-Success btn-lg" ></center>
        </div>
        <br>
        <h4><b>Data Distribusi </b></h4>
        <div class="md-3">
            <table class="table table-hover">
                <tr class="table-light">
                    <td>Nama Sekolah</td>
                    <td>Kelas</td>
                    <td>Jumlah</td>
                    <td>Action</td>
                </tr>
                <tbody class="table-light">
                             <?php foreach ($data['dis'] as $dis) :?>
                             <tr>
                                 <td><?= $dis['nama_sekolah'];?></td>
                                 <td><?= $dis['kelas'];?></td>
                                 <td><?= $dis['jumlah'];?></td>
                                 <td>
                                     <a href="<?= BASEURL; ?>home/edit/<?= $log['id'] ?>" class=" btn btn-primary">Edit</a>
                                     <a href="<?= BASEURL; ?>distribusi/hapus/<?= $dis['id'] ?>" class="btn btn-Danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
            </table>
        </div>

    </div>
</div>