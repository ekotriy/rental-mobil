<?php
session_start();
if(isset($_SESSION['username'])){
    if($_SESSION['owner'] = 1){
        header("location:owner/dashboard.php");
    }else if($_SESSION['owner'] = 0){
        header("location:pegawai/pegawai.php");
    }
}
include 'koneksi.php';
if(isset($_POST["submit"])){
    $username =$_POST["username"];
    $password = $_POST["password"];
    

    $result = mysqli_query($conn,"SELECT * FROM anggota where username = '$username' and password=MD5('$password')");

    //menghitung jumlah data yang ditemukan
    $cek =mysqli_num_rows($result);
    //cek username & password sudah ditemukan
    if($cek > 0){
        $data = mysqli_fetch_array($result);
        //cek login sebagai owner
        if($data['owner']=="1" ){
            //session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['owner'] ="1";

            //alihkan ke halaman dashbord owner
            header("location:owner/dashboard.php");
        }else if($data['owner']=="0"){
            //session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['owner'] = "0";
            //alihkan ke halaman dashbord pegawai
            header("location:pegawai/pegawai.php");
        }else{
            //alihkan ke halaman logi kembali
            $error=true;
        }
    }else{
        $error=true;
    }
}
?>

<!DOCTYPE html>
<html lang=>
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" >
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=B612+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <title>Rental Mobil</title>
</head>
<body> 
     
    <div class="main" style="background-image: url('img/bg1.jpg')">
    <div class="cover"></div>

    <div class="container">
        <h1 class="logo mono">
            login
        </h1>

        <div class="content">
    <?php if(isset($error)) : ?>
    <span class="badge badge-danger col-md-4 offset-md-4">Password/Username anda salah !</span>
    <?php endif; ?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="" method="POST">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" class="form-control" id="username"  placeholder="Masukan username" required oninvalid="this.setCustomValidity('Masukan username')" oninput="setCustomValidity('')">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password"class="form-control" id="password" placeholder="Masukan password" required oninvalid="this.setCustomValidity('Masukan password')" oninput="setCustomValidity('')">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                 </form>
            </div>
        </div>

        <h3 class="created">created by Eko Tri Yustikawan</h3>
    
      </div>
    </div>

    </div>
</body>
</html>