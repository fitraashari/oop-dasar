<?php

class Produk{
    public $judul, 
    $penulis, 
    $penerbit, 
    $harga,
    $jmlHalaman,
    $waktuMain;

    public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0,$jmlHalaman=0,$waktuMain=0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        
    }


    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
    }
}
class Komik extends Produk{
    public function getInfoKomik(){
        $str = "Komik : {$this->getInfoProduk()} - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
class Game extends Produk{
    public function getinfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }
}
class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
        return $str;
    }
}
$produk1 = new Komik("Boku No Hero", "Paijo", "Shonen Jump", 100000, 100, 0);

$produk2 = new Game("Final Fantasy XV", "Tukiman", "Square Enix", 1000000, 0, 50);

// $produk3 = new Produk("Tahi Lalat","Paijo","Tisera");
echo $produk1->getInfoKomik();
echo "<br>";
echo $produk2->getInfoProduk();
// // Komik : Paijo, Shonen Jump
// // Game : Tukiman, Square Enix
// // Boku No Hero | Paijo, Shonen Jump | (Rp. 100000)

// Komik: Naruto | Masashi Kishimoto, Shonen Jump (Rp. 100000) - 100 Halaman.
// Game: Final Fantasy | Paijo, Sony (ep. 300000) - 50 Jam
?>