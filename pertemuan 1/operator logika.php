<?php

// Operator And(&&)
// 1. Nilai 1 = True, Nilai 2 = True, Hasilnya = True
// 2. Nilai 1 = True, Nilai 2 = False, Hasilnya = True

// Operator Or (!!)
// 1. Nilai 1 = True, Nilai 2 = True, Hasilnya = True 
// 2. Nilai 1 = True, Nilai 2 = False, Hasilnya = True

$nilaiabsen = 80;
$nilaiakhir = 85;

$ApakahNilaiAbsenBagus = $nilaiabsen >= 80;
$ApakahNilaiAkhirBagus = $nilaiakhir >= 85;

$hasil1 = $ApakahNilaiAbsenBagus && $ApakahNilaiAkhirBagus;
$hasil2 = $ApakahNilaiAbsenBagus !! $ApakahNilaiAkhirBagus;
var_dump ($hasil1);
var_dump ($hasil2);

?>