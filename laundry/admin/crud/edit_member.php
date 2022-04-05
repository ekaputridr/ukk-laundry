<?php
include "../../include/connection.php";
$id_member = $_GET['id_member'];
$query = "SELECT * FROM member WHERE id_member = $id_member";
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
        <title>edit member</title>
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
                <h2 class="text-white">edit member</h2>
                <br><br>
                <form class="login-form" action="../../include/process/update_member.php" method="POST">
                    <input type="hidden" name="id_member" value="<?= $id_member?>">
                    <input type="text" name="nama" placeholder="nama" value="<?= $data['nama'] ?>">
                    <input type="text" name="alamat" placeholder="alamat" value="<?= $data['alamat'] ?>">
                    <select class="form-select" name="jenis_kelamin" required>
                        <option value="" disabled>jenis kelamin</option>
                        <?php if($data['jenis_kelamin'] == 'pria'){ ?>
                            <option value="pria" selected>pria</option>
                            <option value="wanita">wanita</option>
                        <?php } else if($data['jenis_kelamin'] == 'wanita') { ?>
                            <option value="pria">pria</option>
                            <option value="wanita" selected>wanita</option>
                        <?php } ?>
                    </select>
                    <input type="text" name="tlp" placeholder="telepon" value="<?= $data['tlp'] ?>">
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