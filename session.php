<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$koneksi = new PDO('mysql:host=localhost;dbname=sekolahh', 'root', '');
$query = $koneksi->query("select * from siswa where Username='$username' AND Password='$password'");

if($query->rowCount() > 0){
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["password"] = $_POST['password'];
    header("Location:beranda.php");
}else{
    header("Location:form.php");
}
