<?php

class Produk{
    public $judul, 
    $penulis, 
    $penerbit, 
    $harga,
    $jmlHalaman,
    $waktuMain,
    $tipe;

    public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0,$jmlHalaman=0,$waktuMain=0,$tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }


    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if($this->tipe == "Komik"){
            $str .= " - {$this->jmlHalaman} Halaman.";
        }
        if($this->tipe == "Game"){
            $str .= " - {$this->waktuMain} Jam.";
        }
    return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
        return $str;
    }
}
$produk1 = new Produk("Boku No Hero", "Paijo", "Shonen Jump", 100000, 100, 0, "Komik");

$produk2 = new Produk("Final Fantasy XV", "Tukiman", "Square Enix", 1000000, 0, 50, "Game");

// $produk3 = new Produk("Tahi Lalat","Paijo","Tisera");
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
// // Komik : Paijo, Shonen Jump
// // Game : Tukiman, Square Enix
// // Boku No Hero | Paijo, Shonen Jump | (Rp. 100000)

// Komik: Naruto | Masashi Kishimoto, Shonen Jump (Rp. 100000) - 100 Halaman.
// Game: Final Fantasy | Paijo, Sony (ep. 300000) - 50 Jam
?>