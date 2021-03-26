<?php 
require_once 'koneksi.php';
//memulai session
session_start();

$id	= $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
// perintah sql untuk memasukan data
$sql = "UPDATE tb_tamu set nama_tamu ='$nama', email_tamu ='$email', pesan_tamu='$pesan' WHERE id_tamu='$id'";

 //eksekusi perintah

if ($koneksi->query($sql) === true) {
	//nama session
	$_SESSION['update_status'] = 1;
	$_SESSION['update_message'] = '<strong>Selamat</strong> Data berhasil diupdate';
	header("location:hal_buku_tamu.php");
// 	echo "<script>
// 		alert('Berhasil ter ubah');
// 		location.assign('hal_buku_tamu.php');
// 	</script>";
} else{
	$_SESSION['update_status'] = 0;
	$_SESSION['update_message'] = '<strong>Maaf</strong> Data gagal diupdate';
	header("location:hal_buku_tamu.php");
// 	echo "<script>
// 		alert('Gagal ter ubah');
// 		location.assign('hal_buku_tamu.php');
// 	</script>";
// }
}
