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
                <li class="breadcrumb-item active" aria-current="page">Lampiran</li>
              </ol>
            </nav>
          </div>
          <div class="ms-auto">
            <div class="btn-group">
                    <form method="POST">

              <button name="tambah" type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
              
              
            </div>
          </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Data Lampuran</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                     <th>No</th>
                    <th>Nama</th>
                    <th>Lampiran KTP</th>
                    <th>LAMPIRAN KK</th>
                    <th>Aksi</th> 
                  </tr>
                 </thead>
                <tbody>
                        <?php 

                         $i = 1;
                                    if ($_SESSION['level'] == "admin") {
                                        $sql = mysqli_query($koneksi, "SELECT * FROM t_lampiran JOIN t_penduduk USING (nik) ");
                                    } else if ($_SESSION['level'] == "penduduk") {
                                        $nik = $_SESSION['nik'];
                                        $sql = mysqli_query($koneksi, "SELECT * FROM t_lampiran JOIN t_penduduk USING (nik) WHERE nik='$nik'");
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
                           <?=$data['nama']; ?>
                         </td>
                           <td align="center"><a target="blank" href="lampiran/berkas/<?=$data['foto1']?>"><?php echo "<img src='lampiran/berkas/$data[foto1]' width='200' height='90' />";?></td>
                        <td align="center"><a target="blank" href="lampiran/berkas/<?=$data['foto2']?>"><?php echo "<img src='lampiran/berkas/$data[foto2]' width='200' height='90' />";?></td>


                         <td class="text-right">
                            <form method="POST">
                              <input type="hidden" name="id_lampiran" value="<?=$data['id_lampiran'];?>">
                            <button name="edit" class="btn btn-link btn-warning btn-just-icon edit"><i class="fadeIn animated bx bx-message-square-edit"></i></button>
                            </form>
                             <form action="lampiran/proses.php" method="POST"> <!-- SEMENTARA POST -->
                             <input type="hidden" name="id_lampiran" value="<?=$data['id_lampiran'];?>">
                            <button name="hapus" onclick="return confirm('Anda yakin ingin menghapus')" class="btn btn-link btn-info btn-just-icon remove"><i class="fadeIn animated bx bx-message-square-x"></i></button>
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

