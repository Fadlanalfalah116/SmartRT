<?php
include('../../config/koneksi.php');

$query = "SELECT pekerjaan.*, user.nama_user FROM pekerjaan LEFT JOIN user ON pekerjaan.id_user = user.id_user";

$hasil = mysqli_query($db, $query);

$data_pekerjaan = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_pekerjaan[] = $row;
}
?>
