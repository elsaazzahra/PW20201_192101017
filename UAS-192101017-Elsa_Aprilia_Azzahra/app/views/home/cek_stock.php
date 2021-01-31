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
        
        <h4><b style="font-size:20px;">Check Stock</b></h4>
        <br>
        
                <div class="md-3">
                    <table class="table table-hover">
                        <tr class="table-light">
              
                            <td>Kelas</td>
                            <td>Jumlah</td>
                            <td>Harga</td>
                            <td>Nilai Persediaan</td>
                        </tr>
                        <tbody class="table-light">
                             <?php foreach ($data['log'] as $log) :?>
                             <tr>
                                 <td><?= $log['kelas'];?></td>
                                 <td><?= $log['jumlah'];?></td>
                                 <td><?= $log['harga'];?></td>
                                 <td><?= $log['nilai_persediaan'];?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                      
                      </table>
                </div>


    </div>
</div>