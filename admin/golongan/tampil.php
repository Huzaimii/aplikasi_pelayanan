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
								<li class="breadcrumb-item active" aria-current="page">Golongan</li>
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
				<h6 class="mb-0 text-uppercase">Data Golongan</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>nama golongan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
                        <?php 

                        $i=1; /* membuat start perulangan dari 1 */

                        $sql=mysqli_query($koneksi,"SELECT * FROM t_golongan");
                        while ( $data = mysqli_fetch_array($sql)) {  #menampilkan data

                         ?>
                         <TR>

                        <td>
                           <?=$i;?> <!--  memanggil -->
                         </td>
                         <td>
                           <?=$data['nama_golongan']; ?>
                         </td>
                   
                          <td class="text-right">
                            <form method="POST">
                              <input type="hidden" name="id_golongan" value="<?=$data['id_golongan'];?>">
                            <button name="edit" class="btn btn-link btn-warning btn-just-icon edit">Edit</button>
                            </form>
                             <form action="golongan/proses.php" method="POST"> <!-- SEMENTARA POST -->
                             <input type="hidden" name="id_golongan" value="<?=$data['id_golongan'];?>">
                            <button name="hapus" onclick="return confirm('Anda yakin ingin menghapus')" class="btn btn-link btn-danger btn-just-icon remove">Hapus</button>
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

