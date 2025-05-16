<?php
$host = "sql12.freesqldatabase.com";
$user = "sql12779217";
$pass = "PjvBNFnWDQ";
$db   = "sql12779217"; // ganti dengan nama databasenya

$koneksi = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
