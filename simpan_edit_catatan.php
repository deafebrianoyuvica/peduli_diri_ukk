<?php 

$id_catatan = $_POST['id_catatan'];
$tanggal = $_POST['tanggal'];
$waktu   = $_POST['waktu'];
$lokasi  = $_POST['lokasi'];
$suhu    = $_POST['suhu'];

include'koneksi.php';
$sql = "UPDATE catatan SET tanggal='$tanggal',waktu='$waktu',lokasi='$lokasi',suhu='$suhu' WHERE id_catatan='$id_catatan'";
$query = mysqli_query($koneksi, $sql);

if ($query) { ?>
	<script>
		alert("Data Catatan Sudah Terubah");
		window.location.assign("Dashboard.php?page=riwayat_perjalanan");
	</script>
	<?php
}else{ ?>
	<script>
		alert("Data Catatan Tidak Terubah!");
		window.location.assign("simpan_catatan.php?page=riwayat_perjalanan");
	</script>
	<?php
 
 }
 ?>

