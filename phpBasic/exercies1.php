<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX1</title>
</head>
<body>
    <?php
        function addEnd($str){
            $s = substr($str,strlen($str)-1);
            return $s.$str.$s;

        }
        $test = addEnd("BluE");
        echo "This value is : $test"
    ?>
</body>
</html>