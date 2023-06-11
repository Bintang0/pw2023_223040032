<?php
require('functions.php');


$name = 'Tambah data mahasiswa';

// Ketika tombol submit di-Klik
if(isset($_POST[""])) {
    // jalankan fungsi tambah()
   if (tambah($_POST) > 0) {
    echo "<script>
        alert('data berhasil ditambahkan!');
        document.locatiion.href = 'index.php';
    </script>"
   }
}

require('views/tambah.view.php');
