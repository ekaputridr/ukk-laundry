<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>admin</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- CSS-->
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/user.css" rel="stylesheet" />
        
    </head>
    <body>
        <br>
        <nav class="navbar static-top">
            <div class="container">
                <img src="../assets/img/logo.png" width="200" height="50" href="home.php">
                <div class="ui secondary pointing menu">
                    <center><a class="active item" href="home.php">home</a></center>
                    <center><a class="item" href="user.php">user</a></center>
                    <center><a class="item" href="member.php">member</a></center>
                    <center><a class="item" href="outlet.php">outlet</a></center>
                    <center><a class="item" href="paket.php">paket</a></center>
                    <center><a class="item" href="transaksi.php">transaksi</a></center>
                    <center><a class="item" href="generate.php">generate laporan</a></center>
                </div>
                <div>
                    <a class="btn btn-primary btn-dark btn-sm" type="" href="../include/logout.php">logout</a>
                </div>
            </div>
        </nav>
        <br><br><br><br><br><br><br><br><br>
        <center><p>welcome, admin</p></center>
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