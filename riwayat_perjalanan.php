<div class="card">

     <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Riwayat Perjalanan</h1>
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
        </a>
	</div>
	<div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Lokasi</th>
                                            <th>Suhu</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        include'koneksi.php';
                                        $sql = "SELECT*FROM catatan WHERE id_user ='$_SESSION[nik]'";
                                        $query = mysqli_query($koneksi, $sql);
                                        foreach ($query as $value) {
                                        
                                         ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['tanggal']?></td>
                                            <td><?= $value['waktu']?></td>
                                            <td><?= $value['lokasi']?></td>
                                            <td><?= $value['suhu']?></td>
                                            <td>
                                                <a href="?page=edit_catatan&id_catatan=<?= $value['id_catatan']?>" class="btn btn-info">
                                                    <i class="fa fa-pencil"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')" href="hapus_catatan.php?id_catatan=<?= $value['id_catatan'] ?>" class="btn btn-danger">
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