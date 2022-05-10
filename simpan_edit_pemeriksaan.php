<?php 

$id_catatan = $_POST['id_pemeriksaan'];
$tanggal = $_POST['tanggal_pemeriksaan'];
$lokasi  = $_POST['lokasi_pemeriksaan'];
$hasil    = $_POST['hasil'];

include'koneksi.php';
$sql = "UPDATE pemeriksaan SET tanggal_pemeriksaan='$tanggal_pemeriksaan',lokasi_pemeriksaan='$lokasi_pemeriksaan',hasil='$hasil' WHERE id_pemeriksaan='$id_pemeriksaan'";
$query = mysqli_query($koneksi, $sql);

if ($query) { ?>
	<script>
		alert("Data Catatan Sudah Terubah");
		window.location.assign("Dashboard.php?page=hasil_pemeriksaan");
	</script>
	<?php
}else{ ?>
	<script>
		alert("Data Catatan Tidak Terubah!");
		window.location.assign("simpan_pemeriksaan.php?page=hasil_pemeriksaan");
	</script>
	<?php
 
 }
 ?>

