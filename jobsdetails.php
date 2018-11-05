<!DOCTYPE html>
<html>
<head>
<title> Job detail</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body class="container">
<?php  
require("connection.php");
session_start();

        $id=$_GET['id'];
       $query="SELECT * FROM job WHERE id=$id";
       $result=mysqli_query($conn,$query);
       
if(isset($_SESSION['username'])){
                $username=$_SESSION['username'];

                  
echo "<div class='card'>";
echo "<div class='box'>";
echo "<div class='img'>";
echo "<img src='jobimage.jpg'>";
echo "</div>";
echo "<h2>All details about this job<br></h2>";
       
       echo "<table class='table table-hover table-dark'>";
        foreach ($result as $job) {
            
        echo "<tr>";
        echo "<td>".$job['title']."</td>";
        echo "<td>".$job['companyname']."</td>";
        echo "<td>".$job['salary']."</td>";
        echo "<td>".$job['type']."</td>";
        echo "<td>".$job['address']."</td>";
        echo "<td>".$job['reqirement']."</td>";
        echo "<td>".$job['description']."</td>";
        echo "<td>".$job['email']."</td>";
        echo "<td>".$job['phone']."</td>";
        echo "</tr>";


        }

        echo "</table>"."</div>";
                
    }
           
           
        
  
?>
</body>
</html>


