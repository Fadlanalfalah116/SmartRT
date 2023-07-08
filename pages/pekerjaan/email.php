<?php include('../_partials/top.php'); ?>

<h1 class="page-header">Pengiriman Email</h1>

<?php
$status = isset($_GET['status']) ? $_GET['status'] : '';

if ($status === 'success') {
  echo '<div class="alert alert-success">Email berhasil dikirim.</div>';
} elseif ($status === 'error') {
  echo '<div class="alert alert-danger">Gagal mengirim email. Silakan coba lagi.</div>';
}
?>

<form action="data-email.php" method="post">

  <a href="index.php" class="btn btn-primary btn-lg">
    <i class="glyphicon glyphicon-log-out"></i> Kembali
  </a>

  <button type="submit" class="btn btn-primary btn-lg">
    <i class="glyphicon glyphicon-send"></i> Kirim Email
  </button>

</form>

<?php include('../_partials/bottom.php'); ?>
