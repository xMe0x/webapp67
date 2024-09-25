<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is main movie webpage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        h1{
            text-align:center;
            color:green;
        }
        table{

            text-align:center;  
        }
    </style>
</head>
<body>
<nav class="navbar navbar-light bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <h2 style="color:white">Movie Bio</h2>
          </a>
        </div>
      </nav>
    
<?php
    require 'conn.php';
    $sql = "SELECT * FROM moviebio";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ".$conn->$conn_error);
    }
?>
  <!-- //create table -->
        <table class="table table-hover ">
            <thead class="p-3 mb-2 text-white" style=" background-color:#6f42c1">
                <tr>    
                    <th>รหัสหนัง</th>
                    <th>ชื่อหนัง</th>
                    <th>รายละเอียด</th>
                    <th>ระยะเวลาหนัง(ชม.)</th>
                    <th>วันฉาย</th>
                    <th> แก้ไข </th>
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["movid"]."</td>"."<td>".$row["movname"]."</td>"."<td>".$row["movdetel"]."</td>"."<td>".$row["movduration"]."</td>"."<td>".$row["movdate"]."</td>"."<td>"."<a href='editmovie.php?movid=".$row["movid"]."'><button class='btn btn-warning'> Edit </button></a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>  <!-- //close table -->
        <br>
        <a href='insertmovie.php'><button class="btn btn-success"> Insert Movie</button></a>
        <a href='homepage.html'><button class="btn btn-primary"> Home</button></a>
</body>
</html>