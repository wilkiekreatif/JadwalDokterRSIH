<!-- tambah jadwal Modal-->
<div class="modal fade" id="tambah_jadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal Dokter</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- FORM INPUT PEMBERKASAN -->
        <form action="control/vjadwal.php" method="post">
          <div class="form-group has-feedback">
            <select required class="form-control" id="id" name="id">
              <option value="">-- Pilih Dokter --</option>
              <?php
              $tampil = mysqli_query($connect,"SELECT * FROM dokter ORDER BY nama ASC");
              while ($w = mysqli_fetch_array($tampil)) {
                echo "<option value='".$w[id]."'>".$w[nama]."</option>";
              }
              ?>
            </select>
          </div>
          <div class="form-group has-feedback">
            <select required class="form-control" id="hari" name="hari">
              <option value="">-- Pilih hari --</option>
              <option value="Monday">Senin</option>
              <option value="Tuesday">Selasa</option>
              <option value="Wednesday">Rabu</option>
              <option value="Thursday">Kamis</option>
              <option value="Friday">Jumat</option>
              <option value="Saturday">Sabtu</option>
              <option value="Sunday">Ahad</option>
            </select> 
          </div>
          <div class="form-group has-feedback">
            <select required class="form-control" id="shift" name="shift">
              <option value="">-- Pilih Shift --</option>
              <option value="Pagi">pagi</option>
              <option value="Sore">Sore</option>
            </select>
          </div>
          <div class="form-group has-feedback">
            <input required type="text" id="jam" name="jam" class="form-control" placeholder="Jam Praktek... (format: HH:MM - HH:MM)" maxlength="13">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            <small> * Pagi : 06:00 s/d 13:00, Sore : 14:00 s/d 21:00</small>
          </div>
      </div>
      <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Simpan Data</button>
          <button class="btn btn-warning" type="reset">Reset</button>
        </form>
      </div>
    </div>
  </div>
