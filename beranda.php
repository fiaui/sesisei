<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location:form.php");
}
echo "<h1>Ini Beranda</h1>";
echo "<br />";
echo "Username :"; echo $_SESSION['username'];
echo "<br />";
echo "Password :"; echo $_SESSION['password'];
echo "<br />";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="user.php">
        <button type="submit">Halaman User</button>
    </form>
    <form action="hapus_session.php">
        <button onclick="alert('Anda Telah Logout')">Logout</button>
    </form>
</body>
</html>