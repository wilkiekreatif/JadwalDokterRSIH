<!-- tambah jadwal Modal-->
<div class="modal fade" id="tambah_jadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Input Jadwal Dokter</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- FORM INPUT PEMBERKASAN -->
          <form action="vjadwal.php" method="post">
            <div class="form-group has-feedback">
              <input required type="text" name="nama" class="form-control" placeholder="Id Dokter..." maxlength="6">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input required type="text" name="password" class="form-control" placeholder="Password..." maxlength="6">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input required type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap..." maxlength="255">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input required type="text" name="bagian" class="form-control" placeholder="Bagian..." maxlength="6">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Simpan Data</button>
            <button class="btn btn-warning" type="reset">Reset</button>
          </form>
        </div>
      </div>
    </div>