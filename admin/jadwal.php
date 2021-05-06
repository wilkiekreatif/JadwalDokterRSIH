<!DOCTYPE html>
<html lang="en">
<?php
  session_start();
  $_SESSION['menu']='jadwal';

 //agar tidak bisa di akses jika tidak login
  if (empty($_SESSION['username'])) {
  header('location:../');
  }
  include('../config.php');
?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jadwal Praktek Dokter Poli - RSIH</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> -->
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php
      include('component/sidebar.php');
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php
          include('component/topbar.php');
        ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800">Jadwal Dokter Poli</h1>
            <a href="#tambah_jadwal" class="btn btn-sm btn-success" id="CustId" data-toggle="modal"><i class="fas fa-upload fa-sm text-white-50"></i> Tambah Jadwal Dokter Poli</a>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Jadwal Praktek Dokter Poli</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Hari | Shift</th>
                      <th>Jam Praktek</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>No</th>
                      <th>Nama</th>
                      <th>Hari | Shift</th>
                      <th>jam Praktek</th>
                      <th>#</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      //membuat query membaca record dari tabel User      
                      $query="SELECT a.*,b.nama FROM jadwal a, dokter b WHERE a.id_dr = b.id";
                      //menjalankan query      
                      if (mysqli_query($connect,$query)) {      
                        $result=mysqli_query($connect,$query);     
                      } else die ("Error menjalankan query". mysql_error());
                      //mengecek record kosong     
                      if (mysqli_num_rows($result) > 0) {
                        $no='1';
                        //menampilkan hasil query      
                        while($row = mysqli_fetch_array($result)) {      
                          echo "<tr>";
                          echo "  <td>".$no."</td>";    
                          echo "  <td>".$row["nama"]."</td>";
                          if($row['hari_praktek']=='Monday'){
                            echo "<td>Senin | ".$row["shift"]."</td>";
                          }else if($row['hari_praktek']=='Tuesday'){
                            echo "<td>Selasa | ".$row["shift"]."</td>";
                          }else if($row['hari_praktek']=='Wednesday'){
                            echo "<td>Rabu | ".$row["shift"]."</td>";
                          }else if($row['hari_praktek']=='Thursday'){
                            echo "<td>Kamis | ".$row["shift"]."</td>";
                          }else if($row['hari_praktek']=='Friday'){
                            echo "<td>Jumat | ".$row["shift"]."</td>";
                          }else if($row['hari_praktek']=='Saturday'){
                            echo "<td>Sabtu | ".$row["shift"]."</td>";
                          }else if($row['hari_praktek']=='Sunday'){
                            echo "<td>Ahad | ".$row["shift"]."</td>";
                          }
                          // echo "  <td>".$row["hari_praktek"]."</td>";      
                          echo "  <td>".$row["jam"]."</td>";
                          // echo "<td width='14%' align='center'> <a href='../$row[files]' class='btn btn-sm btn-primary'> <i class='glyphicon glyphicon-floppy-save'></i></a>";
                          echo "<td width='15%' align='center'> <a href='editjadwal.php?id=".$row['id']."' class='btn btn-sm btn-primary'><i class='glyphicon glyphicon-trash'></i> Edit</a> | ";
                          echo " <a href='control/hapus.php?id=".$row['id']."' class='btn btn-sm btn-danger'><i class='glyphicon glyphicon-trash'></i> Hapus </a></td>";  
                          echo "</tr>";   
                          $no++;
                        }    
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php
        include('component/footer.php');
      ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!--Modal-->
  <?php
    include('modal/logoutmodal.php');
    include('modal/tambahjadwal.php');
  ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
