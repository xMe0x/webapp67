<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP variable via reference</title>
</head>
<body>
    <?php
        function addFive($num){
            $num +=5;
        }
        function addSix(&$num){
            $num +=6;
        }

        $orignum = 10;
        $sum = addFive($orignum);
        echo "Original value is $orignum";
        echo "<br>";
        addSix($orignum);
        echo "Original value is $orignum";
        
    ?>
</body>
</html>