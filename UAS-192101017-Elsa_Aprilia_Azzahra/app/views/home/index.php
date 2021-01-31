
<div class="container">
    <div class="jumbotron mt-3">
        <h2 style="font-size:40px;">Data Logistik Lembar Kerja Siswa (LKS)</h2>
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
        <h4><b style="font-size:20px;">Form Input Stock LKS</b></h4>

        <div class="container mt-3">
            <form action=" <?= BASEURL; ?>/home/simpanLogistik" method="POST" enctype="multipart/form-data">
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
                <label for="inputPassword" class="col-sm-2 col-form-label" style="font-size: 17;">Jumlah</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" style="font-size: 17;" name="jumlah" id="jumlah">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label" style="font-size: 17;">Harga</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" style="font-size: 17;" name="harga" id="harga">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label" style="font-size: 17;">Nilai Persediaan</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" style="font-size: 17;" name="nilai_persediaan" id="nilai_persediaan" Readonly value="0">
                </div>
                <br>
                <br>
            <center><input type="submit" value="simpan" class="btn btn-Success btn-lg" ></center>
        </div>
        <br>
            <h4><b>Data Stock LKS</b></h4>
                <div class="md-3">
                    <center>
                    <table class="table table-hover">
                        <thead class="table-light">
                            <td>Kelas</td>
                            <td>Jumlah</td>
                            <td>Harga</td>
                            <td>Nilai Persediaan</td>
                            <td>Action</td>
                        </thead>
                        <tbody class="table-light">
                             <?php foreach ($data['log'] as $log) :?>
                             <tr>
                                 <td><?= $log['kelas'];?></td>
                                 <td><?= $log['jumlah'];?></td>
                                 <td><?= $log['harga'];?></td>
                                 <td><?= $log['nilai_persediaan'];?></td>
                                 <td>
                                     <a href="<?= BASEURL; ?>home/edit/<?= $log['id'] ?>" class=" btn btn-primary">Edit</a>
                                     <a href="<?= BASEURL; ?>home/hapus/<?= $log['id'] ?>" class="btn btn-Danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                      </table>
                             </center>
                </div>

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label" style="font-size: 17;">Jumlah LKS Seluruh</label>
                    <div class="col-sm-10">
                    <label style="font-size:17px;">
                    <?php 
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "uas_db_pemweb";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 

                    $sql = "SELECT SUM(jumlah) As value_sum FROM data_lks";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo '' . $row["value_sum"];
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                       
                  ?>
                  </label>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label" style="font-size: 17;">Total Nilai Persediaan</label>
                    <div class="col-sm-10">
                    <label style="font-size:20px;">
                    <?php 
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "uas_db_pemweb";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 

                    $sql = "SELECT SUM(nilai_persediaan) As value_sum FROM data_lks";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo '' . $row["value_sum"];
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                       
                  ?>
                  </label>
                    </div>
                </div>

    </div>
</div>
<script type="text/javascript">
 $("#jumlah").keyup(function(){   
   var a = parseFloat($("#jumlah").val());
   var b = parseFloat($("#harga").val());
   var c = a*b;
   $("#nilai_persediaan").val(c);
 });
 
 $("#harga").keyup(function(){
   var a = parseFloat($("#jumlah").val());
   var b = parseFloat($("#harga").val());
   var c = a*b;
   $("#nilai_persediaan").val(c);
 });
</script>