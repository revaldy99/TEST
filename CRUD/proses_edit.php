
<?php
	include "koneksi.php";
	$id=$_POST['id'];
	$nama_produk = $_POST['nama_produk'];
	$keterangan = $_POST['keterangan'];
	$harga = $_POST['harga'];
	$modal=mysqli_query($koneksi,"UPDATE produk SET nama_produk = '$nama_produk',keterangan = '$keterangan',harga = '$harga' WHERE id = '$id'");
	header('location:index.php');
?>