<?php 
include "../connection.php";

$id_outlet = $_GET['id_outlet'];
$query = "DELETE FROM outlet WHERE id_outlet = $id_outlet";
$sql = mysqli_query($conn, $query);

if($sql){
    echo "<script>alert('successfully deleted outlet data');location.href='../../admin/outlet.php';</script>";
}
else{
    echo "<script>alert('failed to delete outlet data');history.back();</script>";
}

?>