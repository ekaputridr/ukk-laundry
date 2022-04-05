<?php
require_once('include/connection.php');
$nama="";
$email="";
$user="";
$pass="";
$role="";
$usereror="";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $user = $_POST['USERNAME'];
    $query = "SELECT * FROM users WHERE username = '$user'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    if ($row['username'] != ""){
        echo "<script>alert('sign up fail');history.back();</script>";
    }else{
        $nama = $_POST ['NAMA'];
        $email = $_POST ['EMAIL'];
        $user = $_POST ['USERNAME'];
        $pass = ($_POST ['PASSWORD']);
        $role = $_POST ['ROLE'];
        $query = "insert into users (nama,email,username,password,role) values ('$nama','$email','$user','$pass','$role')";
        $conn->query($query);
        echo "<script>alert('sign up successful');location.href='login.php';</script>";
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>sign up</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Ionicon -->
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- CSS-->
        <link rel="stylesheet" type="text/css" href="css/form.css">
    </head>
    <body>
        <div class="login-page">
            <div class="form">
                    <h2 class="text-white">sign up</h2>
                <br><br>
                <form class="login-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
                    <input type="text" name="NAMA" placeholder="nama" value="<?php echo $nama?>">
                    <input type="text" name="EMAIL" placeholder="e-mail" value="<?php echo $email?>">
                    <input type="text" name="USERNAME" placeholder="username" value="<?php echo $user?>">
                    <input type="password" name="PASSWORD" placeholder="password" value="<?php echo $pass?>">
                    <input type="text" name="ROLE" placeholder="role" value="<?php echo $role?>">
                    <br><br><br><br>
                    <button type="submit" name="signup" value="signup">sign up</button>
                    <p class="message">already have account? <a href="login.php">log in</a></p>
                </form>
            </div>
        </div>
        <!-- Footer-->
        <br><br>
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: #001dfc;" >
                <br>
                <p class="text-white">All rights reserved, 2021©laundry</p>
            </div>
          </footer>
    </body>
</html>