<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_pekerjaan = htmlspecialchars($_GET['id_pekerjaan']);

// delete data dari database
$query = "DELETE FROM pekerjaan WHERE id_pekerjaan = $id_pekerjaan";

$hasil = mysqli_query($db, $query);

// cek keberhasilan penghapusan data
if ($hasil == true) {
  echo "<script>window.location.href='../pekerjaan'</script>";
} else {
  echo "<script>window.alert('Pekerjaan gagal dihapus!'); window.location.href='../pekerjaan'</script>";
}
?>
