<?php
require '../koneksi.php';
if(isset($_POST['tambah'])){
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	
	$insert = mysqli_query($koneksi,"insert into data_siswa values(null,'$nis','$nama','$jk','$kelas','$alamat')");
	
	if($insert){
		echo "<script>alert('berhasil');window.location.href='lihat.php';</script>";
	}else{
		echo "<script>alert('Gagal');window.location.href='lihat.php';</script>";
	}
}elseif(isset($_POST['edit'])){
	$id = $_POST['id'];
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];

	$update = mysqli_query($koneksi,"update data_siswa set nis='$nis', nama='$nama', jk='$jk', kelas='$kelas', alamat='$alamat' where id_siswa=$id");

	if($update){
		echo "<script>alert('berhasil');window.location.href='lihat.php';</script>";
	}else{
		echo "<script>alert('Gagal');window.location.href='lihat.php';</script>";
	}
}elseif(isset($_POST['hapus'])){
	$id = $_POST['id'];

	$delete = mysqli_query($koneksi,"delete from data_siswa where id_siswa =$id");

	if($delete){
		echo "<script>alert('berhasil');window.location.href='lihat.php';</script>";
	}else{
		echo "<script>alert('Gagal');window.location.href='lihat.php';</script>";
	}
}else{
	header('location:lihat.php');
}

?>