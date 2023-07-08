<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Mutasi</h1>

<?php include('data-show.php') ?>

<h3>A. Data Pribadi</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">NIK</th>
    <td width="1%">:</td>
    <td><?php echo $data_mutasi[0]['nik_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Nama Mutasi</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['nama_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['tempat_lahir_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['tanggal_lahir_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['jenis_kelamin_mutasi'] ?></td>
  </tr>
</table>

<h3>B. Data Alamat</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Desa/Kelurahan</th>
    <td width="1%">:</td>
    <td><?php echo $data_mutasi[0]['desa_kelurahan_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['kecamatan_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['kabupaten_kota_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['provinsi_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['negara_mutasi'] ?></td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['rt_mutasi'] ?></td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['rw_mutasi'] ?></td>
  </tr>
</table>

<h3>C. Data Lain-lain</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Agama</th>
    <td width="1%">:</td>
    <td><?php echo $data_mutasi[0]['agama_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Pendidikan</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['pendidikan_terakhir_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['pekerjaan_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Status Perkawinan</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['status_perkawinan_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Status Tinggal</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['status_mutasi'] ?></td>
  </tr>
  <tr>
    <th>Riwayat Hidup</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['riwayat_mutasi'] ?></td>
  </tr>
</table>

<h3>D. Data Aplikasi</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Diinput oleh</th>
    <td width="1%">:</td>
    <td><?php echo $db->query("SELECT nama_user FROM user WHERE id_user = '".$data_mutasi[0]['id_user']."'")->fetch_assoc()['nama_user'] ?></td>
  </tr>
  <tr>
    <th>Diinput</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['created_at'] ?></td>
  </tr>
  <tr>
    <th>Diperbaharui</th>
    <td>:</td>
    <td><?php echo $data_mutasi[0]['updated_at'] ?></td>
  </tr>
</table>

<button type="button" class="btn btn-primary btn-lg" onclick="goBack()">
  <i class="glyphicon glyphicon-log-out"></i> Kembali
</button>

<script>
function goBack() {
  history.back();
}
</script>

<?php include('../_partials/bottom.php') ?>
