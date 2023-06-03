<?php
    include("../config/connectionDB.php");
    // Get data
    $email = $_POST['email'];
    $password = md5($_POST['passwd']);

    //Create Query
    $sql = "SELECT * FROM USERS WHERE email = '$email' AND password = '$password'";
    $result = $conn -> query ($sql);

    if( $result -> num_rows > 0) {
        header("Location:http://127.0.0.1/PETS/front/src/home.php");
    } else{
        //echo " ::: THE USER DOEN'T EXIST OR INVALID DATA :::" ;
        echo "<script>alert('::: THE USER DOES NOT EXIST OR INVALID DATA :::') </script>";
        header("refresh:0; url=http://127.0.0.1/PETS/front/src/login.html");
    }
?>