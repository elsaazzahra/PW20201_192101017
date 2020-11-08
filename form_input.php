<html>

<head>
    <title>FLORENSIA HOTEL</title>
    <style>
        #box {
            width: 800px;
            height: 500px;
            border: solid 6px #2c3e50;
            border-radius: 5px;
            align: center;
            padding: 20px;
            margin: 0 auto;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

        }

        input[type=text],
        select {
            width: 30%;
            height: 10%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            border: none;
            outline: none;
            border-bottom: 1px solid #2c3e50;
        }

        input[type=number],
        select {
            width: 20%;
            height: 10%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            border: none;
            outline: none;
            border-bottom: 1px solid #2c3e50;
        }

        input[type=submit] {
            width: 20%;
            background-color: #2c3e50;
            color: white;
            padding: 10px 10px;
            margin: 100px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 auto;
            align: right'

        }

        input[type=reset] {
            width: 20%;
            background-color: #2c3e50;
            color: white;
            padding: 10px 10px;
            margin: 100px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 auto;
            align: right'

        }

        select {
            width: 20%;
            height: 10%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            border: none;
            outline: none;
            border-bottom: 1px solid #2c3e50;
        }
    </style>
</head>

<body>
    <div id="box">
        <form action="" method="post">
            <center>
                <h4>Pemesanan Kamar </h4>
                <h3>FLORENSIA HOTEL</h3>
            </center>
            <label for="name" style="font-size: larger;">Nama &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp</label>
            <input type="text" id="name" name="nama" placeholder="Masukkan Nama" ">
                <label for=" hari" style="font-size: larger; padding-left: 100px;">Lama &nbsp &nbsp &nbsp </label>
            <input type="number" id="hari" name="hari" placeholder="Masukkan jumlah hari"> Hari
            </br>
            </br>
            <label for="name" style="font-size: larger;">Kode Booking &nbsp &nbsp &nbsp &nbsp </label>
            <select id="kode" name="kode">
                <option value="AL02102">AL02102</option>
                <option value="BG03025">BG03025</option>
                <option value="CR02111">CR02111</option>
                <option value="KM03075">KM03075</option>
            </select>
            <label for="hari" style="font-size: larger; padding-left: 180px;">Jumlah &nbsp &nbsp &nbsp </label>
            <input type="number" id="name" name="jumlah" placeholder="Masukkan jumlah hari"> Orang
            </br>
            </br>
            <label for="name" style="font-size: larger;">Jenis Pembayaran &nbsp </label>
            <select id="bayar" name="bayar">
                <option value="1">KARTU KREDIT</option>
                <option value="2">DEBIT</option>
                <option value="3">CASH</option>
            </select>
            </br>
            </br>
            </br>
            <center>
                <input type="submit" value="Submit" name="submit">
                <input type="reset" value="Reset" style="background-color: #c0392b;">
            </center>

        </form>


    </div>
    </br>
    </br>
    </br>
    <div id="box">

        <?php

       if (isset($_POST['submit'])) {

        
            echo '<center><h3>FLORENSIA HOTEL</h3></center>';
            echo '</br>';
            echo '<label style ="padding:70px;" >Nama </label>';
            echo '<label> :' .$_POST['nama']; '</label>';
            echo '<label style ="padding:150px;"> Kode Booking :'.$_POST['kode']; '</label>';
            echo '</br>';
            echo '</br>';
            echo '<label style ="padding:70px;" >Nama </label>';
            echo '<label> :'. $room = substr($_POST['kode'],0,2);
                                      if($room == 'AL'){
                                          echo '-Alamanda';
                                      }else if($room == 'BG'){
                                            echo '-Bougenvile';
                                      }else if($room == 'CR'){
                                        echo '-Crysan';
                                      }else{
                                      echo '-Kemuning';
                                      }; '</label>';
                                      echo '</br>';
                                      echo '</br>';
                    '</label> ';
            echo '<label  style ="padding:70px;"  >Lantai Kamar &nbsp &nbsp &nbsp:'.substr($_POST['kode'],2,2); '</label>';
            echo '</br>';
            echo '</br>';
            echo '<label  style ="padding:70px;">Nomer Kamar   &nbsp &nbsp:'.substr($_POST['kode'],4,3); '</label>';
            echo '</br>';
            echo '</br>';
            echo '<label  style ="padding:70px;">Lama  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: '.$_POST['hari'];  '</label>';
            echo '<label> &nbsp Hari</label>';
            echo '</br>';
            echo '</br>';
            echo '<label style ="padding:70px;" >Jenis Pembayaran:'.$bayar = $_POST['bayar'];'</label>';
            echo '</br>';
            echo '</br>';
            echo '<label style ="padding:70px;" >Jumlah :'.$jumlah = $_POST['jumlah'];  '</label>';
            echo '<label> &nbsp Orang</label>';
            echo '</br>';
            echo '</br>';
            echo '<label>Tambahan / Potongan :'.$bayar;
            $k_bayar = $_POST['kode'];

            if($bayar = 1){
                        if($room = 'AL'){
                            $byr = 0.02 * 450000;
                            echo($byr);
                        }else if($room = 'BG'){
                            $byr = 0.02 * 350000;
                            echo($byr);
                        }else if($room = 'CR'){
                            $byr = 0.02 * 375000;
                            echo($byr);
                        }else{
                            $byr = 0.02 * 425000;
                        };
            }else if($bayar = 2){
                        if($room = 'AL'){
                            $byr = 0.02 * 450000;
                            echo($byr);
                        }else if($room = 'BG'){
                            $byr = 0.015 * 350000;
                            echo($byr);
                        }else if($room = 'CR'){
                            $byr = 0.015 * 375000;
                            echo($byr);
                        }else{
                            $byr = 0.015 * 425000;
                        };
            
            }else {
                if($room = 'AL'){
                    $byr = 450000;
                    echo($byr);
                }else if($room = 'BG'){
                    $byr = 350000;
                    echo($byr);
                }else if($room = 'CR'){
                    $byr =375000;
                    echo($byr);
                }else{
                    $byr =  425000;
                };
            };                         
            echo '</br>';
            echo '</br>';  
            echo '<label> Biaya Spring Bad Tambahan  :'.$jumlah * 75000 ;
                                                        
                                                         

                                                         '</label>';   
            echo '</br>';
            echo '</br>'; 
            echo '<label > Total Biaya seluruhnya  :Rp'.  $room;
                                                            if($room = 'AL'){
                                                                $result = 450000 + $byr * $jumlah + ($jumlah * 75000) ;
                                                                echo($result);
                                                            }else if($room = 'BG'){
                                                                $result = 350000 + $byr * $jumlah + ($jumlah * 75000) ;
                                                                echo($result);
                                                        
                                                              
                                                            }else if($room = 'CR'){
                                                                $result = 375000 + $byr * $jumlah + ($jumlah * 75000) ;
                                                                echo($result);
                                                            }else{
                                                                $result = 425000 + $byr * $jumlah + ($jumlah * 75000) ;
                                                                echo($result);
                                                            };
            
            '</label>';                     
            echo '</tr>';
            echo '</table>';
           

            
       };
       ?>
    </div>

</body>

</html>