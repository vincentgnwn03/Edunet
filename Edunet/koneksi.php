<?php
// 2111500225 Vincent Gunawan

$host = "localhost";
$user = "root"; // adjust according to your mysql setting
$pass = ""; //adjustv according to your mysql setting
$dbName = "edunet";
$conn = mysqli_connect($host, $user, $pass);

if (!$conn) {
    die("Koneksi Mysql Gagal !!<br>" . mysqli_connect_error()) ;
}
echo "Koneksi MySql Berhasil !!<br>";

$sql = mysqli_select_db($conn, $dbName);
if (!$sql) {
    die ("Koneksi Database Gagal !!" .mysqli_error($conn));
}
echo ("Koneksi Database Berhasil !!");
?>
