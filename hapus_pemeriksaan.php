<?php 

$id_pemeriksaan = $_GET['id_pemeriksaan'];


include'koneksi.php';
$sql = "DELETE FROM pemeriksaan WHERE id_pemeriksaan='$id_pemeriksaan'";
$query = mysqli_query($koneksi, $sql);

if ($query) { ?>
	<script>
		alert("Data pemeriksaan Sudah Terhapus");
		window.location.assign("Dashboard.php?page=hasil_pemeriksaan");
	</script>
	<?php
}else{ ?>
	<script>
		alert("Data pemeriksaan Tidak Terhapus!");
		window.location.assign("simpan_pemeriksaan.php?page=hasil_pemeriksaan");
	</script>
	<?php
 
 }
 ?>

