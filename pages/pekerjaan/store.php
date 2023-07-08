<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data form
$nama_pekerjaan = htmlspecialchars($_POST['nama_pekerjaan']);
$tautan_pekerjaan = htmlspecialchars($_POST['tautan_pekerjaan']);

$id_user = $_SESSION['user']['id_user'];

// masukkan ke database
$query = "INSERT INTO pekerjaan (id_pekerjaan, nama_pekerjaan, tautan_pekerjaan, id_user, created_at, updated_at) VALUES (NULL, '$nama_pekerjaan', '$tautan_pekerjaan', '$id_user', CURRENT_TIMESTAMP, '0000-00-00 00:00:00')";

$hasil = mysqli_query($db, $query);

// cek keberhasilan penambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah pekerjaan berhasil'); window.location.href='../pekerjaan'</script>";
} else {
  echo "<script>window.alert('Tambah pekerjaan gagal!'); window.location.href='../pekerjaan'</script>";
}
?>
