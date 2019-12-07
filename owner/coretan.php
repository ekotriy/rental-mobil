<?php
//koneksi
include "../koneksi.php";

if(isset($_POST["submit"])){
    //proses input data ke tabel

    $nopol = $_POST["nopol"];
    $merek = $_POST["merek"];
    $warna = $_POST["warna"];
    $duduk = $_POST['t_duduk'];
    $tersedia = (isset($_POST["tersedia"])) ? 1 : 0 ;

    $sql = "INSERT INTO mobil (nopol,merek,warna,t_duduk,tersedia) VALUES ('$nopol','$merek','$warna','$duduk','$tersedia')";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "
        <script>
            alert('data berhasil ditambah !');
            document.location.href = 'mobil.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal ditambah !');
            document.location.href = 'coretan.php';
        </script>
        ";
    }
}else{
    //echo 'form tampil disini';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah mobil</title>
</head>
<body>

<h1>Tambahkan mobil</h1>
    <form action="" method="post">
    <ul>
        <li>
            <label for="nopol">No. Polisi</label>
            <input type="text" name="nopol" id="nopol">
        </li>

        <li>
            <label for="merek">Merek</label>
            <input type="text" name="merek" id="merek">
        </li>

        <li>
            <label for="warna">Warna</label>
            <input type="text" name="warna" id="warna">
        </li>

        <li>
            <label for="warna">duduk</label>
            <input type="text" name="t_duduk" id="warna">
        </li>

        <li>
            <label for="tersedia">tersedia</label>
            <input type="checkbox" name="tersedia" id="tersedia">
        </li><br>

        <button type="submit" name="submit">Tambah data</button>
    </ul>
    </form>
</body>
</html>