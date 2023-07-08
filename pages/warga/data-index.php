<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT *, TIMESTAMPDIFF(YEAR, `tanggal_lahir_warga`, CURDATE()) AS usia_warga FROM warga";

$hasil = mysqli_query($db, $query);

$data_warga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}


// Query untuk menghitung jumlah warga yang meninggal dunia
$query = "SELECT COUNT(*) AS total FROM warga WHERE riwayat_warga = 'Meninggal Dunia'";

// Eksekusi query dan menyimpan hasilnya ke dalam variabel $result
$result = $db->query($query);

// Mengambil hasil query dalam bentuk array asosiatif
$jumlah_warga_meninggal = $result->fetch_assoc();

// Query untuk menghitung jumlah warga tanpa pekerjaan
$query = "SELECT COUNT(*) AS total FROM warga WHERE pekerjaan_warga = 'Tanpa Pekerjaan'";

// Eksekusi query dan menyimpan hasilnya ke dalam variabel $result
$result = $db->query($query);

// Mengambil hasil query dalam bentuk array asosiatif
$jumlah_warga_tanpa_pekerjaan = $result->fetch_assoc();




?>