<?
$host = "https://webcrud-reza1.rhcloud.com/phpmyadmin";
$user = "adminiJDV68Q";
$pass = "BMHZC-CR6FvN";
$name = "mhs";

$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>