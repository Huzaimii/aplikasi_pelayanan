<?php



require('../fpdf/fpdf.php');


class PDF extends FPDF
{
	function Header()
	{
		$this->Image('../img/logo.png',20,8,17);

		$this->setfont('Arial','B',12);
		$this->cell(120);

		$this->cell(120,5,'Pemerintah Provinsi Kalimantan Selatan',0,1,'C');
		$this->cell(120);

		$this->cell(120,5,'Dinas Komunikasi Dan Informatika',0,1,'C');
		$this->cell(120);
		$this->setfont('Arial','',11);
		$this->cell(120,5,'Jl. Pangeran Suriansyah no.5 Loktabat Utara, Banjarbaru Utara Kota Banjarbaru,70711 Kalimantan Selatan',0,1,'C');
		$this->cell(120);
		$this->cell(120,5,' Website : www.dishut.kalselprov.go.id Kotak POS 1030 Kode pos.70714',0,1,'C');

		$this->setlinewidth(1);
		$this->line (10,35,345,34);
		$this->setlinewidth(0);
		$this->line(10,36,345,35);

		$this->Ln(6);

	}

	function Footer()
	{
		$this->SetY(15);

		$this->setfont('Arial','I',8);

		$this->cell(0,10,'Halaman'.$this->PageNo().'/ {nb}',0,0,'R');
	}

	function ttd(){
		$this->Ln(2);
		$this->setfont('Arial','',12);
		$this->cell(190);
		$this->cell(190,5,'BANJARBARU,'.tgl_indo(date('Y-m-d')),0,1,'C');
		$this->cell(190);
		$this->cell(190,5,'Mengetahui',0,1,'C');
		$this->cell(190);
		$this->cell(190,5,'Kepala Dinas',0,1,'C');
		$this->Ln(16);
		$this->cell(190);
		$this->setfont('Arial','U',12);
		$this->cell(190,5,'Iwan Hermansyah,S.Hut,MM',0,1,'C');
		$this->cell(190);
		$this->setfont('Arial','',12);
		$this->cell(190,5,'NIP. 19710209 199803 1 004',0,1,'C');


	}
}
	$pdf = new PDF('L','mm','Legal');
	$pdf ->AddPage();
	$pdf ->setfont('Times','B',14);
	$pdf ->cell(120);
	$pdf ->cell(110,9,'LAPORAN BARANG MASUK',0,1,'C');
	$pdf ->Ln(4);
	
	
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

$pdf->SetFillColor(24,224,23);
$pdf->setfont('Arial','B',12);
$pdf->cell(10,10,'NO',1,0,'C',0);
$pdf->cell(60,10,'Nama barang',1,0,'C',0);
$pdf->cell(60,10,'Kategori barang',1,0,'C',0);
$pdf->cell(40,10,'Satuan',1,0,'C',0);
$pdf->cell(20,10,'Jumlah',1,0,'C',0);
$pdf->cell(50,10,'Tanggal Masuk',1,0,'C',0);
$pdf->cell(50,10,'Penanggung jawab',1,0,'C',0);
$pdf->cell(50,10,'Catatan Barang',1,1,'C',0);


$pdf->setfont('Arial','',10);

include '../conf/koneksi.php';
$i=1;

     
                       $sql=mysqli_query($koneksi,"SELECT * FROM t_barangmasuk INNER JOIN t_karyawan ON t_barangmasuk.nip=t_karyawan.nip");
                        while ( $data = mysqli_fetch_array($sql)) {

                 

  	$pdf->setfont('Arial','',12);
  	$pdf->cell(10,10,$i,1,0,'C',0);
  	$pdf->cell(60,10,$data['nama_barang'],1,0,'L',0);
  	$pdf->cell(60,10,$data['kategori_barang'],1,0,'L',0);
  	$pdf->cell(40,10,$data['satuan'],1,0,'L',0);
  	$pdf->cell(20,10,$data['jumlah'],1,0,'L',0);
  	$pdf->cell(50,10,$data['tanggal_masuk'],1,0,'L',0);
  	$pdf->cell(50,10,$data['nama_karyawan'],1,0,'L',0);
  	$pdf->cell(50,10,$data['catatan_barangmasuk'],1,1,'L',0);
  

  	$i++;
  
    }

  
    
    $pdf->Ln(6);
    $pdf->ttd();
    $pdf->Output();




?>