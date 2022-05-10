<?php 

$id_pemeriksaan = $_GET['id_pemeriksaan'];
include'koneksi.php';
$sql = "SELECT*FROM pemeriksaan WHERE id_pemeriksaan='$id_pemeriksaan'";
$query = mysqli_query($koneksi, $sql);
$value = mysqli_fetch_array($query);
?>

<div class="card">
	<div class="card-header">
		<a href="Dashboard.php" class="btn btn-primary btn-icon-split">
           	<span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
	</div>
	<div class="card-body">
		<form method="post" action="simpan_edit_pemeriksaan.php">
			<input type="hidden" name="id_pemeriksaan" value="<?= $id_pemeriksaan ?>">
			<div class="form-group">
				<label>Tanggal Pemeriksaan</label>
				<input value="<?= $value['tanggal_pemeriksaan'] ?>" name="tanggal_pemeriksaan" class="form-control" type="date" placeholder="Pilih Tanggal" required>
			</div>
			<div class="form-group">
				<label>Lokasi Pemeriksaan</label>
				<input value="<?= $value['lokasi_pemeriksaan'] ?>" name="lokasi_pemeriksaan" class="form-control" type="text" placeholder="Pilih" required>
			</div>
			<div class="form-group">
				<label>Hasil</label>
				<select class="form-select" name="hasil">
						<option value="">--- Choose ---</option>
						<option value="<?= $value['hasil'] ?>">Positif</option>
						<option value="<?= $value['hasil'] ?>">Negatif</option>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
				<button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> Kosongkan</button>
			</div>
		</form>
	</div>
</div>