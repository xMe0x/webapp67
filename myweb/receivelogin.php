<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="mySyle.css">
<link rel="stylesheet" href="phpstyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1> ยินดีต้อนรับ </h1>
    <div class="display">
        <?php
            $showuser = $_POST['user'];
            echo "Welcome to cs supermarket websit: $showuser";
        ?> 
        </div>
   <form action="shopping.html">
     <input type="submit" name="shop" value="shopping click here!">
</form>
</div>
</body>
</html>



