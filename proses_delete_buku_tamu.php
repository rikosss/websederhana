<?php 
require_once 'koneksi.php';

$id = $_GET['idTamu'];

// perintah sql untuk memasukan data
$sql = "DELETE FROM tb_tamu WHERE id_tamu='$id'";

 //eksekusi perintah
 // $koneksi->query($sql);
if ($koneksi->query($sql) === true) {
	echo "<script>
		alert('Berhasil Terhapus');
		location.assign('hal_buku_tamu.php');
	</script>";
} else{
	echo "<script>
		alert('Gagal Terhapus');
		location.assign('hal_buku_tamu.php');
	</script>";
}

 ?>


