<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Insert Movie</title>
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
            <h2 style="color:white">Insert Movie</h2>
          </a>
        </div>
      </nav>
    <div class="container">
<form method="post" action="insertmovsus.php" class="shadow-lg p-3 mb-5 bg-white rounded">
    <div class="form-group">
    <p>
 
    <label>รหัสหนัง</label>
    <input type="text" name="movid" id="movid"class="form-control form-control-lg">
 
    </p>
    <p>
 
            <label>ชื่อหนัง</label>
            <input type="text" name="movname" id="movname"class="form-control form-control-lg">
 
        </p>
 
        <p>
 
            <label>รายละเอียด</label>
 
            <input type="text" name="movdetel" id="movdetel"class="form-control form-control-lg">
 
        </p>
 
        <p>
 
            <label>ระยะเวลาหนัง(ชม.)</label>
 
            <input type="time" name="movduration" id="movduration"class="form-control form-control-lg">
 
        </p>
 
        <p>
 
            <label>วันฉาย</label>
 
            <input type="date" name="movdate" id="movdate"class="form-control form-control-lg">
 
        </p>
        <button type="submit" class="btn btn-primary" >Submit</button>
   
 
      <div>
    </form>
 
</div>
   
</body>
</html>