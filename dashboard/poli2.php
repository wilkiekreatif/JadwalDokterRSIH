<!DOCTYPE html>
<?php
	include('../config.php');
?>
<html>
<head>
	<title>Jadwal Poliklinik</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="function.js"></script>
</head>
<body>
	
	<header>
		<div class="top">
			<h4 class="tanggal"><?php
				//menampilkan tanggal hari ini
				echo date('l, d-m-Y');
				$hari = date('l');
			?></h4>
			<h4 class="jam"><?php
				// menampilkan jam sekarang
				//echo date('H:i:s');
			?></h4>
			<h1>POLIKLINIK RUMAH SAKIT INTAN HUSADA</h1>
		</div>
	</header>

	<div class="title-jadwal">
		<h2>JADWAL DOKTER HARI INI</h2>
	</div>
	<div class="list-dokter">
		<!-- loop menampilkan dokter -->
		<?php
			//membuat query membaca record dari tabel User      
			$query="SELECT a.*,b.* FROM dokter a, jadwal b WHERE (b.id_dr=a.id AND b.hari_praktek='$hari') AND a.lokasi='1'";
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
						<div class="dok">
							<a target="_blank" href="<?php echo '../admin/'.$row['photo']; ?>">
								<img src="<?php echo '../admin/'.$row['photo']; ?>" width="300" height="300">
							</a>
							<div class="desc"><?php echo $row['nama']; ?></div>
							<h4><?php echo $row['spesialis']; ?></h4>
							<h3><?php echo $row['jam1']; ?></h3>
							<h3><?php echo $row['jam2']; ?></h3>
							<h3><?php echo $row['jam3']; ?></h3>
							<!-- <h5>- Status Pasien -</h5> -->
						</div>
					<?php
					// echo "<tr>";
					// echo "  <td>".$no."</td>";    
					// echo "  <td>".$row["nama_lengkap"]."</td>";
					// echo "  <td>".$row["username"]."</td>";      
					// echo "  <td>".$row["bagian"]."</td>";
					// echo "<td width='14%' align='center'> <a href='../$row[files]' class='btn btn-sm btn-primary'> <i class='glyphicon glyphicon-floppy-save'></i></a>";
					// echo " <a href='#accModal' class='btn btn-sm btn-success' id='CustId' data-toggle='modal' data-id=".$row['id']."><i class='glyphicon glyphicon-ok'></i> </a> ";
					// echo " <a href='#myModal' class='btn btn-sm btn-danger' id='CustId' data-toggle='modal' data-id=".$row['id']."><i class='glyphicon glyphicon-remove'></i> </a></td>";  
					//echo "</tr>";   
					$no++;
				}    
			}
		?>
	</div>

	<!-- <div class="running-txt">
		<div class="container">
			<h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit doloremque eos aspernatur modi et temporibus quod. Omnis laboriosam sint quasi quibusdam qui perferendis est sit nobis, a expedita ipsum magnam.</h2>
		</div>
	</div> -->

	<!-- <div class="footer">
        Copyright &copy; 2021
        Designed by isfan.ff
	</div> -->
	
</body>

</html>