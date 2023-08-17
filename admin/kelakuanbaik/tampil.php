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
								<li class="breadcrumb-item active" aria-current="page">Kelakuan Baik</li>
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
				<h6 class="mb-0 text-uppercase">Data Kelakuan Baik</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										 <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Berkelakuan Baik</th>
                    <th>Pecandu Narkoba</th>
                    <th>Terlibat Pidana</th>
                    <th>Keperluan</th>
                    <th>Status</th>
                    <th>Aksi</th>
									</tr>
								</thead>
								<tbody>
                          <?php 

                        $i = 1;
                                    if ($_SESSION['level'] == "admin") {
                                        $sql = mysqli_query($koneksi, "SELECT * FROM t_kelakuan_baik JOIN t_penduduk USING (nik) ");
                                    } else if ($_SESSION['level'] == "penduduk") {
                                        $nik = $_SESSION['nik'];
                                        $sql = mysqli_query($koneksi, "SELECT * FROM t_kelakuan_baik JOIN t_penduduk USING (nik) WHERE nik='$nik'");
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
                         <td>
                           <?=$data['tanggal_pengajuan']; ?>
                         </td>
                         <td>
                           <?=$data['berkelakuan_baik']; ?>
                         </td>
                         <td>
                           <?=$data['pecandu_narkoba']; ?>
                         </td>
                         <td>
                           <?=$data['terlibat_pidana']; ?>
                         </td>
                         <td>
                           <?=$data['keperluan']; ?>
                         </td>
                        
                        <td style="color:
    <?php
        if ($data['status_pengajuan'] == 'Di Proses') {
            echo 'blue'; // Warna untuk status 'Di Proses'
        } elseif ($data['status_pengajuan'] == 'Di Terima') {
            echo 'green'; // Warna untuk status 'Di Terima'
        } elseif ($data['status_pengajuan'] == 'Di Tolak') {
            echo 'red'; // Warna untuk status 'Di Tolak'
        }
    ?>;
">
    <?=$data['status_pengajuan']; ?>
</td>
                   
                          <td class="text-right">
                            <form method="POST">
                              <input type="hidden" name="id_kelakuan_baik" value="<?=$data['id_kelakuan_baik'];?>">
                            <button name="edit" class="btn btn-link btn-warning btn-just-icon edit">Edit</button>
                            </form>
                             <form action="kelakuanbaik/proses.php" method="POST"> <!-- SEMENTARA POST -->
                             <input type="hidden" name="id_kelakuan_baik" value="<?=$data['id_kelakuan_baik'];?>">
                            <button name="hapus" onclick="return confirm('Anda yakin ingin menghapus')" class="btn btn-link btn-danger btn-just-icon remove">Hapus</button>
                           </form>


                      
                    </div>
                    <div class="btn-group">
                    <form method="POST">
                     
                         <a href="kelakuanbaik/ckkelakuanbaik.php?id_kelakuan_baik=<?=$data['id_kelakuan_baik'];?>" class="btn btn-sm btn-info"><i class="fa fa-print"></i></a>
                    </form>
                          </td>
                         </tr>
                      
                            <?php 
                          $i++; /* perulangan dari 1 2 3 */

                        }

                           ?>
                        
                      
                      </tbody>

                      </table>
            
              </table>
            </div>
          </div>
        </div>
      </div>

