<?php
include "../../include/connection.php";
$id_user = $_GET['id_user'];
$query = "SELECT * FROM users WHERE id_user = $id_user";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>edit user</title>
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
                <h2 class="text-white">edit user</h2>
                <br><br>
                <form class="login-form" action="../../include/process/update_user.php" method="POST">
                    <input type="hidden" name="id_user" value="<?= $id_user?>">
                    <input type="text" name="nama" placeholder="nama" value="<?= $data['nama'] ?>">
                    <input type="text" name="email" placeholder="email" value="<?= $data['email'] ?>">
                    <input type="text" name="username" placeholder="username" value="<?= $data['username'] ?>">
                    <input type="text" name="password" placeholder="password" value="<?= $data['password'] ?>">
                    <select class="form-select" name="role" required>
                        <option value="" disabled>role</option>
                        <?php if($data['role'] == 'admin'){ ?>
                            <option value="admin" selected>admin</option>
                            <option value="kasir">kasir</option>
                            <option value="owner">owner</option>
                        <?php } else if($data['role'] == 'kasir') { ?>
                            <option value="admin">admin</option>
                            <option value="kasir" selected>kasir</option>
                            <option value="owner">owner</option>
                        <?php } else if($data['role'] == 'owner') { ?>
                            <option value="admin">admin</option>
                            <option value="kasir">kasir</option>
                            <option value="owner" selected>owner</option>
                        <?php } ?>
                    </select>
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