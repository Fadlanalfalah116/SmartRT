<?php include('../_partials/top.php') ?>

<h1 class="page-header">Lowongan Pekerjaan</h1>

<form action="store.php" method="post" enctype="multipart/form-data">
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nama Pekerjaan</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="nama_pekerjaan" required></td>
  </tr>
  <tr>
    <th>Tautan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="tautan_pekerjaan"></td>
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

</form>

<?php include('../_partials/bottom.php') ?>
