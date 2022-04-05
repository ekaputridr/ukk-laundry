<?php
include "include/connection.php";
$id_user = $_SESSION['id_user'];
$query = "SELECT * FROM users WHERE id_user = '$id_user'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>profile</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- CSS-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/user.css" rel="stylesheet" />
        
    </head>
    <body>
        <br>
        <nav class="navbar static-top">
            <div class="container">
                <img src="assets/img/logo.png" width="200" height="50" href="home.php">
            </div>
        </nav>

        <div class="login-page">
            <div class="form">
                <h2 class="text-white">log in</h2>
                <br><br>
                <form class="login-form" action="include/process/update_profile.php" method="POST">
                    <input type="hidden" value="<?= $id_user ?>" name="id_user">
                    <input type="text" name="nama" placeholder="nama" value = "<?= $data['nama'] ?>" required>
                    <input type="text" name="email" placeholder="email" value = "<?= $data['email'] ?>" required>
                    <input type="text" name="username" placeholder="username" value = "<?= $data['username'] ?>" required>
                    <input type="text" name="password" placeholder="password" value = "<?= $data['password'] ?>" required>
                    <input type="text" name="role" placeholder="role" value = "<?= $data['role'] ?>" required>
                    <br><br><br><br>
                    <button type="submit" name="update">update</button>
                </form>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>

        <!-- Footer-->
        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-3" style="background-color: #001dfc;" >
                <br>
                <p class="text-white">All rights reserved, 2021©laundry</p>
            </div>
        </footer>
    </body>
</html>