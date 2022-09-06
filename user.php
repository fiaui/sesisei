<?php
session_start();
if(isset($_SESSION['username'])){
    echo "<h1> ini Halaman User </user>";
    echo $_SESSION["username"];
}