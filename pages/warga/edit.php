<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Warga</h1>

<?php include('data-show.php') ?>

<form action="update.php" method="post">
<h3>A. Data Pribadi</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">NIK</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="nik_warga" value="<?php echo $data_warga[0]['nik_warga'] ?>"></td>
  </tr>
  <tr>
    <th>Nama</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_warga" value="<?php echo $data_warga[0]['nama_warga'] ?>"></td>
  </tr>
  <tr>
    <th>Email</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="email_warga" value="<?php echo $data_warga[0]['email_warga'] ?>"></td>
  </tr>
  <tr>
    <th>No Handphone</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="no_warga" value="<?php echo $data_warga[0]['no_warga'] ?>"></td>
  </tr>
  <tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="tempat_lahir_warga" value="<?php echo $data_warga[0]['tempat_lahir_warga'] ?>"></td>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td><input type="text" class="form-control datepicker" name="tanggal_lahir_warga" value="<?php echo $data_warga[0]['tanggal_lahir_warga'] ?>"></td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="jenis_kelamin_warga" required>
        <option value="<?php echo $data_warga[0]['jenis_kelamin_warga'] ?>" selected><?php echo $data_warga[0]['jenis_kelamin_warga'] ?></option>
        <option value="Laki-Laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </td>
  </tr>
</table>

<h3>B. Data Alamat</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Desa/Kelurahan</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="desa_kelurahan_warga" value="<?php echo $data_warga[0]['desa_kelurahan_warga'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kecamatan_warga" value="<?php echo $data_warga[0]['kecamatan_warga'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kabupaten_kota_warga" value="<?php echo $data_warga[0]['kabupaten_kota_warga'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="provinsi_warga" value="<?php echo $data_warga[0]['provinsi_warga'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="negara_warga" value="<?php echo $data_warga[0]['negara_warga'] ?>" readonly></td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rt_warga" value="<?php echo $data_warga[0]['rt_warga'] ?>" readonly></td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rw_warga" value="<?php echo $data_warga[0]['rw_warga'] ?>" readonly></td>
  </tr>
</table>

<h3>C. Data Lain-lain</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Agama</th>
    <td width="1%">:</td>
    <td>
      <select class="form-control selectlive" name="agama_warga" required>
        <option value="<?php echo $data_warga[0]['agama_warga'] ?>" selected><?php echo $data_warga[0]['agama_warga'] ?></option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katholik">Katholik</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        <option value="Konghucu">Konghucu</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Pendidikan Terakhir</th>
    <td>:</td>
    <td>
      <select class="form-control selectlive" name="pendidikan_terakhir_warga" required>
        <option value="<?php echo $data_warga[0]['pendidikan_terakhir_warga'] ?>" selected><?php echo $data_warga[0]['pendidikan_terakhir_warga'] ?></option>
        <option value="Tidak Sekolah">Tidak Sekolah</option>
        <option value="Tidak Tamat SD">Tidak Tamat SD</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="D3">D3</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <td>:</td>
    <td>
    <select name="pekerjaan_warga" class="form-control selectlive" required>
      <option value="<?php echo $data_warga[0]['pekerjaan_warga'] ?>" selected><?php echo $data_warga[0]['pekerjaan_warga'] ?></option>
      <option value="PNS">PNS</option>
      <option value="Swasta">Swasta</option>
      <option value="Wiraswasta">Wiraswasta</option>
      <option value="Mahasiswa">Mahasiswa</option>
      <option value="Pelajar">Pelajar</option>
      <option value="Tanpa Pekerjaan">Tanpa Pekerjaan</option>
    </select>
    </td>
  </tr>
  <tr>
    <th>Status Perkawinan</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="status_perkawinan_warga" required>
        <option value="<?php echo $data_warga[0]['status_perkawinan_warga'] ?>" selected><?php echo $data_warga[0]['status_perkawinan_warga'] ?></option>
        <option value="Kawin">Kawin</option>
        <option value="Tidak Kawin">Tidak Kawin</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Status Tinggal</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="status_warga" required>
        <option value="<?php echo $data_warga[0]['status_warga'] ?>" selected><?php echo $data_warga[0]['status_warga'] ?></option>
        <option value="Tetap">Tetap</option>
        <option value="Kontrak">Kontrak</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Riwayat Hidup</th>
    <td>:</td>
    <td>
    <select name="riwayat_warga" class="form-control selectpicker" required>
      <option value="<?php echo $data_warga[0]['riwayat_warga'] ?>" selected><?php echo $data_warga[0]['riwayat_warga'] ?></option>
      <option value="Hidup">Hidup</option>
      <option value="Meninggal Dunia">Meninggal Dunia</option>
    </select>
    </td>
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

<input type="hidden" name="id_warga" value="<?php echo $data_warga[0]['id_warga'] ?>">
</form>

<?php include('../_partials/bottom.php') ?>
