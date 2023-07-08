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

    	// bold 16
    	$this->SetFont('Times','B',16);
    	// Title
        $this->Cell(435,8,'PENGURUS RT. 001 RW. 002',0,1,'C');
        $this->Cell(435,8,'DESA. TALU, KEC. IBUN',0,1,'C');
    	$this->Cell(435,8,'KABUPATEN BANDUNG',0,1,'C');
    	// Line break
    	$this->Ln(5);

        $this->SetFont('Times','BU',14);
        for ($i=0; $i < 10; $i++) {
            $this->Cell(435,0,'',1,1,'C');
        }

        $this->Ln(1);

        $this->Cell(435,8,'DATA WARGA MUTASI',0,1,'C');
        $this->Ln(2);

        $this->SetFont('Times','B',10);

        // header tabel
        $this->cell(10,7,'NO.',1,0,'C');
        $this->cell(30,7,'NIK',1,0,'C');
        $this->cell(60,7,'NAMA',1,0,'C');
        $this->cell(40,7,'TEMPAT LAHIR',1,0,'C');
        $this->cell(25,7,'TGL. LAHIR',1,0,'C');
        $this->cell(40,7,'JENIS KELAMIN',1,0,'C');
        $this->cell(20,7,'UMUR',1,0,'C');
        $this->cell(10,7,'RT',1,0,'C');
        $this->cell(10,7,'RW',1,0,'C');
        $this->cell(25,7,'AGAMA',1,0,'C');
        $this->cell(30,7,'PERNIKAHAN',1,0,'C');
        $this->cell(30,7,'PENDIDIKAN',1,0,'C');
        $this->cell(45,7,'PEKERJAAN',1,0,'C');
        $this->cell(25,7,'STATUS',1,0,'C');
        $this->cell(35,7,'RIWAYAT',1,1,'C');

    }

}

// ambil dari database
$query = "SELECT *, TIMESTAMPDIFF(YEAR, `tanggal_lahir_mutasi`, CURDATE()) AS usia_mutasi FROM mutasi";
$hasil = mysqli_query($db, $query);
$data_mutasi = array();
while ($row = mysqli_fetch_assoc($hasil)) {
  $data_mutasi[] = $row;
}


$pdf = new PDF('L', 'mm', [453, 200]);
$pdf->AliasNbPages();
$pdf->AddPage();

// set font
$pdf->SetFont('Times','',8);

// set penomoran
$nomor = 1;

foreach ($data_mutasi as $mutasi) {
    $pdf->cell(10, 7, $nomor++ . '.', 1, 0, 'C');
    $pdf->cell(30, 7, strtoupper($mutasi['nik_mutasi']), 1, 0, 'C');
    $pdf->cell(60, 7, substr(strtoupper($mutasi['nama_mutasi']),0 , 17), 1, 0, 'L');
    $pdf->cell(40, 7, strtoupper($mutasi['tempat_lahir_mutasi']), 1, 0, 'L');
    $pdf->cell(25, 7, ($mutasi['tanggal_lahir_mutasi'] != '0000-00-00') ? date('d-m-Y', strtotime($mutasi['tanggal_lahir_mutasi'])) : '', 1, 0, 'C');
    $pdf->cell(40, 7, strtoupper($mutasi['jenis_kelamin_mutasi']), 1, 0, 'C');
    $pdf->cell(20, 7, strtoupper($mutasi['usia_mutasi']), 1, 0, 'C');
    $pdf->cell(10, 7, strtoupper($mutasi['rt_mutasi']), 1, 0, 'C');
    $pdf->cell(10, 7, strtoupper($mutasi['rw_mutasi']), 1, 0, 'C');
    $pdf->cell(25, 7, strtoupper($mutasi['agama_mutasi']), 1, 0, 'C');
    $pdf->cell(30, 7, strtoupper($mutasi['status_perkawinan_mutasi']), 1, 0, 'C');
    $pdf->cell(30, 7, strtoupper($mutasi['pendidikan_terakhir_mutasi']), 1, 0, 'C');
    $pdf->cell(45, 7, strtoupper($mutasi['pekerjaan_mutasi']), 1, 0, 'C');
    $pdf->cell(25, 7, strtoupper($mutasi['status_mutasi']), 1, 0, 'C');
    $pdf->cell(35, 7, strtoupper($mutasi['riwayat_mutasi']), 1, 1, 'C');
}

	$pdf->Ln(10);

$pdf->Output();
?>
