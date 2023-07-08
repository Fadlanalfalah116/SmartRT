<?php include('../_partials/top.php') ?>

<h1 class="page-header">Lowongan Pekerjaan</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>#</th>
      <th>Nama Pekerjaan</th>
      <th>Tautan Pekerjaan</th>
      <th>Diinput Oleh</th>
      <th>Diinput</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data_pekerjaan as $pekerjaan) : ?>
    <tr>
      <td><?php echo $nomor++ ?></td>
      <td><?php echo $pekerjaan['nama_pekerjaan'] ?></td>
      <td>
        <?php
          $tautan = $pekerjaan['tautan_pekerjaan'];
          if (strlen($tautan) > 100) {
            $tautan = wordwrap($tautan, 100, "<br>", true);
          }
          echo $tautan;
        ?>
      </td>
      <td><?php echo $pekerjaan['nama_user'] ?></td>
      <td><?php echo $pekerjaan['created_at'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="delete.php?id_pekerjaan=<?php echo $pekerjaan['id_pekerjaan'] ?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
            </li>
          </ul>
        </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<?php include('../_partials/bottom.php') ?>
