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
        $this->Cell(200,8,'PENGURUS RT. 001 RW. 002',0,1,'C');
        $this->Cell(200,8,'DESA. TALU, KEC. IBUN',0,1,'C');
    	$this->Cell(200,8,'KABUPATEN BANDUNG',0,1,'C');
    	// Line break
    	$this->Ln(5);

        $this->SetFont('Times','BU',14);
        for ($i=0; $i < 10; $i++) {
            $this->Cell(190,0,'',1,1,'C');
        }

        $this->Ln(1);

        $this->Cell(200,8,'LAPORAN DATA KARTU KELUARGA',0,1,'C');
        $this->Ln(2);

        $this->SetFont('Times','B',10);

        // header tabel
        $this->cell(10,7,'NO.',1,0,'C');
        $this->cell(30,7,'NO. KK',1,0,'C');
        $this->cell(60,7,'NAMA KEPALA KELUARGA',1,0,'C');
        $this->cell(30,7,'NIK',1,0,'C');
        $this->cell(40,7,'JUMLAH ANGGOTA',1,0,'C');
        $this->cell(10,7,'RT',1,0,'C');
        $this->cell(10,7,'RW',1,1,'C');

    }

}

// ambil dari database
$query = "SELECT * FROM kartu_keluarga LEFT JOIN warga ON kartu_keluarga.id_kepala_keluarga = warga.id_warga";
$hasil = mysqli_query($db, $query);
$data_kartu_keluarga = array();
while ($row = mysqli_fetch_assoc($hasil)) {
  $data_kartu_keluarga[] = $row;
}

$pdf = new PDF('P', 'mm', [210, 297]);
$pdf->AliasNbPages();
$pdf->AddPage();

// set font
$pdf->SetFont('Times','',8);

// set penomoran
$nomor = 1;

foreach ($data_kartu_keluarga as $kartu_keluarga) {

    // hitung anggota
    $query_jumlah_anggota = "SELECT COUNT(*) AS total FROM warga_has_kartu_keluarga WHERE id_keluarga = ".$kartu_keluarga['id_keluarga'];
    $hasil_jumlah_anggota = mysqli_query($db, $query_jumlah_anggota);
    $jumlah_jumlah_anggota = mysqli_fetch_assoc($hasil_jumlah_anggota);

    $pdf->cell(10, 7, $nomor++ . '.', 1, 0, 'C');
    $pdf->cell(30, 7, strtoupper($kartu_keluarga['nomor_keluarga']), 1, 0, 'C');
    $pdf->cell(60, 7, strtoupper($kartu_keluarga['nama_warga']), 1, 0, 'L');
    $pdf->cell(30, 7, strtoupper($kartu_keluarga['nik_warga']), 1, 0, 'C');
    $pdf->cell(40, 7, strtoupper($jumlah_jumlah_anggota['total']), 1, 0, 'C');
    $pdf->cell(10, 7, strtoupper($kartu_keluarga['rt_keluarga']), 1, 0, 'C');
    $pdf->cell(10, 7, strtoupper($kartu_keluarga['rw_keluarga']), 1, 1, 'C');

}

	$pdf->Ln(10);

$pdf->Output();
?>
