<!-- tambah Pemberkasan Modal-->
<div class="modal fade" id="tambah_dokter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Dokter Baru</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- FORM INPUT PEMBERKASAN -->
          <form action="../control/vdokter.php" method="post" enctype="multipart/form-data">
            <div class="form-group has-feedback">
              <input required type="text" name="nama" class="form-control" placeholder="Nama Lengkap disertai Gelar..." maxlength="255">
            </div>
            <div class="form-group has-feedback">
              <input required type="text" name="spesialis" class="form-control" placeholder="Spesialis..." maxlength="160">
            </div>
            <div class="form-group has-feedback">
              <select Required class="form-control" id="poli" name="poli">
                <option selected>Lokasi Praktek.. <-- Pilih salah satu --></option>  
                <option value="0">Poli Depan</option>
                <option value="1">Poli Belakang</option>
              </select>
            </div>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="form-group has-feedback">
              <small><p align="justify">* Foto dokter harus memiliki ukuran <b>700x700px</b> dengan size maks <b>1mb</b> dan berekstensi <b>.JPG</b></p></small>
              <input required type="file" name="fileupload" id="fileupload">
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