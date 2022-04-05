<?php 
    include "connection.php";
    session_destroy();
    echo"
    <script>
        alert('logout success');
       location.href='../index.html';
    </script>";
?>