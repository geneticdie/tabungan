<?php
session_start();
$id_siswa = $_POST['id_siswa'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

$query = "insert INTO siswa SET
								id_siswa = '$id_siswa',
								nama = '$nama',
								kelas = '$kelas',
								jenis_kelamin = '$jenis_kelamin',
								alamat = '$alamat',
								telepon = '$telepon'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
echo "<script>alert('Data Berhasil Dimasukkan');history.go(-2);</script>";

?>

