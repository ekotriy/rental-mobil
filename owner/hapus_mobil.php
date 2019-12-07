<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: ../login.php");
    exit;
} 

include "../koneksi.php";

$nopol = $_GET['id'];

$sql = "DELETE FROM mobil where nopol ='$nopol'";

$result = mysqli_query($conn,$sql);
//DELETE FROM `mobil` WHERE `mobil`.`nopol` = 'test';
if($result){
    echo "
    <script>
        alert('data berhasil dihapus !');
        document.location.href = 'manajemen.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('data gagal dihapus !');
        document.location.href = 'manajemen.php';
    </script>
    ";
}


?>
