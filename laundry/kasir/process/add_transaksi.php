<?php
include "../../include/connection.php";
$id_member = $_POST['id_member'];
$id_paket = $_POST['id_paket'];
$id_outlet = $_POST['id_outlet'];
$berat = $_POST['berat'];
$tgl_bayar = $_POST['tgl_bayar'];

$query = "INSERT INTO `transaksi` (id_member,id_paket,berat,tgl,tgl_bayar,status_proses,status_bayar,id_outlet) VALUES ('$id_member','$id_paket','$berat',NOW(),'$tgl_bayar','baru','belum_bayar',$id_outlet)";
$sql = mysqli_query($conn,$query);

if($sql){
    echo "<script>alert('successfully added order');location.href='../transaksi.php';</script>";
}
else{
    echo "<script>alert('failed to add order');history.back();</script>";
}
?>