<?php

$host="localhost";
$user="root";
$pass="";
$db="beasiswa_budiluhur";

$koneksi=mysqli_connect($host, $user, $pass);
mysqli_select_db($koneksi, $db);