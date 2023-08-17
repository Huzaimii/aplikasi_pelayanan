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
								<li class="breadcrumb-item active" aria-current="page">Kematian</li>
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
				<h6 class="mb-0 text-uppercase">Data Kematian</h6> 
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										 <th>No</th>
                    <th>Nama Yang Mengajukan</th>
                    <th>Nama</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Hari</th>
                    <th>Pukul</th>
                    <th>Sebab Meninggal</th>
                    <th>Meninggal di?</th>
                    <th>Di Makamkan</th>
                    <th>Tanggal Konfirmasi Meninggal</th>
                    <th>Status Pengajuan</th>
                    <th>Aksi</th>
									</tr>
								 </thead>
                <tbody>

                        <?php 

                        $i=1; /* membuat start perulangan dari 1 */

                       $sql = mysqli_query($koneksi,"SELECT * FROM t_kematian
                                                JOIN t_penduduk USING(nik)
                                                JOIN t_kk USING(id_kartukeluarga)

                                                                                             " );
                        while ( $data = mysqli_fetch_array($sql)) {  #menampilkan data

                         ?>
                         <tr>

                        <td>
                           <?=$i;?> <!--  memanggil -->
                         </td>
                         <td>
                           <?=$data['nama']; ?>
                         </td>
                         <td>
                           <?=$data['nama_kk']; ?>
                         </td>
                         <td>
                           <?=$data['tgl_pengajuan']; ?>
                         </td>
                         <td>
                           <?=$data['hari']; ?>
                         </td>
                         <td>
                           <?=$data['pukul']; ?>
                         </td>
                         <td>
                           <?=$data['sebab_meninggal']; ?>
                         </td>
                         <td>
                           <?=$data['meninggal_di']; ?>
                         </td>
                         <td>
                           <?=$data['dimakamkan']; ?>
                         </td>
                         <td>
                           <?=$data['tgl_meninggal']; ?>
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
                              <input type="hidden" name="id_kematian" value="<?=$data['id_kematian'];?>">
                            <button name="edit" class="btn btn-link btn-warning btn-just-icon edit">Edit</button>
                            </form>
                             <form action="kematian/proses.php" method="POST"> <!-- SEMENTARA POST -->
                             <input type="hidden" name="id_kematian" value="<?=$data['id_kematian'];?>">
                            <button name="hapus" onclick="return confirm('Anda yakin ingin menghapus')" class="btn btn-link btn-danger btn-just-icon remove">Hapus</button>
                           </form>


                      
                    </div>
                    <div class="btn-group">
                    <form method="POST">
                     
                         <a href="kematian/ckkematian.php?id_kematian=<?=$data['id_kematian'];?>" class="btn btn-sm btn-info"><i class="fa fa-print"></i></a>
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
