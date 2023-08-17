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
                <li class="breadcrumb-item active" aria-current="page">Kartu Keluarga</li>
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
        <h6 class="mb-0 text-uppercase">Data Keluarga</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                          <th>Nama Pendaftar</th>
                          <th>Nama</th>
                          <th>Nik</th>
                          <th>Jenis Kelamin</th>
                          <th>Tempat,Tanggal Lahir</th>
                          <th>Agama</th>
                          <th>Pendidikan</th>
                          <th>Pekerjaan</th>
                          <th>Golongan Darah</th>
                          <th>Status Perkawinan</th>
                          <th>Tanggal Perkawinan</th>
                          <th>Status Hubungan dalam keluarga</th>
                          <th>Kewarganegaraan</th>
                          <th>Alamat</th>
                   <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                        <?php 

                        
                       $i = 1;
                                    if ($_SESSION['level'] == "admin") {
                                        $sql = mysqli_query($koneksi, "SELECT * FROM t_kk JOIN t_penduduk USING (nik) ");
                                    } else if ($_SESSION['level'] == "penduduk") {
                                        $nik = $_SESSION['nik'];
                                        $sql = mysqli_query($koneksi, "SELECT * FROM t_kk JOIN t_penduduk USING (nik) WHERE nik='$nik'");
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
                           <?=$data['nama_kk']; ?>
                         </td>
                         <td>
                           <?=$data['nik_kk']; ?>
                         </td>
                         <td>
                           <?=$data['jenis_kel_kk']; ?>
                         </td>
                         <td>
                           <?=$data['tgl_kk']; ?>
                         </td>
                          <td>
                           <?=$data['agama_kk']; ?>
                         </td>
                          <td>
                           <?=$data['pendidikan_kk']; ?>
                         </td>
                          <td>
                           <?=$data['pekerjaan_kk']; ?>
                         </td>
                          <td>
                           <?=$data['goldarah_kk']; ?>
                         </td>
                          <td>
                           <?=$data['status_kawin_kk']; ?>
                         </td>
                          <td>
                           <?=$data['tgl_prkwinan_kk']; ?>
                         </td>
                          <td>
                           <?=$data['status_keluarga']; ?>
                         </td>
                          <td>
                           <?=$data['kewarganegaraan_kk']; ?>
                         </td>
                          <td>
                           <?=$data['alamat_kk']; ?>
                         </td>
                   
                          <td class="text-right">
                            <form method="POST">
                              <input type="hidden" name="id_kartukeluarga" value="<?=$data['id_kartukeluarga'];?>">
                            <button name="edit" class="btn btn-link btn-warning btn-just-icon edit"><i class="fadeIn animated bx bx-message-square-edit"></i></button>
                            </form>
                             <form action="keluarga/proses.php" method="POST"> <!-- SEMENTARA POST -->
                             <input type="hidden" name="id_kartukeluarga" value="<?=$data['id_kartukeluarga'];?>">
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

