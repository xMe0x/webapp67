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
        function checkBtw($x,$y){
            return ($x <=20 || $x >=50) || ($y <=20 || $y >=50);
        }
        var_dump(checkBtw(14,51));
        var_dump(checkBtw(11,45));
        var_dump(checkBtw(25,40));
    ?>
</body>
</html>