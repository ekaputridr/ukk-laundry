<?php

include "../../include/connection.php";

$id_member = $_POST['id_member'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tlp = $_POST['tlp'];

$query = "UPDATE `member` SET `nama`='$nama', `alamat`='$alamat', `jenis_kelamin`='$jenis_kelamin', `tlp`='$tlp' WHERE id_member = $id_member";
$sql = mysqli_query($conn, $query);

if($sql){
    echo"<script>alert('successfully update member');location.href='../member.php';</script>";
}
else{
    echo"<script>alert('failed update member');history.back();</script>";
}

?>