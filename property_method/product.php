<?php

class Produk{
    public $judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul="Black Clover";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul="GTA V";
// $produk2->tambahProperty="asd";
// var_dump($produk2);
$produk3 = new Produk();
$produk3->judul = "Boku no Hero";
$produk3->penulis = "Anon";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 100000;

$produk4 = new Produk();
$produk4->judul = "Death Stranding";
$produk4->penulis = "Hideo Kojima";
$produk4->penerbit = "Sony";
$produk4->harga = 1000000;


echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
?>