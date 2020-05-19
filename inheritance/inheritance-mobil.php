<?php
class Mobil{
    public $nama, $merk, $warna,
            $kecepatanMaksimal,
            $jumlahPenumpang;
    public function tambahKecepatan(){
        return "Kecepatan Berambah";
    }
}
class MobilSport extends Mobil{
    public $turbo = false;

    public function jalankanTurbo(){
        $this->turbo = true;
        return "Turbo Dijalankan!";
    }
}
$mobil = new MobilSport();
echo $mobil->tambahKecepatan();
echo "<br>";
echo $mobil->jalankanTurbo();
?>