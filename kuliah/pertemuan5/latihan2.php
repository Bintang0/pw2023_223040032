<?php
$binatang = ['🐣', '🐬', '🕊️', '🦢', '🐳'];
$makanan = ['🍜', '🍫', '🍛', '🍉', '🍒']
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebun Binatang</title>
</head>

<body>
    <h1>AKU PUNYA 50 JUTA POWER </h1>
    <br>
    <h2>Daftar Binatang</h2>

    <ul>
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <li><?= $binatang[$i]; ?></li>
        <?php } ?>
    </ul>
    <h2>Daftar Makanan</h2>
    <ul>
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <li><?= $makanan[$i]; ?></li>
        <?php } ?>
    </ul>


    <h2>Daftar Binatang</h2>
    <ol>
        <?php foreach ($binatang as $babi) { ?>
            <li><?= $babi; ?></li>
        <?php } ?>
    </ol>



</body>

</html>