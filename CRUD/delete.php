<?php
    include "Connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `users` where id=$id";
        $conn->query($sql);
    }
    header('location:/crud/index.php');
    exit;
?>