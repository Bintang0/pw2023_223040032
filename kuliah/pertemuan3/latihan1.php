<?php

//pengulangan while
//1. Inisialisasi / nilai awal
//2. Kondisi teminasi / kapan pengulangannya berhenti
//3. Increment / Decrement

$nilai_awal = 10;
while ($nilai_awal >= 1) {
    echo "Hello World $nilai_awal x<br>";
    $nilai_awal--;
}

//for
for ($nilai_awal = 1; $nilai_awal <= 10; $nilai_awal++) {
    echo "Hello World $nilai_awal x<br>";
}
