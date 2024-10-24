<?php
class Produk {
    public $namaProduk;
    public $alamatCustomer;
    public $jenisProduk;
    public $stok;
    public $pembelian;
    public $harga;

    //Constructor untuk inisialisasi properties/atribut
    public function __construct ($namaProduk = '', $alamatCustomer='',  $jenisProduk = '', $stok = 0, $pembelian = 0, $harga = 0) {
        $this->namaProduk = $namaProduk;
        $this->alamatCustomer = $alamatCustomer;
        $this->jenisProduk = $jenisProduk;
        $this->stok = $stok;
        $this->pembelian = $pembelian;
        $this->harga = $harga;
    }

    public function akhirnamaProduk () {
        //menghitung hasil akhir stok
        $this->namaproduk = ($this->namaProduk);
        return $this->namaProduk;
        $this->alamat = ($this->alamatCustomer);
        return $this->alamatCustomer;
    }

    public function stokAkhirProduk () {
        //menghitung hasil akhir stok
        $this->stok = ($this->stok - $this->pembelian);
        return $this->stok;
    }
    
}

$alamatCustomer = '';
$namaProduk = '';
$Stokakhir = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $panggilProduk = new Produk ();
    $panggilProduk -> stok = intval($_POST['stok']);
    $panggilProduk -> pembelian = intval($_POST['pembelian']);

    //perhitungan akhir sebuah produk
    $Stokakhir = $panggilProduk->stokAkhirProduk();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Membentuk instance/objek baru dari class produk
    $panggilProduk = new Produk ();
    $panggilProduk -> namaProduk = ($_POST['nama']);
    $panggilProduk -> alamatCustomer = ($_POST['alamat']);

    //perhitungan akhir sebuah produk
    $namaProduk = $panggilProduk->akhirnamaProduk();
}
}
?>