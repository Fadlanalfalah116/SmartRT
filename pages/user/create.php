<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data User</h1>
<?php include('_partials/menu.php') ?>

<form action="store.php" method="post">
<h3>A. Data Pribadi</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nama User</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="nama_user" required></td>
  </tr>
  <tr>
    <th>Username</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="username_user" required></td>
  </tr>
  <tr>
    <th>Password</th>
    <td>:</td>
    <td><input type="password" class="form-control" name="password_user" required></td>
  </tr>
  <tr>
    <th>Status</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="status_user" required>
        <option value="" selected disabled>- Pilih -</option>
        <option value="Admin">Admin</option>
        <option value="Warga">Warga</option>
      </select>
    </td>
  </tr>
</table>

<h3>B. Data Alamat</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Desa/Kelurahan</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="desa_kelurahan_user" value="Talun" required readonly></td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kecamatan_user" value="Ibun" required readonly></td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kabupaten_kota_user" value="Bandung" required readonly></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="provinsi_user" value="Jawa Barat" required readonly></td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="negara_user" value="Indonesia" required readonly></td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rt_user" value="001" required readonly></td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rw_user" value="002" required readonly></td>
  </tr>
</table>

<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Simpan
</button>
</form>

<?php include('../_partials/bottom.php') ?>
