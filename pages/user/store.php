<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form dan lakukan validasi

$nama_user = $_POST['nama_user'];
$username_user = $_POST['username_user'];
$password_user = $_POST['password_user'];
$keterangan_user = $_POST['keterangan_user'];
$status_user = $_POST['status_user'];
$desa_kelurahan_user = $_POST['desa_kelurahan_user'];
$kecamatan_user = $_POST['kecamatan_user'];
$kabupaten_kota_user = $_POST['kabupaten_kota_user'];
$provinsi_user = $_POST['provinsi_user'];
$negara_user = $_POST['negara_user'];
$rt_user = $_POST['rt_user'];
$rw_user = $_POST['rw_user'];

// Escape input
$nama_user = mysqli_real_escape_string($db, $nama_user);
$username_user = mysqli_real_escape_string($db, $username_user);
$password_user = mysqli_real_escape_string($db, $password_user);
$status_user = mysqli_real_escape_string($db, $status_user);
$desa_kelurahan_user = mysqli_real_escape_string($db, $desa_kelurahan_user);
$kecamatan_user = mysqli_real_escape_string($db, $kecamatan_user);
$kabupaten_kota_user = mysqli_real_escape_string($db, $kabupaten_kota_user);
$provinsi_user = mysqli_real_escape_string($db, $provinsi_user);
$negara_user = mysqli_real_escape_string($db, $negara_user);
$rt_user = mysqli_real_escape_string($db, $rt_user);
$rw_user = mysqli_real_escape_string($db, $rw_user);

// Hash password
$password_user = password_hash($password_user, PASSWORD_DEFAULT);

// masukkan ke database

$query = "INSERT INTO user (id_user, nama_user, username_user, password_user, status_user, desa_kelurahan_user, kecamatan_user, kabupaten_kota_user, provinsi_user, negara_user, rt_user, rw_user, created_at, updated_at) VALUES (NULL, '$nama_user', '$username_user', '$password_user', '$status_user', '$desa_kelurahan_user', '$kecamatan_user', '$kabupaten_kota_user', '$provinsi_user', '$negara_user', '$rt_user', '$rw_user', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan penambahan data
if ($hasil) {
  echo "<script>window.alert('Tambah user berhasil'); window.location.href='../user'</script>";
} else {
  echo "<script>window.alert('Tambah user gagal! Error: " . mysqli_error($db) . "'); window.location.href='../user/create.php'</script>";
}
?>
