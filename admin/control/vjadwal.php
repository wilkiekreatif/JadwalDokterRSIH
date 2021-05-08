<?php
    //panggil file config.php untuk menghubung ke server
    include('../../config.php');
    
	$id     = $_POST['id'];
	$hari 	= $_POST['hari'];
    $shift  = $_POST['shift'];
    $jam    = $_POST['jam'];

    //$ekstensi_diperbolehkan	= array('jpg','png','bmp');
    
    //$namafile = $_FILES['fileupload']['name'];
	//$x = explode('.', $namafile);
	//$ekstensi = strtolower(end($x));
	//$ukuran	= $_FILES['fileupload']['size'];
    //$file_tmp = $_FILES['fileupload']['tmp_name'];

    //upload Gambar
	// $q = mysqli_query($connect, "SELECT * FROM dokter WHERE nama='$nama'");
	// if(mysqli_num_rows($q) >= 1){
	// 	header('location:dokter.php?message=duplicate');
	// }else if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        // if($ukuran < 1044070){
		// 	$lokasi = 'img/'.$nama.'.'.$ekstensi;
        //     move_uploaded_file($file_tmp,$lokasi);
			$query = mysqli_query($connect,"INSERT INTO jadwal VALUES(default,'$id','$hari','$shift','Hadir','$jam', '0')");
            //cek hasil query
            if (!$query) {
                die('Query Error : '.mysqli_errno($link). 
                ' - '.mysqli_error($link));
            }
			if($query){
				header('location:../jadwal.php?message=success&id='.$id);
			}else{
                header('location:../jadwal.php?message=gagal');
			}
        // }else{
        //     header('location:dokter.php?error=1');
        // }
    // }else{
    //     header('location:dokter.php?error=2');
	// }
?>