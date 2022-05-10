<?php 

session_start();
$id_user = $_SESSION['nik'];
$tanggal_pemeriksaan = $_POST['tanggal_pemeriksaan'];
$lokasi_pemeriksaan  = $_POST['lokasi_pemeriksaan'];
$hasil   = $_POST['hasil'];

include'koneksi.php';
$sql = "INSERT INTO pemeriksaan(id_user,tanggal_pemeriksaan,lokasi_pemeriksaan,hasil) VALUES('$id_user','$tanggal_pemeriksaan','$lokasi_pemeriksaan','$hasil')";
$query = mysqli_query($koneksi, $sql);

if ($query) { ?>
	<script>
		alert("Data Catatan Sudah Tersimpan");
		window.location.assign("Dashboard.php?page=hasil_pemeriksaan");
	</script>
	<?php
}else{ ?>
	<script>
		alert("Data Catatan Tidak Tersimpan!");
		window.location.assign("simpan_pemeriksaan.php?url=tambah_pemeriksaan");
	</script>
	<?php
 
 }
 ?>

