<?php
function is_active($page) {
  $uri = $_SERVER['REQUEST_URI'];
  if (strpos($uri, $page) !== false) {
    echo 'active';
  }
}
?>

<ul class="nav nav-sidebar">
  <li class="<?php is_active('/dasbor'); ?>">
    <a href="../dasbor"><i class="glyphicon glyphicon-home"></i> Beranda</a>
  </li>
</ul>

<ul class="nav nav-sidebar">
  <li class="<?php is_active('/warga'); ?>">
    <a href="../warga"><i class="glyphicon glyphicon-book"></i> Data Warga</a>
  </li>
  <li class="<?php is_active('/kartu-keluarga'); ?>">
    <a href="../kartu-keluarga"><i class="glyphicon glyphicon-inbox"></i> Data Kartu Keluarga</a>
  </li>
  <li class="<?php is_active('/mutasi'); ?>">
    <a href="../mutasi"><i class="glyphicon glyphicon-export"></i> Data Mutasi</a>
  </li>
</ul>

<ul class="nav nav-sidebar">
  <li class="<?php is_active('/pekerjaan'); ?>">
    <a href="../pekerjaan"><i class="	glyphicon glyphicon-briefcase"></i> Lowongan Pekerjaan</a>
  </li>
</ul>

<?php if ($_SESSION['user']['status_user'] != 'RW'): ?>
<ul class="nav nav-sidebar">
  <li class="<?php is_active('/user'); ?>">
    <a href="../user"><i class="glyphicon glyphicon-user"></i> User</a>
  </li>
</ul>
<?php endif; ?>
