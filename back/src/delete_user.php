<?php
    include("../config/connectionDB.php");
    $id = $_GET['userId'];
    $sql = "DELETE FROM USERS WHERE id = '$id'";
    if($conn -> query($sql)===TRUE){
        if($conn -> affected_rows > 0){
            echo "<script>alert('USER HAS BEEN DELETED')</script>";
            header('refresh:0; url=http://127.0.0.1/PETS/back/src/list_users.php');
        }else{
            echo "<script>alert('USER HAS NOT BEEN FOUND')</script>";
            header('refresh:0; url=http://127.0.0.1/PETS/back/src/list_users.php');
        }
    }else{
        echo "Error: " . $conn -> error;
    }
?>