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
    $sql_update="INSERT INTO moviebio(movid,movname,movdetel,movduration,movdate) VALUES ('$_POST[movid]','$_POST[movname]','$_POST[movdetel]' ,'$_POST[movduration]' ,'$_POST[movdate]')";

    $result= $conn->query($sql_update);

    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {

        echo "<h1> Insert Success</h1>";
    header("refresh: 1; url=moviemain.php");
    }

?> 

</body>
</html>