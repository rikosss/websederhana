<?php 
require_once 'koneksi.php';
session_start();
$id = $_GET['idTamu'];

// perintah sql untuk memasukan data
$sql = "DELETE FROM tb_tamu WHERE id_tamu='$id'";

 //eksekusi perintah
 // $koneksi->query($sql);
 if ($koneksi->query($sql) === true) {
	//nama session
	$_SESSION['update_status'] = 1;
	$_SESSION['update_message'] = '<strong>Selamat</strong> Data berhasil dihapus';
	header("location:hal_buku_tamu.php");
// 	echo "<script>
// 		alert('Berhasil ter ubah');
// 		location.assign('hal_buku_tamu.php');
// 	</script>";
} else{
	$_SESSION['update_status'] = 0;
	$_SESSION['update_message'] = '<strong>Maaf</strong> Data gagal dihapus';
	header("location:hal_buku_tamu.php");
// 	echo "<script>
// 		alert('Gagal ter ubah');
// 		location.assign('hal_buku_tamu.php');
// 	</script>";
// }
}

 ?>


