<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Forms</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Data Penduduk</li>
              </ol>
            </nav>
          </div>
                  <?php 
                    $nik = $_POST['nik'];
                    $sql = mysqli_query($koneksi,"SELECT * FROM t_penduduk WHERE nik='$nik'");
                     while ($data = mysqli_fetch_array($sql)) {
                   ?>
        </div>
        <!--end breadcrumb-->
        
        <!--end row-->
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Edit Data</h6>
            <hr/>
            <div class="card border-top border-0 border-4 border-info">
              <div class="card-body">
                <div class="border p-4 rounded">
                  <div class="card-title d-flex align-items-center">
                    <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                    </div>
                    <h5 class="mb-0 text-info">Admin</h5>
                  </div>
                  <hr/>
                  <form method="POST" action="penduduk/proses.php">
                <div class="card-body ">
                    <div class="form-group">
                      <label for="exampleEmail" class="bmd-label-floating">nik</label>
                      <input name="nik" type="text" class="form-control" id="exampleEmail" value="<?=$data['nik'];?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleEmail" class="bmd-label-floating">No KK</label>
                      <input name="no_kk" type="text" class="form-control" id="exampleEmail" value="<?=$data['no_kk'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleEmail" class="bmd-label-floating">Nama</label>
                      <input name="nama" type="text" class="form-control" id="exampleEmail" value="<?=$data['nama'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleEmail" class="bmd-label-floating">Tempat,Tanggal Lahir</label>
                      <input name="tempat_tgl" type="text" class="form-control" id="exampleEmail" value="<?=$data['tempat_tgl'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleEmail" class="bmd-label-floating">Jenis Kelamin</label>
                      <input name="jenis_kelamin" type="text" class="form-control" id="exampleEmail" value="<?=$data['jenis_kelamin'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleEmail" class="bmd-label-floating">Status kawin</label>
                      <input name="status_kawin" type="text" class="form-control" id="exampleEmail" value="<?=$data['status_kawin'];?>">
                       </div>
                    <div class="form-group">
                      <label for="exampleEmail" class="bmd-label-floating">No Hp</label>
                      <input name="no_hp" type="text" class="form-control" id="exampleEmail" value="<?=$data['pekerjaan'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleEmail" class="bmd-label-floating">Pekerjaan</label>
                      <input name="pekerjaan" type="text" class="form-control" id="exampleEmail" value="<?=$data['pekerjaan'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleEmail" class="bmd-label-floating">Email</label>
                      <input name="email_p" type="text" class="form-control" id="exampleEmail" value="<?=$data['email_p'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleEmail" class="bmd-label-floating">Alamat</label>
                      <input name="alamat_p" type="text" class="form-control" id="exampleEmail" value="<?=$data['alamat_p'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleEmail" class="bmd-label-floating">Username</label>
                      <input name="username" type="text" class="form-control" id="exampleEmail" value="<?=$data['alamat_p'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleEmail" class="bmd-label-floating">Password</label>
                      <input name="password" type="text" class="form-control" id="exampleEmail" value="<?=$data['alamat_p'];?>">
                    </div>
                </div>
              
                  <div class="row">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                      <button name ="edit" type="submit" class="btn btn-sm btn-info">edit</button>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php 
}

         ?>
      </div>
    </div>