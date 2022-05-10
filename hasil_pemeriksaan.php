<div class="card">

     <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Hasil Pemeriksaan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

	<div class="card-header">
		<a href="Dashboard.php" class="btn btn-primary btn-icon-split">
           	<span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
            <a href="?page=tambah_pemeriksaan" class="btn btn-info mx-3">
                        <i class="fa fa-pencil"></i> Tambah
                    </a>
        </a>
	</div>
	<div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Lokasi Pemeriksaan</th>
                                            <th>Hasil</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        include'koneksi.php';
                                        $sql = "SELECT*FROM pemeriksaan WHERE id_user ='$_SESSION[nik]'";
                                        $query = mysqli_query($koneksi, $sql);
                                        foreach ($query as $value) {
                                        
                                         ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['tanggal_pemeriksaan']?></td>
                                            <td><?= $value['lokasi_pemeriksaan']?></td>
                                            <td><span class="badge bg-primary"><?= $value['hasil']?></span></td>
                                            <td>
                                                <a href="?page=edit_pemeriksaan&id_pemeriksaan=<?= $value['id_pemeriksaan']?>" class="btn btn-info">
                                                    <i class="fa fa-pencil"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')" href="hapus_pemeriksaan.php?id_pemeriksaan=<?= $value['id_pemeriksaan'] ?>" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> Hapus
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                  </table>
              </div>
              <!-- /.card-body -->
            </div>