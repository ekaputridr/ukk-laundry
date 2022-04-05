<?php
require_once("include/connection.php");
$username = "";
$password = "";
$err = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    if(count($row)==0){
        echo"<script>alert('log in failed');history.back();</script>";
    }else{
        if($row['password']==($_POST['password'])){
            if($row['role']=="admin"){
                $_SESSION['username'] = $username;
                $_SESSION['role'] = "admin";
                header("location:admin/home.php");
            }else if($row['role']=="kasir"){
                $_SESSION['username'] = $username;
                $_SESSION['role'] = "kasir";
                header("location:kasir/home.php");
            }else if($row['role']=="owner"){
                $_SESSION['username'] = $username;
                $_SESSION['role'] = "owner";
                header("location:owner/home.php");
            }
        }else{
            $err = "username or password wrong";
        }
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
        <title>log in</title>
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
                <h2 class="text-white">log in</h2>
                <br><br>
                <form class="login-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <input type="text" name="username" placeholder="username" value = "<?php echo $username;?>">
                    <input type="password" name="password" placeholder="password">
                    <br><br><br><br>
                    <button type="submit" name="login" value="Login">log in</button>
                    <p class="message"><?php echo $err; ?></p>
                </form>
                <p class="message">did'nt get account yet? <a href="signup.php">create an account</a></p>
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
