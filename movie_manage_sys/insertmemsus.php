<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insertSuccess</title>
    <Style>
        h1{
            color:green;
            text-align: center;
            
        }


    </Style>
</head>
<body>
<?php
    require 'conn.php';
    $sql_update="INSERT INTO memberbio(mid,mname,mlastname,memail,mtelephon) VALUES ('$_POST[mid]','$_POST[mname]','$_POST[mlastname]' ,'$_POST[memail]' ,'$_POST[mtelephon]')";

    $result= $conn->query($sql_update);

    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {

        echo "<h1> Insert Success</h1>";
    header("refresh: 1; url=main.php");
    }

?> 

</body>
</html>