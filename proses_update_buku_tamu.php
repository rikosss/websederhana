<?php 
require_once 'koneksi.php';

$id	= $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
// perintah sql untuk memasukan data
$sql = "UPDATE tb_tamu set nama_tamu ='$nama', email_tamu ='$email', pesan_tamu='$pesan' where id_tamu='$id'";

 //eksekusi perintah
 // $koneksi->query($sql);
if ($koneksi->query($sql) === true) {
	echo "<script>
		alert('Berhasil ter ubah');
		location.assign('hal_buku_tamu.php');
	</script>";
} else{
	echo "<script>
		alert('Gagal ter ubah');
		location.assign('hal_buku_tamu.php');
	</script>";
}

 ?>


