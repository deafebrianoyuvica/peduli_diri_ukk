<?php 

session_start();
$id_user = $_SESSION['nik'];
$tanggal = $_POST['tanggal'];
$waktu   = $_POST['waktu'];
$lokasi  = $_POST['lokasi'];
$suhu    = $_POST['suhu'];

include'koneksi.php';
$sql = "INSERT INTO catatan(id_user,tanggal,waktu,lokasi,suhu) VALUES('$id_user','$tanggal','$waktu','$lokasi','$suhu')";
$query = mysqli_query($koneksi, $sql);

if ($query) { ?>
	<script>
		alert("Data Catatan Sudah Tersimpan");
		window.location.assign("Dashboard.php?page=riwayat_perjalanan");
	</script>
	<?php
}else{ ?>
	<script>
		alert("Data Catatan Tidak Tersimpan!");
		window.location.assign("simpan_catatan.php?url=tulis_catatan");
	</script>
	<?php
 
 }
 ?>

