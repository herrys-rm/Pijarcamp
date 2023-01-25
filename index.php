<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pijar Camp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!-- Style CS -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col text-center border-bottom border-2">
                <h1>CRUD SEDERHANA</h1>
            </div>
        </div>
        <div class="row my-5 justify-content-center">
            <div class="col-10">
                <form method="POST" action="create.php">
                    <div class="row">
                        <div class="col-2">
                            <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" required>
                        </div>
                        <div class="col-3">
                            <input type="text" name='keterangan' class="form-control" placeholder="Keterangan" required>
                        </div>
                        <div class="col-2">
                            <input type="text" name="harga" class="form-control" placeholder="Harga" required>
                        </div>
                        <div class="col-2">
                            <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" required>
                        </div>
                        <div class="col-1">
                            <button type="submit" name="progress" class="btn btn-primary">Tambah</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col-2">Action</th>
                        </tr>
                    </thead>

                    <?php
                    include "koneksi.php";
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from produk");
                    while ($r = mysqli_fetch_array($data)) {
                        $id = $r['id'];
                        $nama_produk = $r['nama_produk'];
                        $keterangan = $r['keterangan'];
                        $harga = $r['harga'];
                        $jumlah = $r['jumlah'];
                    ?>

                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $no++; ?></th>
                                <td><?php echo $nama_produk; ?></td>
                                <td><?php echo $keterangan; ?></td>
                                <td><?php echo $harga; ?></td>
                                <td><?php echo $jumlah; ?></td>
                                <td><a class="btn btn-primary" href="update.php?id=<?php echo $id; ?>"><i class="bi bi-pencil-square"'></i></a></td>
                                <td><a class="btn btn-danger" href="delete.php?id=<?php echo $id; ?>"><i class="bi bi-x-square"></i></a></td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>