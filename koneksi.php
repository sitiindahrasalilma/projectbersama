<?php

$server="localhost";
$user="root";
$pass="";
$database="tbguru2";

$koneksi = mysqli_connect("localhost","root","","dbguru2");
if ($koneksi) {
    $simpan =mysqli_select_db($koneksi, $database);
    if (!$simpan);
}else{
}

?>