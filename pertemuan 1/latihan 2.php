<?php

$nilaiHarian = 68;
$nilaiUts = 80;
$nilaiAkhir = 80;

$apakahnilaiHarianbagus = $nilaiHarian >= 70;
$apakahnilaiUtsbagus = $nilaiUts >= 80;
$apakahnilaiAkhirbagus = $nilaiAkhir >= 80;

$hasil1 = $apakahnilaiHarianbagus && $apakahnilaiUtsbagus && $apakahnilaiAkhirbagus;
$hasil2 = $apakahnilaiHarianbagus || $apakahnilaiUtsbagus || $apakahnilaiAkhirbagus;
var_dump($hasil1);
// hasilnya false karena logika and jika satu nilainya di bawah atau tidak sesuai maka hasilnya akan false
echo"<br/>";
var_dump($hasil2);
// hasilnya true karena logika or jika nilainya satu saja benar maka nilainya true walaupun ada yang salah
?>