<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010106";
$db = "klinik_312010106";

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
	echo "koneksi ke server gagal.";
	die();
} else echo "koneksi berhasil";
?>