<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is connect to database</title>
</head>
<body>
    <?php
        $conn = new mysqli('localhost','root','','moviemangesystem');
        $conn->query("SET NAMES utf8");
        if($conn->connect_error){
            die("Connection Fail God damn it ". $conn->$conn_error);
        }
    ?>
    



</body>
</html>