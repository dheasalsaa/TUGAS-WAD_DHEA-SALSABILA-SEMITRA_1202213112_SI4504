<?php
require 'function.php';
$barang = query("SELECT * FROM barang_elektronik")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ELECTRONIC STORE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body class="p-3 m-0 border-0 bd-example m-0 border-0", style="background-color : aliceblue;">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tambah.php">Add Item</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>

        <h1 style="text-align: center;">Daftar Barang Toko Electronic Store D</h1> 
        <br>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No. </th>
                <th>Edit</th>
                <th>Picture</th>
                <th>Product Name</th>
                <th>Product Code</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
            <?php $i = 1;
            foreach ($barang as $row) : ?> 
            
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="ubah.php?no=<?= $row['no']; ?>">Ubah</a>
                    <a href="hapus.php?no= <?= $row["no"];?>" onclick="return confirm('Yakin dihapus nih?');">Hapus</a>
                </td>
                <td><img src="img/<?= $row['gambar']; ?>" width="50"></td>
                <td><?= $row["namabarang"]; ?></td>
                <td><?= $row["kodebarang"]; ?></td>
                <td><?= $row["hargajual"]; ?></td>
                <td><?= $row["stokbarang"]; ?></td>
            </tr>
            <?php 
            $i++; 
            endforeach;
            ?>
        </table>
    </body>
</html>