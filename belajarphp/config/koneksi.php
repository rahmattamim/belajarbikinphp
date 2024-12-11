<?php
$host = "localhost";
$user = "root";
$password = "";
$database ="database_tamim";

//membuat koneksi
$conn = new mysqli($host,$user,$password,$database);

//cek koneksi
if ($conn->connect_error){
    die("Koneksi Gagal: ".$conn->connect_error);
}
?>