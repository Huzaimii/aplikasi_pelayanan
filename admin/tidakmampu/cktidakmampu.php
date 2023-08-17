<?php



require('../fpdf/fpdf.php');


class PDF extends FPDF
{
	function Header()
	{
		

	}

	function Footer()
	{
		$this->SetY(2);

		$this->setfont('Arial','I',8);

		$this->cell(0,2,'Halaman'.$this->PageNo().'/ {nb}',0,0,'R');
	}

	function ttd(){
		


	}
}
	$pdf = new PDF('P','cm','Legal');
	$pdf ->AddPage();
	

function hari ($hariInggris) {
  switch ($hariInggris) {
    case 'Sunday':
      return 'Minggu';
    case 'Monday':
      return 'Senin';
    case 'Tuesday':
      return 'Selasa';
    case 'Wednesday':
      return 'Rabu';
    case 'Thursday':
      return 'Kamis';
    case 'Friday':
      return 'Jumat';
    case 'Saturday':
      return 'Sabtu';
    default:
      return 'hari tidak valid';
  }
}


	
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


include '../conf/koneksi.php';

  $id_tidak_mampu = $_GET ['id_tidak_mampu'];
                 $sql = mysqli_query($koneksi,"SELECT * FROM t_tidak_mampu
                          JOIN t_penduduk USING(nik)
                 	 WHERE id_tidak_mampu='$id_tidak_mampu'");
                   /* Mengkoneksikan Data*/ 
                  while ( $data = mysqli_fetch_array($sql)) { /* Menampilkan Data Data*/ 


$pdf->SetTitle('Surat Tidak Mampu');
	
	$pdf->Image('../img/logo12.png', 1,1,3,2);

	$pdf->Setfont("Arial", "B", "15");
	$pdf->Cell(20, 1, "PEMERINTAH KABUPATEN BANJAR", 0,1, "C");
	$pdf->Setfont("Arial", "B", "13");	
	$pdf->Cell(20, 0.3, "KECAMATAN MATARAMAN", 0,1, "C");
	$pdf->Setfont("Arial", "", "10");	
	$pdf->Cell(20, 0.7, "Alamat : Desa Tanah Abang Rt 0002 Rw 001 Kec. Mataraman Kab. Banjar", 0,1, "C");
	$pdf->Cell(20, 0.3, "Kode pos.70672", 0,1, "C");
	$pdf->line(1,3.5,21,3.5); //membuat garis line (x1,y1,x2,y2);
	$pdf->ln(0.5); //fungsi ln sama seperti <br>



$pdf->Setfont("Arial", "B", "13");
	$pdf->cell(20,0.7,'SURAT KETERANGAN TIDAK MAMPU',0,1,'C');

	$pdf->Setfont("Arial", "", "10");
	$pdf->cell(20,0.27,'NOMOR :' .$data['id_tidak_mampu']. '/TDM/2023',0,1,'C');


	$pdf->ln(0.5); //fungsi ln sama seperti <br>


	$pdf->Cell(5, 0.4, 'Yang bertanda tangan dibawah ini Pambakal Desa Tanah Abang Kecamatan Mataraman menerangkan bahwa:', 3, 1, '');


$pdf->Cell(1, 0, '', 0, 0, '');
	$pdf->Cell(5, 1, 'Nama', 0, 0, '');
	$pdf->Cell(2, 1, ': '.$data['nama'].'', 0, 1, '');
	$pdf->Cell(1, 0, '', 0, 0, '');
	$pdf->Cell(5, 0, 'Tempat,Tgl Lahir', 0, 0, '');
	$pdf->Cell(2, 0, ': '.$data['tempat_tgl'].'', 0, 1, '');
	$pdf->Cell(1, 0, '', 0, 0, '');


	$pdf->Cell(5, 1, 'Jenis Kelamin', 0, 0, '');
	$pdf->Cell(2, 1, ': '.$data['jenis_kelamin'].'', 0, 1, '');
	$pdf->Cell(1, 0, '', 0, 0, '');
 $pdf->Cell(5, 0, 'Status Perkawinan', 0, 0, '');
	$pdf->Cell(2, 0, ': '.$data['status_kawin'].'', 0, 1, '');
	$pdf->Cell(1, 0, '', 0, 0, '');
	$pdf->Cell(5, 1, 'Alamat', 0, 0, '');
	$pdf->Cell(2, 1, ': '.$data['alamat_p'].'', 0, 1, '');
	$pdf->Cell(1, 0, '', 0, 0, '');

	$pdf->ln(0.9);




	$pdf->ln(0.5); //fungsi ln sama seperti <br>

	$pdf->Cell(5, 0.4, 'Nama tersebut di atas adalah benar warga desa Tanah Abang, kecamatan Mataraman, Kabupaten Banjar,', 3, 1, '');
	$pdf->Cell(5, 0.4, 'Berdasarkan Keterangan yang ada pada kami benar bahwa yang bersangkutan tergolong keluarga yang tidak mampu.', 3, 1, '');
	$pdf->Cell(5, 0.5, 'Surat Keterangan ini di buat untuk '.$data['keperluan']. '.', 3, 1, '');
	$pdf->Cell(5, 0.7, 'Demikian surat keterangan ini dibuat,atas perhatiannya dan kerja samanya,kami sampaikan terima kasih.', 0, 1, '');
			$pdf->Setfont("AriaL", "I", "10");	

	$pdf->Cell(5, 0.7, 'Wassamualaikum wr.wb.', 0, 1, '');


		$pdf->Cell(1, 1, '', 0, 0, 'C');	
		$pdf->Setfont("Arial", "", "10");	

			$pdf->Setfont("Arial", "", "10");	
	$pdf->ln(2);
	$pdf->cell(30,0.7,'Mataraman,'.tgl_indo(date('Y-m-d')),0,1,'C');
	$pdf->Cell(30, 0.7, "PAMBAKAL", 0,1, "C");
	$pdf->Cell(30, 0.3, "Tanah Abang", 0,1, "C");
	$pdf->ln(2);
	$pdf->Cell(30, 0.7, "MUHAMMAD ALIMUDDIN.A.Md.", 0,1, "C");


  

  
    }

  
    
  $pdf->ln(0.5);
    $pdf->ttd();
    $pdf->Output();




?>