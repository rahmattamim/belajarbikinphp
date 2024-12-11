<?php
//memanggil file koneksi
require_once '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //enkripsi password

    // cek apakah username sudah ada di database
    $checkUser = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($checkUser);

    if ($result->num_rows > 0) {
        echo "Username sudah ada, pilih username lain!";
    } else {
        //masukkan data pengguna baru ke database
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE){
            echo "Pendaftaran Berhasil! <a href=../view/login.php> Login Disini</a>";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
        
        
}
//tutup koneksi
$conn->close();

?>