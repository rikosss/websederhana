<?php 
require_once 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
// perintah sql untuk memasukan data
$sql = "INSERT INTO tb_tamu values('','$nama','$email','$pesan')";

 //eksekusi perintah
 // $koneksi->query($sql);
if ($koneksi->query($sql) === true) {
	echo "<script>
		alert('Berhasil Tersimpan');
		location.assign('hal_buku_tamu.php');
	</script>";
} else{
	echo "<script>
		alert('Gagal Tersimpan');
		location.assign('hal_buku_tamu.php');
	</script>";
}

 ?>


