<?php 
include "../connection.php";

$id_user = $_GET['id_user'];
$query = "DELETE FROM users WHERE id_user = $id_user";
$sql = mysqli_query($conn, $query);

if($sql){
    echo "<script>alert('successfully deleted user data');location.href='../../admin/user.php';</script>";
}
else{
    echo "<script>alert('failed to delete user data');history.back();</script>";
}

?>