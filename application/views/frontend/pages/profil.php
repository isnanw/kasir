<div class="panel panel-default">
  <div class="panel-heading"><h2><b>Profil</b></h2></div>
  <div class="panel-body">
    <form action="<?php echo base_url() ?>Utama/simpanprofil" method="post">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Nama</label>
            <input type="hidden" class="form-control" name="idedit" id="idedit" value="<?= $user['id']; ?>" required readonly readonly>
            <input type="text" class="form-control" placeholder="Nama" name="nama" id="nama" value="<?= $user['nama']; ?>" required readonly readonly>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>No Identitas</label>
            <input type="text" class="form-control" placeholder="No Identitas" name="no_identitas" id="no_identitas" value="<?= $user['no_identitas']; ?>" required readonly>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?= $user['tanggal_lahir']; ?>" required readonly>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="alamat" value="<?= $user['alamat']; ?>" required readonly>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" id="jk" name="jk" disabled>
              <option value="<?= $user['jenis_kelamin']; ?>"><?= $user['jenis_kelamin']; ?></option>
              <option value="Pria">Pria</option>
              <option value="Wanita">Wanita</option>
              <option value="Lainya">Lainya</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Telepon</label>
            <input type="number" class="form-control" placeholder="Telepon" name="telepon" id="telepon" value="<?= $user['telepon']; ?>" required readonly>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" placeholder="Email" name="email" id="email" value="<?= $user['email']; ?>" required readonly>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required readonly>
          </div>
          <div class="panel-footer text-right">
            <button id="edit" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</button>
            <button id="batal" type="button" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Batal</button>
            <button id="simpan" type="submit" class="btn btn-success"><i class="glyphicon glyphicon-check"></i> Simpan</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<?php $this->load->view('frontend/themes/footer'); ?>

<script>
  $(document).ready(function() {
    $("#batal").hide();
    $("#simpan").hide();
  });

  $(document).on('click', '#edit', function(event) {
    $("#nama").prop('readonly', false);
    $("#no_identitas").prop('readonly', false);
    $("#tanggal_lahir").prop('readonly', false);
    $("#alamat").prop('readonly', false);
    $("#jk").prop('disabled', false);
    $("#telepon").prop('readonly', false);
    $("#email").prop('readonly', false);
    $("#password").prop('readonly', false);
    $("#edit").hide();
    $("#batal").show();
    $("#simpan").show();
  });
  $(document).on('click', '#batal', function(event) {
    $("#nama").prop('readonly', true);
    $("#no_identitas").prop('readonly', true);
    $("#tanggal_lahir").prop('readonly', true);
    $("#alamat").prop('readonly', true);
    $("#jk").prop('disabled', true);
    $("#telepon").prop('readonly', true);
    $("#email").prop('readonly', true);
    $("#password").prop('readonly', true);
    $("#edit").show();
    $("#batal").hide();
    $("#simpan").hide();
  });
</script>