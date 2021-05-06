
  <!-- tambah Pemberkasan Modal-->
  <div class="modal fade" id="tambah_pemberkasan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Input Progres Pemberkasan</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- FORM INPUT PEMBERKASAN -->
          <form action="../control/vuser.php" method="post">
            <div class="form-group has-feedback">
              <input required type="text" name="username" class="form-control" placeholder="Username..." maxlength="6">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input required type="password" name="password" class="form-control" placeholder="Password..." maxlength="6">
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
  </div>