<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
$sql_update="UPDATE memberbio SET mname='$_POST[mname]',mlastname='$_POST[mlastname]' ,memail='$_POST[memail]' ,mtelephon='$_POST[mtelephon]' WHERE mid='$_POST[mid]' ";

            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

                echo "<h1> Edit Success</h1>";
            header("refresh: 1; url=main.php");
            }

        ?>

</body>
</html>