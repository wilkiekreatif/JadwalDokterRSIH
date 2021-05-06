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
  $id = $_GET['id'];
  $q = mysqli_query($connect,"SELECT a.*,b.* FROM dokter a, jadwal b WHERE b.id_dr=a.id and b.id=$id");
  $data = mysqli_fetch_array($q);
  //echo($data['TOTAL']);

?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Jadwal Praktek Dokter Poli - RSIH</title>

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
            <h1 class="h3 mb-2 text-gray-800">Edit Jadwal Dokter Poli</h1>
          </div>

          <div class='row'>
            <!--Photo -->
            <div class="col-xl-4 col-lg-10">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"><strong>Nama :</strong> <?php echo $data['nama'];?></h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <img src="<?php echo $data['photo']; ?>" width="300" height="300">
                </div>
              </div>
            </div>

            <!--Data Dokter -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Detail Jadwal</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <form action="ejadwal.php" method="post">
                    <div class="row">
                      <div class="col-xl-6">

                        <div class="form-group">
                          <label for="haripraktek">Hari Praktek *</label>
                          <select required class="form-control" id="haripraktek">
                            <option <?php if($data['hari_praktek']=='Monday'){echo 'selected';} ?> value="Monday">Senin</option>
                            <option <?php if($data['hari_praktek']=='Tuesday'){echo 'selected';} ?> value="Tuesday">Selasa</option>
                            <option <?php if($data['hari_praktek']=='Wednesday'){echo 'selected';} ?> value="Wednesday">Rabu</option>
                            <option <?php if($data['hari_praktek']=='Thursday'){echo 'selected';} ?> value="Thursday">Kamis</option>
                            <option <?php if($data['hari_praktek']=='Friday'){echo 'selected';} ?> value="Friday">Jum'at</option>
                            <option <?php if($data['hari_praktek']=='Saturday'){echo 'selected';} ?> value="Saturday">Sabtu</option>
                            <option <?php if($data['hari_praktek']=='Sunday'){echo 'selected';} ?> value="Sunday">Ahad</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="shift">Shift *</label>
                          <select required class="form-control" id="shift">
                            <option <?php if($data['shift']=='Pagi'){echo 'selected';} ?> value="Pagi">Pagi</option>
                            <option <?php if($data['shift']=='Siang'){echo 'selected';} ?> value="Siang">Siang</option>
                            <option <?php if($data['shift']=='Sore'){echo 'selected';} ?> value="Sore">Sore</option>
                          </select>
                        </div>

                      </div>

                      <div class="col-xl-6">
                        <div class="form-group">
                          <label for="status">Status Praktek *</label>
                          <select required class="form-control" id="status">
                            <?php
                            $tampil = mysqli_query($connect,"SELECT * FROM status_dr ORDER BY keterangan");
                            while ($w = mysqli_fetch_array($tampil)) {
                              if($data['keterangan']==$w[keterangan]){
                                echo "<option selected value='".$w[keterangan]."'>".$w[keterangan]."</option>";
                              }else{
                                echo "<option value='".$w[keterangan]."'>".$w[keterangan]."</option>";
                              }    
                            }
                            ?>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="jam">Jam Praktek</label>
                          <input type="text" class="form-control" id="jam" value="<?php echo $data['jam']; ?>" placeholder="format: HH:MM-HH:MM">
                          <small id="jam" class="form-text text-muted">diisi jika status praktek HADIR</small>
                        </div>
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-xl-12">
                        <button type="submit" class="btn btn-success col-xl-12">Update jadwal </button>
                      </div>
                    </div>
                  </form>
                </div>
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
