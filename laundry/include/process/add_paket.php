<?php
include "../connection.php";
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

$query = "INSERT INTO `paket` (jenis,harga) VALUES ('$jenis','$harga')";
$sql = mysqli_query($conn,$query);

if($sql){
    echo "<script>alert('successfully added paket');location.href='../../admin/paket.php';</script>";
}
else{
    echo "<script>alert('failed to add paket');history.back();</script>";
}
?>