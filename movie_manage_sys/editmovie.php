<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditMember</title>
    <!-- <link rel="stylesheet"  href="style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-image:url(imag/wp8561052.png) ;
        }
        h1{
            text-align:center;
            color:green;
        }
        form{
            position: relative;
            top:30px;
          

        }
    </style>
</head>
<body>
<nav class="navbar navbar-light bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <h2 style="color:white">Edit detel Movie</h2>
          </a>
        </div>
      </nav>
    <div class="container">
<?php
        if(!isset($_GET['movid'])){
            header("refresh: 0; url=main.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM moviebio WHERE movid='$_GET[movid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
<form method="post" action="editmoviesuccess.php" class="shadow-lg p-3 mb-5 bg-white rounded">
<h1></h1>
<div class="col">
<div class="form-group">  
            <label>ชื่อ</label>
            <input type="text" name="movid" id="movid" value="<?=$row['movid'];?>" hidden>
            <input class="form-control" type="text" name="movname" id="movname" value="<?=$row['movname'];?>" />

    </div>
    <br>
   
    <div class="form-group">  
            <label>รายละเอียด</label>

            <input class="form-control"  type="text" name="movdetel" id="movdetel" value="<?=$row['movdetel'];?>" />
    
    </div>
    <br>
    <div class="form-group">   
            <label>ระยะเวลาหนัง(ชม.)</label>
            <input type="time"  class="form-control" name="movduration" id="movduration" value="<?=$row['movduration'];?>" />
        </div>
        <br>
        <div class="form-group"> 

            <label>วันฉาย</label>

            <input class="form-control"  type="date" name="movdate" id="movdate" value="<?=$row['movdate'];?>" />

    </div>
    <br>
        <input type="submit"  class="btn btn-success" value="บันทึก">
        <a href='main.php'><button class="btn btn-secondary"> Home</button></a>
    </form>

    </div>
</body>
</html>