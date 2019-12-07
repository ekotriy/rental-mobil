<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: ../login.php");
    exit;
} 

include "../koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM anggota WHERE id ='$id'";
$result = mysqli_query($conn,$sql);

if($result){
    echo"
    <script>
    alert('data berhasil dihapus');
    document.location.href = '../logout.php';
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
