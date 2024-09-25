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
            <h2 style="color:white">Edit Profile</h2>
          </a>
        </div>
      </nav>
    <div class="container">
<?php
        if(!isset($_GET['mid'])){
            header("refresh: 0; url=main.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM memberbio WHERE mid='$_GET[mid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
<form method="post" action="editsuccessmember.php" class="shadow-lg p-3 mb-5 bg-white rounded">
        
<div class="form-row">
<div class="col">
            <label>ชื่อ</label>
            <input type="text" name="mid" id="mid" value="<?=$row['mid'];?>" hidden>
            <input class="form-control" type="text" name="mname" id="mname" value="<?=$row['mname'];?>" />

    </div>
    <br>
    <div class="col">  

            <label>นามสกุล</label>

            <input class="form-control"  type="text" name="mlastname" id="mlastname" value="<?=$row['mlastname'];?>" />
    </div>
    </div>
    <br>
    <div class="form-group">   
            <label>E-mail</label>
            <input type="email"  class="form-control" name="memail" id="memail" value="<?=$row['memail'];?>" />
        </div>
        <br>
        <div class="form-group"> 

            <label>เบอร์โทร</label>

            <input class="form-control"  type="text" name="mtelephon" id="mtelephon" value="<?=$row['mtelephon'];?>" />

    </div>
    <br>
        <input type="submit"  class="btn btn-success" value="บันทึก">
        <a href='main.php'><button class="btn btn-secondary"> Home</button></a>
    </form>

    </div>
</body>
</html>