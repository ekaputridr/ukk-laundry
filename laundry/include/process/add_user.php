<?php
include "../connection.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$query = "INSERT INTO `users` (nama,email,username,password,role) VALUES ('$nama','$email','$username','$password','$role')";
$sql = mysqli_query($conn,$query);

if($sql){
    echo "<script>alert('successfully added user');location.href='../../admin/user.php';</script>";
}
else{
    echo "<script>alert('failed to add user');history.back();</script>";
}
?>