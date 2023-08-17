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
                <li class="breadcrumb-item active" aria-current="page">Penduduk</li>
              </ol>
            </nav>
          </div>
          <div class="ms-auto">
            <div class="btn-group">
                    <form method="POST">

              <button name="tambah" type="submit" class="btn btn-primary"></button>
            </form>
              
              
            </div>
          </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Data Penduduk</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    
                          <th>Email</th>
                          <th>Alamat</th>
                          <th>Foto</th>
                   <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                        <?php 

                          $i = 1;
                                    if ($_SESSION['level'] == "admin") {
                                        $sql = mysqli_query($koneksi, "SELECT * FROM t_penduduk");
                                    } else if ($_SESSION['level'] == "penduduk") {
                                        $nik = $_SESSION['nik'];
                                        $sql = mysqli_query($koneksi, "SELECT * FROM t_penduduk WHERE nik='$nik'");
                                    } else {
                                        header('location: index.php');
                                    }
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
                        <td align="center"><a target="blank" href="penduduk/img/<?=$data['foto']?>"><?php echo "<img src='penduduk/img/$data[foto]' width='70' height='90' />";?></td>
                           <?=$data['username']; ?>
                         </td>
                          <td>
                           <?=$data['password']; ?>
                         </td>
                   
                          <td class="text-right">
                            <form method="POST">
                              <input type="hidden" name="nik" value="<?=$data['nik'];?>">
                            <button name="edit" class="btn btn-link btn-warning btn-just-icon edit"><i class="fadeIn animated bx bx-message-square-edit"></i></button>
                            </form>
                             <form action="penduduk/proses.php" method="POST"> <!-- SEMENTARA POST -->
                             <input type="hidden" name="nik" value="<?=$data['nik'];?>">
                            </form>
                          </td>
                         </TR>
                      
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

