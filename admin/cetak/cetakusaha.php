<?php
include '../conf/koneksi.php';

?>
<style>
    table {
        font-size: 14px;

    }

    table,
    th,
    td {
        border-collapse: collapse;
    }

    thead {
        font-size: 16px;
    }

    .judul h3,
    h2,
    p {
        text-align: center;
        margin: 5px 0 5px 0;
    }

    .form-inline img {

        display: inline-block;
    }

    h2 {
        font-size: 30px;
    }

    .kop tr td {
        text-align: center;
        border: 2px solid white;
        border-collapse: collapse;
    }

    .gambar {
        margin-right: 10px;
    }

    .isi tr td {
        padding-left: 5px;
        padding-right: 5px;
    }

    .ttd {
        text-align: center;
        display: inline-block;

    }
</style>

<script>
    window.load = print_d();

    function print_d() {
        window.print();
    }
    window.onfocus = function() {
        window.close();
    }
</script>

<title>Data Usaha</title>

<div class="container-fluid">
    <center>
        <table class="kop">
            <tr>
                <td rowspan="5"><img src="../img/logo12.png" height="130" alt="" class="gambar"></td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold;">KANTOR DESA TANAH ABANG KECAMATAN MATARAMAN</td>
            </tr>
            <tr>
                <td style="font-size: 25px; font-weight: bold;">KANTOR DESA TANAH ABANG</td>
            </tr>
            <tr>
                <td style="font-size: 15px;">Desa Tanah Abang Rt 0002 Rw 001 Kec. Mataraman Kab. Banjar</td>
            </tr>
            <tr>
                <td style="font-size: 15px;">Kode Pos : 70672</td>
            </tr>
        </table>
    </center>

    <hr size="2px" color="black" style="margin-bottom: 1px;">
    <hr size="2px" color="black" style="margin-top: 1px;">
    <center>
        <table class="kop">
            <td style="font-size: 30px; font-weight: bold;">Data Usaha</td>
        </table>
    </center>
    <hr size="2px" color="black" style="margin-top: 1px;">
    <div>
        <table class="isi" style="width:100%;" border="1">
  <thead>
                                    <tr>
                                        <tr>
                   <th>No</th>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Nama usaha</th>
                    <th>Jenis usaha</th>
                    <th>Mulai usaha</th>
                    <th>Alamat Usaha</th>
                    <th>Tujuan</th>
                  </tr>
                </thead>
                <tbody>
                        <?php 

                        $i=1; /* membuat start perulangan dari 1 */

                       $sql = mysqli_query($koneksi,"SELECT * FROM t_usaha
                          JOIN t_penduduk USING(nik)
                          ");
                        while ( $data = mysqli_fetch_array($sql)) {  #menampilkan data

                         ?>
                         <TR>

                        <td>
                           <?=$i;?> <!--  memanggil -->
                         </td>
                         <td>
                           <?=$data['nik']; ?>
                         </td>
                         <td>
                           <?=$data['nama']; ?>
                         </td>
                         <td>
                           <?=$data['tanggal_pengajuan']; ?>
                         </td>
                         <td>
                           <?=$data['nama_usaha']; ?>
                         </td>
                         <td>
                           <?=$data['jenis_usaha']; ?>
                         </td>
                         <td>
                           <?=$data['mulai_usaha']; ?>
                         </td>
                         <td>
                           <?=$data['alamat_usaha']; ?>
                         </td>
                         <td>
                           <?=$data['keperluan']; ?>
                         </td>
                   





                         
                         </tr>
                      
                            <?php 
                          $i++; /* perulangan dari 1 2 3 */

                        }

                           ?>
                        
                      
                      </tbody>
        </table>
        <br>
        <br>
        <br>
        <br>
        <table width="100%" align="right">
            <tr>
                <th widht="20%"></th>
                <th widht="20%"></th>
                <th widht="20%"></th>
            </tr>
            <tr>
                <th colspan="5" width="60%" align="center"></th>
                <th colspan="1" width="40%" align="center">TANAH ABANG, <?= date('d/m/Y'); ?></th>
            </tr>
            <tr>
                <th colspan="5" width="60%" align="center"></th>
                <th colspan="1" width="40%" align="center">Kepala Kantor Desa Tanah Abang</th>
            </tr>
            <tr>
                <th colspan="5" width="60%" align="center"></th>
                <th colspan="1" width="40%" align="center">Kecamatan Mataraman</th>
            </tr>
            <tr>
                <th colspan="5" width="60%" align="center"></th>
                <th colspan="5" width="40%" align="center">&nbsp;</th>
            </tr>
            <tr>
                <th colspan="5" width="60%" align="center"></th>
                <th colspan="5" width="40%" align="center">&nbsp;</th>
            </tr>
            <tr>
                <th colspan="5" width="60%" align="center"></th>
                <th colspan="5" width="40%" align="center">&nbsp;</th>
            </tr>
            <tr>
                <th colspan="5" width="60%" align="center"></th>
                <th colspan="5" width="40%" align="center">&nbsp;</th>
            </tr>
            <tr>
                <th colspan="5" width="60%" align="center"></th>
                <th colspan="5" width="40%" align="center">&nbsp;</th>
            </tr>
            <tr>
                <th colspan="5" width="60%" align="center"></th>
                <th colspan="5" width="40%" align="center"><u>MUHAMMAD ALIMUDDIN.A.Md.</u></th>
            </tr>
        </table>
    </div>
</div>