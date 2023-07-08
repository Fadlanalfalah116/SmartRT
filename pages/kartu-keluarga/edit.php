<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kartu Keluarga</h1>

<?php include('data-show.php') ?>

<form action="update.php" method="post">
<h3>A. Data Pribadi</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nomor Kartu Keluarga</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="nomor_keluarga" value="<?php echo $data_keluarga[0]['nomor_keluarga'] ?>"></td>
  </tr>
  <tr>
    <th>Kepala Keluarga</th>
    <td>:</td>
    <td>
      <select class="form-control selectlive" name="id_kepala_keluarga" required>
        <option value="<?php echo $data_keluarga[0]['id_warga'] ?>" selected><?php echo $data_keluarga[0]['nama_warga'] ?></option>
        <?php foreach ($data_warga as $warga) : ?>
        <option value="<?php echo $warga['id_warga'] ?>">
          <?php echo $warga['nama_warga'] ?> (NIK: <?php echo $warga['nik_warga'] ?>)
        </option>
        <?php endforeach ?>
      </select>
    </td>
  </tr>
</table>

<h3>B. Data Alamat</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Desa/Kelurahan</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="desa_kelurahan_warga" value="<?php echo $_SESSION['user']['desa_kelurahan_user'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kecamatan_warga" value="<?php echo $_SESSION['user']['kecamatan_user'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kabupaten_kota_warga" value="<?php echo $_SESSION['user']['kabupaten_kota_user'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="provinsi_warga" value="<?php echo $_SESSION['user']['provinsi_user'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="negara_warga" value="<?php echo $_SESSION['user']['negara_user'] ?>" readonly></td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rt_warga" value="<?php echo $_SESSION['user']['rt_user'] ?>" readonly></td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rw_warga" value="<?php echo $_SESSION['user']['rw_user'] ?>" readonly></td>
  </tr>
</table>


<button type="button" class="btn btn-primary btn-lg" onclick="goBack()">
  <i class="glyphicon glyphicon-log-out"></i> Kembali
</button>

<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Simpan
</button>

<script>
function goBack() {
  history.back();
}
</script>

<input type="hidden" name="id_keluarga" value="<?php echo $data_keluarga[0]['id_keluarga'] ?>">
</form>

<?php include('../_partials/bottom.php') ?>
