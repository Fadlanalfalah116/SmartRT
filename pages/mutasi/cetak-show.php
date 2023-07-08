<?php
require_once("../../assets/lib/fpdf/fpdf.php");
require_once("../../config/koneksi.php");

class PDF extends FPDF
{
    // Page header
    function Header()
    {
      // Logo
      $this->Image('../../assets/img/jabar.png',15,8);

    	//  bold 16
    	$this->SetFont('Times','B',16);

    	// Title
        $this->Cell(200,8,'PENGURUS RT. 001 RW. 002',0,1,'C');
        $this->Cell(200,8,'DESA. TALUN, KEC. IBUN',0,1,'C');
    	$this->Cell(200,8,'KABUPATEN BANDUNG',0,1,'C');
    	// Line break
    	$this->Ln(5);

        $this->SetFont('Times','BU',14);
        for ($i=0; $i < 10; $i++) {
            $this->Cell(189,0,'',1,1,'C');
        }

        $this->Ln(1);

        $this->Cell(200,8,'DATA WARGA MUTASI',0,1,'C');
        $this->Ln(2);

        $this->SetFont('Times','B',9.5);
    }

}

// ambil dari url
$get_id_mutasi = $_GET['id_mutasi'];
// ambil dari database
$query = "SELECT * FROM mutasi WHERE id_mutasi = $get_id_mutasi";
$hasil = mysqli_query($db, $query);
$data_mutasi = array();
while ($row = mysqli_fetch_assoc($hasil)) {
  $data_mutasi[] = $row;
}

$pdf = new PDF('P', 'mm', [210, 297]);
$pdf->AliasNbPages();
$pdf->AddPage();


// set font
$pdf->SetFont('Times','',12);

// set penomoran
$nomor = 1;
    $pdf->cell(45,7,'NIK',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, strtoupper($data_mutasi[0]['nik_mutasi']), 0, 1, 'L');

    $pdf->cell(45,7,'Nama',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_mutasi[0]['nama_mutasi']),0 , 17), 0, 1, 'L');

    $pdf->cell(45,7,'Tempat Lahir',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, strtoupper($data_mutasi[0]['tempat_lahir_mutasi']), 0, 1, 'L');

    $pdf->cell(45,7,'Tanggal Lahir',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, ($data_mutasi[0]['tanggal_lahir_mutasi'] != '0000-00-00') ? date('d-m-Y', strtotime($data_mutasi[0]['tanggal_lahir_mutasi'])) : '', 0, 1, 'L');

    $pdf->cell(45,7,'Jenis Kelamin',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, strtoupper($data_mutasi[0]['jenis_kelamin_mutasi']), 0, 1, 'L');

    $pdf->cell(45,7,'Desa/Kelurahan',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_mutasi[0]['desa_kelurahan_mutasi']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Kecamatan',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_mutasi[0]['kecamatan_mutasi']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Kabupaten/Kota',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_mutasi[0]['kabupaten_kota_mutasi']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Provinsi',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_mutasi[0]['provinsi_mutasi']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Negara',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_mutasi[0]['negara_mutasi']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'RT',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(7, 7, strtoupper($data_mutasi[0]['rt_mutasi']), 0, 1, 'L');

    $pdf->cell(45,7,'RW',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(7, 7, strtoupper($data_mutasi[0]['rw_mutasi']), 0, 1, 'L');

    $pdf->cell(45,7,'Agama',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(20, 7, strtoupper($data_mutasi[0]['agama_mutasi']), 0, 1, 'L');

    $pdf->cell(45,7,'Pendidikan',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(16, 7, strtoupper($data_mutasi[0]['pendidikan_terakhir_mutasi']), 0, 1, 'L');

    $pdf->cell(45,7,'Pekerjaan',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(20, 7, strtoupper($data_mutasi[0]['pekerjaan_mutasi']), 0, 1, 'L');

    $pdf->cell(45,7,'Kawin/Tidak Kawin',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(26, 7, strtoupper($data_mutasi[0]['status_perkawinan_mutasi']), 0, 1, 'L');

    $pdf->cell(45,7,'Status Kependudukan',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(24, 7, strtoupper($data_mutasi[0]['status_mutasi']), 0, 1, 'L');

    $pdf->cell(45,7,'Riwayat Hidup',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(24, 7, strtoupper($data_mutasi[0]['riwayat_mutasi']), 0, 1, 'L');

	$pdf->Ln(10);

$pdf->Output();
?>
