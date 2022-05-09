<?php 

$id_catatan = $_GET['id_catatan'];
include'koneksi.php';
$sql = "SELECT*FROM catatan WHERE id_catatan='$id_catatan'";
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
		<form method="post" action="simpan_edit_catatan.php">
			<input type="hidden" name="id_catatan" value="<?= $id_catatan ?>">
			<div class="form-group">
				<label>Tanggal Perjalanan</label>
				<input value="<?= $value['tanggal'] ?>" name="tanggal" class="form-control" type="date" placeholder="Pilih Tanggal" required>
			</div>
			<div class="form-group">
				<label>Waktu Perjalanan</label>
				<input value="<?= $value['waktu'] ?>" name="waktu" class="form-control" type="time" placeholder="Pilih Waktu" required>
			</div>
			<div class="form-group">
				<label>Lokasi Perjalanan</label>
				<input value="<?= $value['lokasi'] ?>" name="lokasi" class="form-control" type="text" placeholder="Masukkan Lokasi" required>
			</div>
			<div class="form-group">
				<label>Suhu</label>
				<input value="<?= $value['suhu'] ?>" name="suhu" class="form-control" type="text" placeholder="Masukkan Suhu Tubuh" required>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
				<button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> Kosongkan</button>
			</div>
		</form>
	</div>
</div>