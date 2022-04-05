<?php
include "../../include/connection.php";
$id_outlet = $_GET['id_outlet'];
$query = "SELECT * FROM outlet WHERE id_outlet = $id_outlet";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);

$query2 = "SELECT * FROM outlet INNER JOIN users ON outlet.id_user = users.id_user";
$sql2 = mysqli_query($conn, $query2);
$data2 = mysqli_fetch_array($sql2);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>edit outlet</title>
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
        <link href="../../css/styles.css" rel="stylesheet" />
        <!-- CSS-->
        <link rel="stylesheet" type="text/css" href="../../css/form.css">
    </head>
    <body>
        <div class="login-page">
            <div class="form">
                <h2 class="text-white">edit outlet</h2>
                <br><br>
                <form class="login-form" action="../../include/process/update_outlet.php" method="POST">
                    <input type="hidden" name="id_outlet" value="<?= $id_outlet?>">
                    <input type="text" name="nama_outlet" placeholder="nama outlet" value="<?= $data['nama_outlet'] ?>">
                    <input type="text" name="id_user" placeholder="nama" readonly value="<?= $data2['nama'] ?>">
                    <input type="text" name="alamat" placeholder="alamat" value="<?= $data['alamat'] ?>">
                    <br><br><br><br>
                    <button type="submit" name="add">update</button>
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