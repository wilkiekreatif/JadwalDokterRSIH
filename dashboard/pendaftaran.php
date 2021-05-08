<!DOCTYPE html>
<html>
<?php
    session_start();
    include('../config.php');
?>
<head>
    <link rel="stylesheet" href="style1.css">
    <title>Jadwal Poliklinik RSIH</title>
    <meta http-equiv="refresh" content="5" />
</head>

<body>
    <div class="main">

        <!-- Header -->
        <div class="header">
            <div class="logo">
                <img src="../images/loggweb.png" alt="">
            </div>
            <div class="title">
                <h1>JADWAL POLIKLINIK HARI INI</h1>
            </div>
            <div class="date">
                <?php 
                    $haripraktek = date('l');
                    //hari
                    if(date('l')=='Monday'){
                        $hari = 'Senin';
                    }else if(date('l')=='Tuesday'){
                        $hari = 'Selasa';
                    }else if(date('l')=='Wednesday'){
                        $hari = 'Rabu';
                    }else if(date('l')=='Thursday'){
                        $hari = 'Kamis';
                    }else if(date('l')=='Friday'){
                        $hari = 'Jumat';
                    }else if(date('l')=='Saturday'){
                        $hari = 'Sabtu';
                    }else if(date('l')=='Sunday'){
                        $hari = 'Ahad';
                    }

                    //bulan
                    if(date('F')=='January'){
                        $bulan = 'Januari';
                    }else if(date('F')=='February'){
                        $bulan = 'Februari';
                    }else if(date('F')=='March'){
                        $bulan = 'Maret';
                    }else if(date('F')=='April'){
                        $bulan = 'April';
                    }else if(date('F')=='May'){
                        $bulan = 'Mei';
                    }else if(date('F')=='June'){
                        $bulan = 'Juni';
                    }else if(date('F')=='July'){
                        $bulan = 'Juli';
                    }else if(date('F')=='August'){
                        $bulan = 'Agustus';
                    }else if(date('F')=='September'){
                        $bulan = 'September';
                    }else if(date('F')=='October'){
                        $bulan = 'Oktober';
                    }else if(date('F')=='November'){
                        $bulan = 'November';
                    }else if(date('F')=='December'){
                        $bulan = 'Desember';
                    }

                    //shift
                    $jam=date("H:i:s");
                    $a = date('H');
                    //echo $jam;
                    if(($a>=5) && ($a<=14)){
                        $shift = 'Pagi';
                    }else if(($a>=14) && ($a<=21)){
                        $shift = 'Sore';
                    }else{
                        $shift = 'Tutup';
                    }
                    echo '<h1 align="center">'.$hari.', '.date('d').' '.$bulan.' '.date('Y').' | '.$shift.'</h1>';
                ?>
            </div>
        </div>
        <!-- END Header -->

        <!-- Body -->
        <div class="list-dokter">
            <?php
                $query="SELECT a.*,b.* FROM jadwal a, dokter b WHERE (a.id_dr = b.id
                        AND a.hari_praktek = '$haripraktek') AND a.shift = '$shift'";
                //menjalankan query      
                if (mysqli_query($connect,$query)) {      
                    $result=mysqli_query($connect,$query);     
                } else die ("Error menjalankan query". mysql_error());
                //mengecek record kosong     
                if (mysqli_num_rows($result) > 0) {
                    $no='1';
                    //menampilkan hasil query      
                    while($row = mysqli_fetch_array($result)) {
            ?>
                    <div class="list1">
                        <div class="dokter">
                            <img src="<?php echo('../admin/'.$row['photo']); ?>" alt="dokter-foto">
                            <div class="desc">
                                <h2 class="name"><?php echo $row['nama']; ?></h2>
                                <h2 class="sps">Klinik <?php echo $row['spesialis']; ?></h2>
                                <hr>
                                <h2 class="ket1">PRAKTEK : </h2>
                                <div class="ket2">
                                    <?php   
                                        if($row['keterangan']!== 'Hadir'){
                                            echo('<h2 class="red">'.$row['keterangan'].'</h2>');
                                        }else{
                                            echo('<h2>'.$row['keterangan'].' | '.$row['jam'].'</h2>');
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
            <?php
                    }
                }
            ?>

            </div>

        </div>
        <!-- END Body -->

        <!-- Footer -->
        <div class="footer">
            <div class="copyright">
                <ul>
                    <li><img src="../images/instagram.png" alt="">rs_intanhusada</li>
                    <li><img src="../images/facebook.png" alt="">Rumah Sakit Intan Husada</li>
                    <li><img src="../images/globe-grid.png" alt="">www.rsintanhusada.com</li>
                </ul>
            </div>
        </div>

    </div>

</body>

</html>