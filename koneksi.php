<?php

$host='localhost';//server database
$user='root';//user database
$pass='';//password
$db_nama='tugas'; //nama database

$conn=mysqli_connect($host,$user,$pass,$db_nama);
if(!$conn){
    die('Gagal terhubung :'.mysql_connect_error());
}

?>