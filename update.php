<?php
include "koneksi.php";

$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM produk WHERE id=$id");

while ($r = mysqli_fetch_array($result)) {
    $nama_produk = $r['nama_produk'];
    $keterangan = $r['keterangan'];
    $harga = $r['harga'];
    $jumlah = $r['jumlah'];
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pijar Camp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col text-center border-bottom border-2">
                <h1>CRUD SEDERHANA</h1>
            </div>
        </div>
        <div class="row my-5 justify-content-center">
            <div class="col">
                <form method="POST" action="update_progress.php">
                    <div class="row">
                        <div class="col">
                            <input type="text" hidden name="id" class="form-control" value="<?php echo $id; ?>">
                            <input type="text" name="nama_produk" class="form-control" value="<?php echo $nama_produk; ?>">
                        </div>
                        <div class="col">
                            <input type="text" name='keterangan' class="form-control" value="<?php echo $keterangan; ?>">
                        </div>
                        <div class="col">
                            <input type="text" name="harga" class="form-control" value="<?php echo $harga; ?>">
                        </div>
                        <div class="col">
                            <input type="text" name="jumlah" class="form-control" value="<?php echo $jumlah; ?>">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>