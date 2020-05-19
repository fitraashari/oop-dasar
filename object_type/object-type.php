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

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
        return $str;
    }
}
$produk1 = new Produk("Boku No Hero", "Paijo", "Shonen Jump", 100000);

$produk2 = new Produk("Final Fantasy XV", "Tukiman", "Square Enix", 1000000);

$produk3 = new Produk("Tahi Lalat","Paijo","Tisera");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
$info_produk1 = new CetakInfoProduk();
echo $info_produk1->cetak($produk1);

?>