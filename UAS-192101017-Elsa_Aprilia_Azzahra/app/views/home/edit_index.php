
<div class="container" style="font-size:17px;">
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


        <div class="container mt-3">
            <form action=" <?= BASEURL; ?>/home/updateLks" method="POST" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label" style="font-size: 17;">Jumlah</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="jumlah" id="jumlah" style="font-size: 17;" value="<?= $data['log']['jumlah']; ?>" </td>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label" style="font-size: 17;"  >Harga</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="harga" id="harga" style="font-size: 17;"  value="<?= $data['log']['harga']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label" style="font-size: 17;">Nilai Persediaan</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="nilai_persediaan" id="nilai_persediaan" style="font-size: 17;" value="<?= $data['log']['nilai_persediaan']; ?>" Readonly value="0">
                </div>
                <br>
                <br>
            <center><input type="submit" value="simpan" class="btn btn-Success btn-lg" ></center>
        </div>
        <br>
           
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