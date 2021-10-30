<?php
// buat class handphone
class handphone {
  
   // buat property untuk class handhphone
   var $pemilik;
   var $merk;
   var $ukuran_layar;
  
   // buat method untuk class handphone
   function hidupkan_handphone() {
     return "Hidupkan handphone";
    }
   function matikan_handphone() {
     return "Matikan handphone";
   }
}
  
// buat objek dari class handhphone (instansiasi)
$handphone_hanif = new handphone();
  
// set property
$handphone_hanif->pemilik="Hanif Zakiy R";
$handphone_hanif->merk="Xiaomi Redmi Note 7";
$handphone_hanif->ukuran_layar="6,3 inchi";
  
// tampilkan property
echo $handphone_hanif->pemilik;
echo "<br />";
echo $handphone_hanif->merk;
echo "<br />";
echo $handphone_hanif->ukuran_layar;
echo "<br />";
  
// tampilkan method
echo $handphone_hanif->hidupkan_handphone();
echo "<br />";
echo $handphone_hanif->matikan_handphone();
?>
