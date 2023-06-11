<?php
define('BASE_URL', '/pw2023_043040032/kuliah/pertemuan12/');

function koneksi() {
$conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040032') or die('KONEKSI GAGAL!');
return $conn;
}

function query($query){
$conn = koneksi();
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

return  $rows;
}
$conn = koneksi();
$nim = $data['nim'];
$nama = $data['nama'];
$email = $data['email'];
$jurusan = $data['jurusan'];
$gambar = $data['gambar'];

$query = "INSERT INTO mahasiswa VALUES (null, '$nim', '$nama', '$email', '$jurusan', 'gambar')";
function tambah($data) {
  mysqli_query($conn, $query) or die(mysqli_error($conn));
}

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  die;
  echo "</pre>";
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : '';
}
