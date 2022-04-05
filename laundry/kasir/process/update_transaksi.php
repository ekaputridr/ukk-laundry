<?php

include "../../include/connection.php";

$id_transaksi = $_POST['id_transaksi'];
$berat = $_POST['berat'];
$tgl = $_POST['tgl'];
$status_proses = $_POST['status_proses'];
$status_bayar = $_POST['status_bayar'];
$metode = $_POST['metode'];
$total = $_POST['total'];

$query = "UPDATE `transaksi` SET `berat`='$berat', `tgl`='$tgl', `status_proses`='$status_proses', `status_bayar`='$status_bayar', `metode`='$metode', `total`='$total ' WHERE id_transaksi = $id_transaksi";
$sql = mysqli_query($conn, $query);

if($sql){
    echo"<script>alert('successfully update transaksi');location.href='../transaksi.php';</script>";
}
else{
    echo"<script>alert('failed update transaksi');history.back();</script>";
}

?>