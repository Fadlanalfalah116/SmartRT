<?php include('../_partials/top.php') ?>

<h1 class="page-header">Beranda</h1>

<?php include('data-index.php') ?>

<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="panel panel-primary custom-panel">
      <div class="panel-heading">
        <h3 class="panel-title">Data Warga</h3>
      </div>
      <div class="panel-body">
        <p>Total ada <span class="highlight"><?php echo $jumlah_warga['total'] ?></span> data warga. <span class="highlight"><?php echo $jumlah_warga_l['total'] ?></span> di antaranya adalah laki-laki, dan <span class="highlight"><?php echo $jumlah_warga_p['total'] ?></span> di antaranya adalah perempuan.</p>
        <p>Jumlah warga yang berusia di atas 17 tahun adalah <span class="highlight"><?php echo $jumlah_warga_ld_17['total'] ?></span> orang, dan yang berusia di bawah 17 tahun adalah <span class="highlight"><?php echo $jumlah_warga_kd_17['total'] ?></span> orang.</p>
        <p>Jumlah warga yang telah meninggal dunia adalah <span class="highlight"><?php echo $jumlah_warga_meninggal['total'] ?></span> orang.</p>
      </div>
      <div class="panel-footer">
        <a href="../warga" class="btn btn-primary custom-btn" role="button">
          <span class="glyphicon glyphicon-book"></span> Lihat Detil »
        </a>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="panel panel-primary custom-panel">
      <div class="panel-heading">
        <h3 class="panel-title">Data Kartu Keluarga</h3>
      </div>
      <div class="panel-body">
        <p>Total ada <span class="highlight"><?php echo $jumlah_kartu_keluarga['total'] ?></span> data kartu keluarga.</p>
      </div>
      <div class="panel-footer">
        <a href="../kartu-keluarga" class="btn btn-primary custom-btn" role="button">
          <span class="glyphicon glyphicon-inbox"></span> Lihat Detil »
        </a>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="panel panel-primary custom-panel">
      <div class="panel-heading">
        <h3 class="panel-title">Data Mutasi</h3>
      </div>
      <div class="panel-body">
        <p>Total ada <span class="highlight"><?php echo $jumlah_mutasi['total'] ?></span> data mutasi. <span class="highlight"><?php echo $jumlah_mutasi_l['total'] ?></span> di antaranya adalah laki-laki, dan <span class="highlight"><?php echo $jumlah_mutasi_p['total'] ?></span> di antaranya adalah perempuan.</p>
        <p>Jumlah warga yang mengalami mutasi dan berusia di atas 17 tahun adalah <span class="highlight"><?php echo $jumlah_mutasi_ld_17['total'] ?></span> orang, dan yang berusia di bawah 17 tahun adalah <span class="highlight"><?php echo $jumlah_mutasi_kd_17['total'] ?></span> orang.</p>
      </div>
      <div class="panel-footer">
        <a href="../mutasi" class="btn btn-primary custom-btn" role="button">
          <span class="glyphicon glyphicon-export"></span> Lihat Detil »
        </a>
      </div>
    </div>
  </div>
</div>

<?php include('../_partials/bottom.php') ?>
