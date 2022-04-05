<?php

include "../../include/connection.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tlp = $_POST['tlp'];

$query = "INSERT INTO `member` (nama,alamat,jenis_kelamin,tlp) VALUES ('$nama','$alamat','$jenis_kelamin','$tlp')";
$sql = mysqli_query($conn,$query);

if($sql){
    echo "<script>alert('successfully added member');location.href='../member.php';</script>";
}
else{
    echo "<script>alert('failed to add member');history.back();</script>";
}
?>