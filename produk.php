<?php require 'customer.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Produk</title>
</head>
<style>
    * {
        font-family : sans-serif;
    }
</style>
<body>
    
    <h1>Data Customer</h1>

    <form method="POST" action="">
    <label for="nama">Nama barang : </label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="alamat">Alamat Pesanan</label>
        <input type="text" id ="alamat" name="alamat" required><br><br>

        <label for="harga">Harga barang : </label>
        <input type="number" id="harga" name="harga" required><br><br>

        <label for="stok">Stok Awal : </label>
        <input type="number" id="stok" name="stok" required><br><br>

        <label for="pembelian">Jumlah Pembelian : </label>
        <input type="number" id="pembelian" name="pembelian" required><br><br>

        <input type="submit" value="Pesan Sekarang">
    </form>

    <?php if ($namaProduk !== ''):?>
        <h2>Nama barang : <?php echo $namaProduk; ?></h2>
    <?php endif;?>

    <?php if ($alamatCustomer !== ''):?>
        <h2>Nama barang : <?php echo $alamatCustomer; ?></h2>
    <?php endif;?>


    <?php if ($Stokakhir !== null):?>
        <h2>Stok Akhir : <?php echo $Stokakhir; ?></h2>
    <?php endif;?>

</body>
</html>