<?php
$server = "niwder.me";
<<<<<<< HEAD
$username = "root";
$password = "srilanka";
=======
$username = "webuser";
$password = "webuser";
>>>>>>> cc5325af6f91c0da1c1f70878733a220b489cecb
$dbname = "web";

$conn = mysqli_connect($server,$username,$password,$dbname);
mysqli_set_charset($conn,"utf8");

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}


