<?php
    include("../config/connectionDB.php");
    // Get data
    $fName = $_POST['f_name'];
    $lName = $_POST['l_name'];
    $idNum = $_POST['id_num'];
    $address = $_POST['address'];
    $celPhone = $_POST['cel_phone'];
    $email = $_POST['email'];
    $pass = md5($_POST['passwd']);

    $sql = "INSERT INTO USERS (first_name, last_name, number_id, address, cellphone, email, password) VALUES ('$fName', '$lName', '$idNum', '$address', '$celPhone', '$email', '$pass') ";

    //$conn -> query($sql);

    if($conn -> query($sql) === TRUE){
        //echo " ::: USER HAS BEEN CREATED SUCCESSFULLY ::: ";
        echo "<script> alert('::: USER HAS BEEN CREATED SUCCESSFULLY :::')</script>";
        header("refresh:0; url=http://127.0.0.1/PETS/front/src/login.html");
    } else{
        //echo " ::: ERROR :" . $conn -> error . "<br>" . $sql ;
        echo "<script> alert('::: USER WASN'T CREATED SUCCESSFULLY :::')</script>";
        header("refresh:0; url=http://127.0.0.1/PETS/front/src/create_user.html");
    }
?>