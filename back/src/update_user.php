<?php
    include("../config/connectionDB.php");

    $fName = $_POST['f_name'];
    $lName = $_POST['l_name'];
    $idNum = $_POST['id_num'];
    $address = $_POST['address'];
    $celPhone = $_POST['cel_phone'];
    $email = $_POST['email'];
    $userId=$_POST['uId'];

    $sql = "UPDATE USERS SET
            first_name = '$fName',
            last_name = '$lName',
            number_id = '$idNum',
            address = '$address',
            cellPhone = '$celPhone',
            email = '$email'
        WHERE
            id = '$userId'";
    
    if($conn->query($sql) === TRUE){
        echo "<script> alert('USER HAS BEEN UPDATE') </script>";
        header("refresh:0;url=http://127.0.0.1/PETS/back/src/list_users.php");
    }else{
        echo $conn -> error;
    }
       
?>