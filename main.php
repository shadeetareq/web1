<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="regstyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="navbar.css">

	<title>Job Cards</title>
	<style type="text/css">
		
		.row{
			padding: 20px;
			font-family: cursive;
			
		}
		.img{

			width: 30%;
      height: 60%;

		}
    .card1{
      border: 1px solid black;
      margin:5px; 
      text-align: center;
    }


	</style>
</head>
<body class="container body" >
  <div class="header">
    
    <div >
    <ul id="list-nav">
        <li><a href="main.php">Home</a></li>
        <li><a href="addjob.html">my offers</a></li>
        <li><a href="#">my profile</a></li>
        <li><a href="login.html">sign out </a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
  </div>
<form method="">
 <?php 

  
  require("connection.php");
  if(isset($_SESSION['username'])){
                $username=$_SESSION['username'];

    $id=$_GET['id'];}
  //echo "<ul>";
  echo"<div style='width=100%'>";
  echo "<h2 style='font-family=cursive'></h2>";
  echo "<ul class='list-group'>";


  

  $query="SELECT * from job where kind='free' ";
  $result=mysqli_query($conn,$query);
      foreach ($result as $job){

    echo"<div class='cardst col-sm-6'>";
    echo "<div class='card card1'>";
    echo "<div class='card-body'>";
    echo "<h1 class='card-title'>".$job['title']."</h1>";
    if ($job['images']=='') {
       echo "<img src='job.jpg' class='img' alt='a photohere' >";
    }else{
     // echo "<img src=".$job['images']."class='img' alt='a photo'";
       echo "<img src=".$job['images']." />";
    }
    
    echo " <p class='card-text'>".$job['description']."</p>";   
    echo "<form method='get' action='jobsdetails.php'>";
     echo "<a href='jobsdetails.php' class='btn btn-primary'>show details about this job</a>";  
     echo("</form>");
    echo "</div>";
  echo "</div>";
    echo "</div>";
  
      }

  echo "</ul>";
  echo"</div>";
 ?>

	</form>



			

</body>
</html>