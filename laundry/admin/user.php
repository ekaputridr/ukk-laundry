<?php
include "../include/connection.php";
$query = "SELECT * FROM users";
$sql = mysqli_query($conn, $query);
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
                <img src="../assets/img/logo.png" width="200" height="50">
                <div class="ui secondary pointing menu">
                    <center><a class="item" href="home.php">home</a></center>
                    <center><a class="active item" href="user.php">user</a></center>
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

        <!-- CRUD User-->
        <br><br><br><br><br>
        <div>
            <div class="container-fluid px-4">
                <div class="container">
                    <div>
                        <a class="btn btn-primary btn-dark btn-sm me-md-2" href="crud/add_user.php" type="button">add user</a>
                    </div>
                </div>
                <br>
                <div class="main ui container">
                    <div class="bd-example">
                        <table class="table table-borderless" border="2">
                            <thead>
                                <tr>
                                    <th scope="col">no.</th>
                                    <th scope="col">nama</th>
                                    <th scope="col">e-mail</th>
                                    <th scope="col">username</th>
                                    <th scope="col">role</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; 
                                while($data = mysqli_fetch_array($sql)){
                                ?>
                                <tr>
                                    <td> <?= $i++?> </td>
                                    <td> <?= $data['nama']?> </td>
                                    <td> <?= $data['email']?> </td>
                                    <td> <?= $data['username']?> </td>
                                    <td> <?= $data['role']?> </td>
                                    <td>
                                        <a class="btn btn-primary btn-dark btn-sm me-md-2" href="crud/edit_user.php?id_user=<?=$data['id_user']?>" type="button">edit</a>
                                        <a class="btn btn-primary btn-dark btn-sm me-md-2" href="../include/process/delete_user.php?id_user=<?=$data['id_user']?>" type="button">delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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