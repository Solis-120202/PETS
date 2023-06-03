<?php
    include("../config/connectionDB.php");
    $id = $_GET['userId'];
    $sql = "SELECT * FROM USERS WHERE id = '$id'";
    $result = $conn -> query($sql);
    if($result -> num_rows){
        while($row = $result -> fetch_assoc()){
            $f_name = $row['first_name'];
            $l_name = $row['last_name'];
            $ident = $row['number_id'];
            $address = $row['address'];
            $mobile = $row['cellphone'];
            $email = $row['email'];
        }
    }else{
        echo "NO DATA FOUND";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETS/NEW USER</title>
    <link rel="icon" type="image/x-icon" href="../Icons/perfil-del-usuario.png">
</head>
<body background="../../front/Images/fond.jpg">
    <center>
        <br><h1>REGISTER FORM</h1>
        <img src="../../front/Images/user-interface.png" width="100"><br><br>
        <form name="EditForm" action="http://127.0.0.1/PETS/back/src/update_user.php" method="post">
            <input type="hidden" name="uId" value='<?php echo $id; ?> readonly="yes"'>
            <br><br><label>Firstname  </label><input type="text" name="f_name" value= '<?php echo $f_name; ?>' required>&nbsp;
            <label>Lastname  </label><input type="text" name="l_name" value= '<?php echo $l_name ;?>' required><br><br>
            <label>Ident number  </label><input type="text" name="id_num" value= '<?php echo $ident ;?>' required>&nbsp;
            <label>Address  </label><input type="text" name="address" value= '<?php echo $address; ?>' required>&nbsp;
            <label>Cellphone  </label><input type="text" name="cel_phone" value= '<?php echo $mobile; ?>' required><br><br>
            <label>E-mail  </label><input type="email" name="email" value= '<?php echo $email; ?>' required><br><br>
            <button>ACTUALIZAR</button>
        </form>
    </center>
</body>
</html>