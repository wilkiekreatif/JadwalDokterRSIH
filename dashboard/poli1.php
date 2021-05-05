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
			<!-- <h1>POLIKLINIK RUMAH SAKIT INTAN HUSADA</h1> -->
			<h1 >JADWAL POLIKLINIK HARI INI</h1>

		<div class="title-jadwal">
			<?php
				if(date('l')=='Monday'){
					echo '<h1>Senin, ';
				}else if(date('l')=='Tuesday'){
					echo '<h1>Selasa, ';
				}else if(date('l')=='Wednesday'){
					echo '<h1>Rabu, ';
				}else if(date('l')=='Thursday'){
					echo '<h1>Kamis, ';
				}else if(date('l')=='Friday'){
					echo '<h1>Jumat, ';
				}else if(date('l')=='Saturday'){
					echo '<h1>Sabtu, ';
				}else if(date('l')=='Sunday'){
					echo '<h1>Ahad, ';
				}
				echo date('d F Y').'</h1>';
			?>
		</div>
		</div>
	</header>
	<div class="list-dokter">
		<!-- loop menampilkan dokter -->
		<?php
			$hari = date('l');
			//membuat query membaca record dari tabel User      
			$query="SELECT a.*,b.* FROM dokter a, jadwal b WHERE (b.id_dr=a.id AND b.hari_praktek='$hari') AND a.lokasi='0'";
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
							<a target="_blank" href="<?php
								echo '../admin/'.$row['photo']; ?>">
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