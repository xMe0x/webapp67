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
        function checkTemp($temp1,$temp2){
            return $temp1<0 && $temp2>100||$temp2<0 && $temp1 > 100;
        }
        var_dump(checkTemp(-1,120));
        var_dump(checkTemp(2,120));
    ?>
</body>
</html>