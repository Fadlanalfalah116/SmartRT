<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Mutasi</h1>

<?php include('../warga/data-show.php') ?>

<form action="store.php" method="post">
<h3>A. Data Pribadi</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">NIK</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="nik_mutasi" value="<?php echo $data_warga[0]['nik_warga'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Nama Warga</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_mutasi" value="<?php echo $data_warga[0]['nama_warga'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="tempat_lahir_mutasi" value="<?php echo $data_warga[0]['tempat_lahir_warga'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="tanggal_lahir_mutasi" value="<?php echo $data_warga[0]['tanggal_lahir_warga'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>
      <select class="form-control" name="jenis_kelamin_mutasi" required readonly>
        <option value="<?php echo $data_warga[0]['jenis_kelamin_warga'] ?>" selected><?php echo $data_warga[0]['jenis_kelamin_warga'] ?></option>
      </select>
    </td>
  </tr>
</table>

<h3>B. Data Alamat</h3>
<table class="table table-striped table-middle">
    <th width="20%">Desa/Kelurahan</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="desa_kelurahan_mutasi" value="<?php echo $data_warga[0]['desa_kelurahan_warga'] ?>"></td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kecamatan_mutasi" value="<?php echo $data_warga[0]['kecamatan_warga'] ?>"></td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kabupaten_kota_mutasi" value="<?php echo $data_warga[0]['kabupaten_kota_warga'] ?>"></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="provinsi_mutasi" value="<?php echo $data_warga[0]['provinsi_warga'] ?>"></td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="negara_mutasi" value="<?php echo $data_warga[0]['negara_warga'] ?>"></td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rt_mutasi" value="<?php echo $data_warga[0]['rt_warga'] ?>"></td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rw_mutasi" value="<?php echo $data_warga[0]['rw_warga'] ?>"></td>
  </tr>
</table>

<h3>C. Data Lain-lain</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Agama</th>
    <td width="1%">:</td>
    <td>
      <select class="form-control" name="agama_mutasi" required readonly>
        <option value="<?php echo $data_warga[0]['agama_warga'] ?>" selected><?php echo $data_warga[0]['agama_warga'] ?></option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Pendidikan Terakhir</th>
    <td>:</td>
    <td>
      <select class="form-control" name="pendidikan_terakhir_mutasi" required readonly>
        <option value="<?php echo $data_warga[0]['pendidikan_terakhir_warga'] ?>" selected><?php echo $data_warga[0]['pendidikan_terakhir_warga'] ?></option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="pekerjaan_mutasi" value="<?php echo $data_warga[0]['pekerjaan_warga'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Status Perkawinan</th>
    <td>:</td>
    <td>
      <select class="form-control" name="status_perkawinan_mutasi" required readonly>
        <option value="<?php echo $data_warga[0]['status_perkawinan_warga'] ?>" selected><?php echo $data_warga[0]['status_perkawinan_warga'] ?></option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Status Tinggal</th>
    <td>:</td>
    <td><input class="form-control selectpicker" name="status_mutasi" value="Pindah" readonly></td>
  </tr>
  <tr style="display: none;">
    <th>Riwayat Hidup </th>
    <td>:</td>
    <td>
      <select name="riwayat_mutasi" class="form-control">
        <option value="<?php echo $data_warga[0]['riwayat_warga'] ?>"><?php echo $data_warga[0]['riwayat_warga'] ?></option>
      </select>
    </td>
  </tr>
</table>

<input type="hidden" name="id_warga" value="<?php echo $data_warga[0]['id_warga'] ?>">


<button type="button" class="btn btn-primary btn-lg" onclick="goBack()">
  <i class="glyphicon glyphicon-log-out"></i> Kembali
</button>

<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-export"></i> Mutasi
</button>

<script>
function goBack() {
  history.back();
}
</script>

</form>

<?php include('../_partials/bottom.php') ?>
