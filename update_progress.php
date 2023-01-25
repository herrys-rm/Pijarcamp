<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

// update data ke database
mysqli_query($koneksi, "update produk set nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
