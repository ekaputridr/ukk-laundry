<?php
$conn = mysqli_connect("localhost","root","","laundry3");

if (mysqli_connect_errno()){
    echo "Koneksi Gagal : " . mysqli_connect_error();
}
?>