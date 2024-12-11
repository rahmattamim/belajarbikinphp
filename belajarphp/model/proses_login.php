<?php
//memanggil file koneksi
require_once'../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        //verifikasi password
        if (password_verify($password, $row['password'])) {
            echo "Login Berhasil! Selamat datang," . $row['username'];
        } else{
        echo "Login Gagal! Password salah.";
        }
    }else{
        echo "Username tidak ditemukan";
    }

}
//tutup koneksi
$conn->close()
?>