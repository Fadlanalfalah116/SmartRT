<?php
// Mengaktifkan error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$user = "root";
$pass = "";
$database = "db_warga";

$db = mysqli_connect($host, $user, $pass, $database) or die("gagal koneksi ke database");
