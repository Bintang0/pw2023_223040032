<?php

$computer = ['Motheroard', 'Processor', 'Hard disk', 'PC Coller', 'VGA Card', 'SSD'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>

<body>

    <h2>Macam-macam perangkat keras komputer</h2>

    <ol>
        <?php foreach ($computer as $c) { ?>
            <li><?= $c; ?> </li>
        <?php } ?>
    </ol>

    <h2>Macam-macam perangkat keras komputer baru</h2>
    <ol>
        <?php
        array_unshift($computer, "Card Reader", "Modem");
        sort($computer);
        foreach ($computer as $c) { ?>
            <li><?= $c; ?></li>

        <?php } ?>
    </ol>
</body>

</html>