<?php

$angka = 5;

// Memeriksa apakah $angka itu bilangan GANJIL
// Bilangan yang jika dibagi 2 sisanya 1

function cekGanjilGenap($angka)
{
    if ($angka % 2 == 1) {
        return "$angka adalah bilangan GANJIL!";
    } else {
        return "$angka adalah bilangan GENAP";
    }
}

echo cekGanjilGenap(999);
echo "<br>";
echo cekGanjilGenap(10);
echo "<br>";
echo cekGanjilGenap(101);
