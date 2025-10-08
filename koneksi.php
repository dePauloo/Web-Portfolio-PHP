<?php
$host = "localhost";
$user = "user20232013";
$pass = "nhYFSz";
$db   = "user20232013";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
//echo "berhasil";
?>
