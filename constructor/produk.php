<?php

class Produk{
    public $judul, $penulis, $penerbit, $harga;

    public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}
$produk1 = new Produk("Boku No Hero", "Paijo", "Shonen Jump", 100000);

$produk2 = new Produk("Final Fantasy XV", "Tukiman", "Square Enix", 1000000);

$produk3 = new Produk("Tahi Lalat","Paijo","Tisera");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
?>