<!DOCTYPE html>
<html>
<?php
    session_start();
    include('../config.php');
?>
<head>
    <link rel="stylesheet" href="style1.css">
    <title>Jadwal Poliklinik RSIH</title>
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
                <h1>SENIN, 03 MEI 2021 | PAGI</h1>
            </div>
        </div>
        <!-- END Header -->

        <!-- Body -->
        <div class="list-dokter">
            <?php
                $query="SELECT a.*,b.* FROM jadwal a, dokter b WHERE a.id_dr = b.id";
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
                                            echo('<h2>'.$row['keterangan'].'</h2>');
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

            <!--<div class="dokter">
                    <img src="Zulkarnain Oesman.jpg" alt="dokter-foto">
                    <div class="desc">
                        <h2 class="name">dr. Zulkarnain Oesman, Sp.PD</h2>
                        <h2 class="sps">KLINIK SPESIALIS PENYAKIT DALAM</h2>
                        <hr>
                        <h2 class="ket1">PRAKTEK : </h2>
                        <div class="ket3">
                            <h2>CUTI SEMENTARA</h2>
                        </div>

                    </div>
                </div>

                <div class="dokter">
                    <img src="Zulkarnain Oesman.jpg" alt="dokter-foto">
                    <div class="desc">
                        <h2 class="name">dr. Zulkarnain Oesman, Sp.PD</h2>
                        <h2 class="sps">KLINIK SPESIALIS PENYAKIT DALAM</h2>
                        <hr>
                        <h2 class="ket1">PRAKTEK : </h2>
                        <div class="ket2">
                            <h2>HADIR | 10.00-12.00</h2>
                        </div>

                    </div>
                </div>

                <div class="dokter">
                    <img src="Zulkarnain Oesman.jpg" alt="dokter-foto">
                    <div class="desc">
                        <h2 class="name">dr. Zulkarnain Oesman, Sp.PD</h2>
                        <h2 class="sps">KLINIK SPESIALIS PENYAKIT DALAM</h2>
                        <hr>
                        <h2 class="ket1">PRAKTEK : </h2>
                        <div class="ket2">
                            <h2>HADIR | 10.00-12.00</h2>
                        </div>

                    </div>
                </div>

                <div class="dokter">
                    <img src="Zulkarnain Oesman.jpg" alt="dokter-foto">
                    <div class="desc">
                        <h2 class="name">dr. Zulkarnain Oesman, Sp.PD</h2>
                        <h2 class="sps">KLINIK SPESIALIS PENYAKIT DALAM</h2>
                        <hr>
                        <h2 class="ket1">PRAKTEK : </h2>
                        <div class="ket2">
                            <h2>HADIR | 10.00-12.00</h2>
                        </div>

                    </div>
                </div>

                <div class="dokter">
                    <img src="Zulkarnain Oesman.jpg" alt="dokter-foto">
                    <div class="desc">
                        <h2 class="name">dr. Zulkarnain Oesman, Sp.PD</h2>
                        <h2 class="sps">KLINIK SPESIALIS PENYAKIT DALAM</h2>
                        <hr>
                        <h2 class="ket1">PRAKTEK : </h2>
                        <div class="ket2">
                            <h2>HADIR | 10.00-12.00</h2>
                        </div>

                    </div>
                </div>

                <div class="dokter">
                    <img src="Zulkarnain Oesman.jpg" alt="dokter-foto">
                    <div class="desc">
                        <h2 class="name">dr. Zulkarnain Oesman, Sp.PD</h2>
                        <h2 class="sps">KLINIK SPESIALIS PENYAKIT DALAM</h2>
                        <hr>
                        <h2 class="ket1">PRAKTEK : </h2>
                        <div class="ket3">
                            <h2>CUTI SEMENTARA</h2>
                        </div>

                    </div>
                </div>

                <div class="dokter">
                    <img src="Zulkarnain Oesman.jpg" alt="dokter-foto">
                    <div class="desc">
                        <h2 class="name">dr. Zulkarnain Oesman, Sp.PD</h2>
                        <h2 class="sps">KLINIK SPESIALIS PENYAKIT DALAM</h2>
                        <hr>
                        <h2 class="ket1">PRAKTEK : </h2>
                        <div class="ket2">
                            <h2>HADIR | 10.00-12.00</h2>
                        </div>

                    </div>
                </div>

                <div class="dokter">
                    <img src="Zulkarnain Oesman.jpg" alt="dokter-foto">
                    <div class="desc">
                        <h2 class="name">dr. Zulkarnain Oesman, Sp.PD</h2>
                        <h2 class="sps">KLINIK SPESIALIS PENYAKIT DALAM</h2>
                        <hr>
                        <h2 class="ket1">PRAKTEK : </h2>
                        <div class="ket2">
                            <h2>HADIR | 10.00-12.00</h2>
                        </div>

                    </div>
                </div>

                <div class="dokter">
                    <img src="Zulkarnain Oesman.jpg" alt="dokter-foto">
                    <div class="desc">
                        <h2 class="name">dr. Zulkarnain Oesman, Sp.PD</h2>
                        <h2 class="sps">KLINIK SPESIALIS PENYAKIT DALAM</h2>
                        <hr>
                        <h2 class="ket1">PRAKTEK : </h2>
                        <div class="ket2">
                            <h2>HADIR | 10.00-12.00</h2>
                        </div>

                    </div>
                </div>

                <div class="dokter">
                    <img src="Zulkarnain Oesman.jpg" alt="dokter-foto">
                    <div class="desc">
                        <h2 class="name">dr. Zulkarnain Oesman, Sp.PD</h2>
                        <h2 class="sps">KLINIK SPESIALIS PENYAKIT DALAM</h2>
                        <hr>
                        <h2 class="ket1">PRAKTEK : </h2>
                        <div class="ket2">
                            <h2>HADIR | 10.00-12.00</h2>
                        </div>

                    </div>
                </div>

                <div class="dokter">
                    <img src="Zulkarnain Oesman.jpg" alt="dokter-foto">
                    <div class="desc">
                        <h2 class="name">dr. Zulkarnain Oesman, Sp.PD</h2>
                        <h2 class="sps">KLINIK SPESIALIS PENYAKIT DALAM</h2>
                        <hr>
                        <h2 class="ket1">PRAKTEK : </h2>
                        <div class="ket2">
                            <h2>HADIR | 10.00-12.00</h2>
                        </div>

                    </div>
                </div> -->

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