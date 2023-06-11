<?php
require('functions.php');
$name = 'Home';

$student = query("SELECT * FROM mahasiswa");


require('views/index.view.php');
