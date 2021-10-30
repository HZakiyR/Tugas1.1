<?php

class Mahasiswa{
 public $nim;
 public $nama;
 public $nilai;

 public function __construct($nim, $nama, $nilai)
 {
  $this->nim = $nim;
  $this->nama = $nama;
  $this->nilai = $nilai;
 }

 public function NamaMhs()
 {
  return $this->nama;
 }

 public function StatusNilai()
 {
  $status = ($this->nilai >= 60)? "Lulus" : "Gagal";
  return $status;
 }

}
?>