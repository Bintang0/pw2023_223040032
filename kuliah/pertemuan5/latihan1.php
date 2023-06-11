<?php

//array
//membuat array
$hari = array('senin', 'selasa', 'rabu');
$bulan = ['januari', 'februari', 'maret'];
$myArray = ['bintang', 39, false];
$binatang = ['🐣', '🐬', '🕊️', '🦢', '🐳'];

//mencetak array
echo $hari[1]; // 1 elemen menggunakan indexnya
echo "<hr>";
var_dump($hari);
print_r($bulan);
echo "<hr>";
var_dump($myArray);
echo "<hr>";

//manipulasi array
// menggunakan index
$hari[] = 'kamis';
$hari[] = "jum'at";
print_r($hari);
echo "<hr>";
//menambah elemen di akhir menggunakan array_push()
array_push($bulan, 'april');
print_r($bulan);
echo "<hr>";
//m
array_unshift($binatang,'🐣');
print_r($binatang);
echo "<hr>";

//m
array_pop($hari);
print_r($hari);
echo "<hr>";
//m
array_shift($hari);
print_r($hari);

