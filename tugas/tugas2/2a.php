<?php

$bintang = "Bintang";
$arya = "Arya";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 and $i % 5 == 0) {
        echo $bintang . " " . $arya . "<br>";
    } elseif ($i % 3 == 0) {
        echo $bintang . "<br>";
    } elseif ($i % 5 == 0) {
        echo $arya . "<br>";
    } else {
        echo $i . "<br>";
    }
}
