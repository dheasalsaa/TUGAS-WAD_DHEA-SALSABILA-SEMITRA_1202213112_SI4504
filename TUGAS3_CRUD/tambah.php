<?php
require 'function.php';

if (isset($_POST["submit"])){   
    if (tambah($_POST)> 0){
        echo "
            <script>
            alert('Sukses!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Coba lagi masih gagal!');
        document.location.href = 'index.php';
        </script>
        ";
    }
};

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data Barang Toko Elektronik Saya</title>
    </head>
    <body style="background-color: aliceblue;">
        <h1 style="text-align: center;">Tambah Data Barang Toko Elektronik</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="kodebarang">Kode Barang</label>
                    <input type="text" name="kodebarang" id="kodebarang">
                </li>
                <br>

                <li>
                    <label for="namabarang">Nama Barang</label>
                    <input type="text" name="namabarang" id="namabarang">
                </li>
                <br>

                <li>
                    <label for="hargajual">Harga Barang</label>
                    <input type="text" name="hargajual" id="hargajual">
                </li>
                <br>

                <li>
                    <label for="stokbarang">Stok Barang</label>
                    <input type="text" name="stokbarang" id="stokbarang">
                </li>
                <br>

                <li>
                    <label for="gambarbarang">Gambar Barang</label>
                    <input type="text" name="gambarbarang" id="gambarbarang">
                </li>
                <br>
                
                <li>
                    <button type="submit" name="submit">Ubah Data</button>
                </li>
            </ul>
        </form>
    </body>
</html>
