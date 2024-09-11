<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sayHello(){
            echo "this is PHP";
            echo "<br>";
            echo "say Hello";
           
        }
        $funtion_holder = "sayHello";
        $funtion_holder();
    ?>
</body>
</html>