<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="../../front/Images/fond.jpg">
    <br><br><br><br><br><br><br><br><br><br><br>
    <table border="1" align="center">
        <tr>
            <th colspan="7">
                LIST ALL USERS
            </th>
        </tr>
        <tr>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>IDENT.</th>
            <th>ADDRESS</th>
            <th>CELLPHONE</th>
            <th>EMAIL</th>
            <th>...</th>
        </tr>
        <?php
            include("../config/connectionDB.php");
            $sql = "SELECT * FROM USERS";
            $result = $conn -> query($sql);
            if($result -> num_rows){
                while($row = $result -> fetch_assoc()){
                    echo  "<tr>
                            <td>".$row['first_name']."</td>
                            <td>".$row['last_name']."</td>
                            <td>".$row['number_id']."</td>
                            <td>".$row['address']."</td>
                            <td>".$row['cellphone']."</td>
                            <td>".$row['email']."</td>
                            <td>
                                <a href='http://127.0.0.1/PETS/back/src/edit_user.php?userId=".$row['id']."'>
                                    <img src ='../../front/icons/editar.png' width = '20'></a>&nbsp;&nbsp;
                                <a href='http://127.0.0.1/PETS/back/src/delete_user.php?userId=".$row['id']."'>
                                    <img src ='../../front/icons/borrar.png' width = '20'></a>
                            </td>
                           </tr>";

                }
            }else{
                echo "NO DATA FOUND";
            }
        ?>
    </table>
</body>
</html>