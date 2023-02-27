<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 2d</title>

    <style>
        .padding13 {
            line-height: 10px !important;
        }

        .box747 {
            width: 50px;
            height: 50px;
            display: inline-block;
            border: 1px solid black;



        }

        .black {
            background-color: black;

        }

        .white {
            background-color: white;


        }
    </style>
</head>

<body>
    <div class="padding13">
        <?php
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                if (($i + $j) % 2 == 0) {
                    echo "<div class='box747 black'></div>";
                } else {
                    echo "<div class='box747 white'></div>";
                }
            }
            echo "<br>";
        }
        ?>
    </div>
</body>

</html>