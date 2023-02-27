<style>
    .nomer {
        background-color: pink;
        width: 30px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        border: 1px solid black;
        display: inline-block;
    }
</style>





<?php

$pola1 = "1";
$pola2 = "10";

for ($i = $pola2; $i >= $pola1; $i--) {
    for ($b = 1; $b <= $i; $b++) {
        echo "<div class= 'nomer'>$b</div>";
    }
    echo "<br>";
}


?>