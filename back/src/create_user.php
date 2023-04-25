<?php
    include("../config/connectionDB.php");
    // Get data
    $fName = $_POST['f_name'];
    $lName = $_POST['l_name'];
    $idNum = $_POST['id_num'];
    $address = $_POST['address'];
    $celPhone = $_POST['cel_phone'];
    $email = $_POST['email'];
    $pass = $_POST['passwd'];

    $sql = "INSERT INTO USERS (first_name, last_name, number_id, address, cellphone, email, password) VALUES ('$fName', '$lName', '$idNum', '$address', '$celPhone', '$email', '$pass') ";

    //$conn -> query($sql);

    if($conn -> query($sql) === TRUE){
        echo " ::: USER HAS BEEN CREATED SUCCESSFULLY ::: ";
    } else{
        echo " ::: ERROR :" . $conn -> error . "<br>" . $sql ;
    }
?>