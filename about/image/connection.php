<?php
$server = "niwder.me";
$username = "webuser";
$password = "webuser";
$dbname = "web";

$conn = mysqli_connect($server,$username,$password,$dbname);
mysqli_set_charset($conn,"utf8");

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
