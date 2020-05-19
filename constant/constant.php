<?php
// //global tidak bisa di dlm class
// define ('NAMA', 'Fitra');
// echo NAMA;
// echo "<br>";
// //bisa di dalam class
// const UMUR = 24;
// echo UMUR;
// class Coba{
//     const NAMA = 'Fitra';
// }
// echo Coba::NAMA;

//------Magic Constant--------
// echo __FILE__;

// function coba(){
//     return __FUNCTION__;

// }
// echo coba();

class Coba{
    public $kelas=__CLASS__;

}
$obj = new Coba;
echo $obj->kelas;
?>