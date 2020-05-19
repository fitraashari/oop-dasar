<?php
require_once 'App/init.php';

$produk1 = new Komik("Boku No Hero", "Paijo", "Shonen Jump", 100000, 100);

$produk2 = new Game("Final Fantasy XV", "Tukiman", "Square Enix", 1000000, 50);
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
echo "<hr>";
$coba = new Coba();