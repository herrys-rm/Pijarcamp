<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['progress'])) {
        $nama_barang = $_POST['nama_produk'];
        $keterangan_barang = $_POST['keterangan'];
        $harga_barang = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        // include database connection file
        include "koneksi.php";

        // Insert user data into table
        $tambah_barang = "insert into produk values('','$nama_barang','$keterangan_barang','$harga_barang','$jumlah')";
        $kerjakan = mysqli_query($koneksi, $tambah_barang);
        if ($kerjakan) {
            // Show message when user added
            // echo "Data berhasil ditambahkan. <a href='index.php'>Lihat Data Barang</a>";
            header("location:index.php");
        } else {
            echo "Gagal bro";
        }
    }
    ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>