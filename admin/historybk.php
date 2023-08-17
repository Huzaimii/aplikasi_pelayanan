

<?php 

include'conf/koneksi.php';
include'conf/head.php';

 ?>

<body>
  <!--wrapper-->
  <div class="wrapper">
    <!--sidebar wrapper -->
    <?php   

    include'conf/sidebar.php';

     ?>
    <!--end sidebar wrapper -->
    <!--start header -->
    <?php   

    include'conf/header.php';

     ?>
    <!--end header -->
    <!--start page wrapper -->
    <div class="page-wrapper">
      
    </div>
<?php 

include'conf/footer.php';

 ?>

<?php 
?>

<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3"></div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Data Barang Keluar</li>
              </ol>
            </nav>
          </div>
          <div class="ms-auto">
            <div class="btn-group">
                    <form method="POST">

            </form>
              
              
            </div>
          </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">History Barang Keluar</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Tanggal Dan Waktu</th>

                    <th>Jumlah Barang Keluar</th>
                  </tr>
                </thead>
                <tbody>
                        <?php 

                        $i=1; /* membuat start perulangan dari 1 */

                       $sql = mysqli_query($koneksi,"SELECT * FROM t_barangkeluar
                          JOIN t_peralatan USING(kode_barang)
                          ");
                        while ( $data = mysqli_fetch_array($sql)) {  #menampilkan data

                         ?>
                         <TR>

                        <td>
                           <?=$i;?> <!--  memanggil -->
                         </td>
                         <td>
                           <?=$data['nama_peralatan']; ?>
                         </td>
                         <td>
                           <?=$data['tgl']; ?>
                         </td>  <td>
                           <?=$data['jumlah_keluar']; ?>
                         </td>
                       
                   
                      
                         </tr>
                      
                            <?php 
                          $i++; /* perulangan dari 1 2 3 */

                        }

                           ?>
                        
                      
                      </tbody>
                
              </table>
            </div>
          </div>
        </div>
      </div>

