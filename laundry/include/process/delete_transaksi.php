<?php 
include "../connection.php";

$id_transaksi = $_GET['id_transaksi'];
$query = "DELETE FROM transaksi WHERE id_transaksi = $id_transaksi";
$sql = mysqli_query($conn, $query);

if($sql){
    echo "<script>alert('successfully deleted transaksi data');location.href='../../admin/transaksi.php';</script>";
}
else{
    echo "<script>alert('failed to delete transaksi data');history.back();</script>";
}

?>