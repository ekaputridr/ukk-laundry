<?php 
include "../connection.php";

$id_member = $_GET['id_member'];
$query = "DELETE FROM member WHERE id_member = $id_member";
$sql = mysqli_query($conn, $query);

if($sql){
    echo "<script>alert('successfully deleted member data');location.href='../member.php';</script>";
}
else{
    echo "<script>alert('failed to delete member data');history.back();</script>";
}

?>