<div class="card">

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Tambah Pemeriksaan</h1>
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
	<div class="card-body">
		<form method="post" action="simpan_pemeriksaan.php">
			<div class="form-group">
				<label>Tanggal Pemeriksaan</label>
				<input name="tanggal_pemeriksaan" class="form-control" type="date" placeholder="Pilih Tanggal" required>
			</div>
			<div class="form-group">
				<label>Lokasi Pemeriksaan</label>
				<input name="lokasi_pemeriksaan" class="form-control" type="text" placeholder="Masukkan Lokasi" required>
			</div>
			<div class="form-group">
				<label>Hasil</label>
				<select class="form-select" name="hasil">
						<option value="">--- Choose ---</option>
						<option value="Positif">Positif</option>
						<option value="Negatif">Negatif</option>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
				<button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> Kosongkan</button>
			</div>
		</form>
	</div>
</div>