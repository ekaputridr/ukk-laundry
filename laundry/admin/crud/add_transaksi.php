<?php
include "../../include/connection.php";
$query = "SELECT * FROM member";
$sql = mysqli_query($conn, $query);

$query2 = "SELECT * FROM paket";
$sql2 = mysqli_query($conn, $query2);

$query3 = "SELECT * FROM outlet";
$sql3 = mysqli_query($conn, $query3);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>add order</title>
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
        <!-- Bootstrap CSS-->
        <link href="../../css/styles.css" rel="stylesheet" />
        <!-- Form CSS-->
        <link rel="stylesheet" type="text/css" href="../../css/form.css">
    </head>
    <body>
        <div class="login-page">
            <div class="form">
                <h2 class="text-white">order</h2>
                <br><br>
                <form class="login-form" action="../../include/process/add_transaksi.php" method="POST">
                    <select class="form-select" name="id_outlet" required>
                        <option value="">select outlet</option>
                        <?php while($data3 = mysqli_fetch_array($sql3)){?>
                            <option value="<?= $data3['id_outlet'] ?>"><?= $data3['nama_outlet'] ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <select class="form-select" name="id_member" required>
                        <option value="">select member</option>
                        <?php while($data = mysqli_fetch_array($sql)){?>
                            <option value="<?= $data['id_member'] ?>"><?= $data['nama'] ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <select class="form-select" name="id_paket" required>
                        <option value="">select jenis</option>
                        <?php while($data2 = mysqli_fetch_array($sql2)){?>
                            <option value="<?= $data2['id_paket'] ?>"><?= $data2['jenis'] ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <input type="number" name="berat" placeholder="berat(per kg)">
                    <br><br>
                    <p class="text-white">select tanggal bayar</p>
                    <input type="date" name="tgl_bayar" required>
                    <br><br><br><br>
                    <button type="submit" name="add">add order</button>
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