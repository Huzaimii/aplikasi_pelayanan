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

<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Tables</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Data Table</li>
              </ol>
            </nav>
          </div>
         <div class="ms-auto">
            <div class="btn-group">
                    <form action="cetak/cetakpenduduk.php">

              <button name="tambah" type="submit" class="btn btn-primary">cetak</button>
            </form>
              
              
            </div>
          </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                 <th>No</th>
                          <th>Nik</th>
                          <th>No KK</th>
                          <th>Nama</th>
                          <th>Tempat,Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Status Kawin</th>
                          <th>Pekerjaan</th>
                          <th>No Telpon</th>
                          <th>Email</th>
                          <th>Alamat</th>
                  </tr>
                </thead>
                <tbody>
                        <?php 

                        $i=1; /* membuat start perulangan dari 1 */

                        $sql=mysqli_query($koneksi,"SELECT * FROM t_penduduk");
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
                           <?=$data['no_kk']; ?>
                         </td>
                         <td>
                           <?=$data['nama']; ?>
                         </td>
                         <td>
                           <?=$data['tempat_tgl']; ?>
                         </td>
                          <td>
                           <?=$data['jenis_kelamin']; ?>
                         </td>
                          <td>
                           <?=$data['status_kawin']; ?>
                         </td>
                          <td>
                           <?=$data['pekerjaan']; ?>
                         </td>
                          <td>
                           <?=$data['no_hp']; ?>
                         </td>
                          <td>
                           <?=$data['email_p']; ?>
                         </td>
                          <td>
                           <?=$data['alamat_p']; ?>
                         </td>
                   





                      
                      
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

