<?php
include "../connection.php";
$nama_outlet = $_POST['nama_outlet'];
$id_user = $_POST['id_user'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO `outlet` (nama_outlet,id_user,alamat) VALUES ('$nama_outlet','$id_user','$alamat')";
$sql = mysqli_query($conn,$query);

if($sql){
    echo "<script>alert('successfully added outlet');location.href='../../admin/outlet.php';</script>";
}
else{
    echo "<script>alert('failed to add outlet');history.back();</script>";
}
?>