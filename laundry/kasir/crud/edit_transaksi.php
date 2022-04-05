<?php
include "../../include/connection.php";

$id_transaksi = $_GET['id_transaksi'];
$query = "SELECT * FROM transaksi WHERE id_transaksi = $id_transaksi";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);

$query2 = "SELECT * FROM transaksi INNER JOIN paket ON transaksi.id_paket = paket.id_paket WHERE id_transaksi = $id_transaksi";
$sql2 = mysqli_query($conn, $query2);
$data2 = mysqli_fetch_array($sql2);

$query3 = "SELECT * FROM transaksi INNER JOIN member ON transaksi.id_member = member.id_member WHERE id_transaksi = $id_transaksi";
$sql3 = mysqli_query($conn, $query3);
$data3 = mysqli_fetch_array($sql3);

$id_paket = $data['id_paket'];
$query4 = "SELECT * FROM paket WHERE id_paket = '$id_paket'";
$sql4 = mysqli_query($conn, $query4);
$data4 = mysqli_fetch_array($sql4);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>edit transaksi</title>
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
                <h2 class="text-white">edit transaksi</h2>
                <br><br>
                <form class="login-form" action="../process/update_transaksi.php" method="POST">
                    <input type="hidden" name="id_transaksi" value="<?= $id_transaksi?>">
                    <input type="date" name="tgl" placeholder="tanggal pesan" readonly value="<?= $data['tgl'] ?>">
                    <input type="text" name="id_member" placeholder="id member" readonly value="<?= $data3['nama'] ?>">
                    <input type="text" name="id_paket" placeholder="id_paket" readonly value="<?= $data2['jenis'] ?>">
                    <input type="text" name="berat" placeholder="berat" value="<?= $data['berat'] ?>">
                    <?php 
                    $total = $data4['harga'] * $data['berat']; 
                    ?>
                    <input type="text" name="total" placeholder="total" readonly value="<?= number_format($total); ?>">
                    <select class="form-select" name="status_proses" required>
                        <option value="" disabled>select proses</option>
                        <?php if($data['status_proses'] == 'baru'){ ?>
                            <option value="baru" selected>baru</option>
                            <option value="proses">proses</option>
                            <option value="selesai">selesai</option>
                        <?php } else if($data['status_proses'] == 'proses') { ?>
                            <option value="baru">baru</option>
                            <option value="proses" selected>proses</option>
                            <option value="selesai">selesai</option>
                        <?php } else if($data['status_proses'] == 'selesai') { ?>
                            <option value="baru">baru</option>
                            <option value="proses">proses</option>
                            <option value="selesai" selected>selesai</option>
                        <?php } ?>
                    </select>
                    <select class="form-select" name="status_bayar" required>
                        <option value="" disabled>select bayar</option>
                        <?php if($data['status_bayar'] == 'belum_bayar'){ ?>
                            <option value="belum_bayar" selected>belum bayar</option>
                            <option value="bayar">bayar</option>
                        <?php } else if($data['status_bayar'] == 'bayar') { ?>
                            <option value="belum_bayar">belum bayar</option>
                            <option value="bayar" selected>bayar</option>
                        <?php } ?>
                    </select>
                    <select class="form-select" name="metode" required>
                        <option value="">metode pembayaran</option>
                        <option value="tunai">tunai</option>
                        <option value="debit">debit</option>
                        <?php if($data['metode'] == 'tunai'){ ?>
                            <option value="tunai" selected>tunai</option>
                            <option value="debit">debit</option>
                        <?php }else if($data['metode'] == 'debit'){ ?>
                            <option value="tunai">tunai</option>
                            <option value="debit" selected>debit</option>
                        <?php } ?>
                    </select>
                    <br>
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