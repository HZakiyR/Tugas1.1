<?php

 include "MatakuliahA.php";

 $datanya = new MataKuliah(1830511031, "Hanif zakiy r", 88);

 //echo "<h1>Matukuliahnya</h1>";
 echo "NIM : " .$datanya->nim;
 echo "<br />";
 echo "Nama : " .$datanya->nama;
 echo "<br />";

 $datanya->Matkul("PBO", "Agung Pambudi");
 echo "Matakuliah : " .$datanya->matakuliah;
 echo "<br />";
 echo "Dosen : " .$datanya->dosen;
 echo "<br />";
 echo "Nilai : " .$datanya->nilai;
 echo "<br />";
 echo "Grade : " .$datanya->Grade();
 echo "<br />";
 echo "Status : " .$datanya->StatusNilai();
 echo "<br />";

?>