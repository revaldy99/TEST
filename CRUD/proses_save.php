
<?php
include "koneksi.php";
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
mysqli_query($koneksi,"INSERT INTO produk (nama_produk,keterangan) VALUES ('$nama_produk','$keterangan')");
header('location:index.php');
?>