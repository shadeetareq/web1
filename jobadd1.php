<!DOCTYPE html>
<html>
<head>
	<title>add</title>
</head>
<body>
	<?php  
	require("connection.php");
	$title=$_POST['title'];
	$companyname=$_POST['companyname'];
	$address=$_POST['address'];
	$description=$_POST['description'];
	$requirements=$_POST['requirements'];
	$Salary=$_POST['Salary'];
	$contact=$_POST['contact'];
	$kind=$_POST['kind'];
			
			
			if ($kind=='free') {
				$query="INSERT INTO job(title,companyname,address,description,requirements,Salary,contact,kind)VALUES('$title','$companyname','$address','$description','$requirements','$Salary','$contact','$kind')";
				$result=mysqli_query($conn,$query);
				
				header("location:jobcard.php");
			}else{
				
				$query="INSERT INTO job(title,companyname,address,description,requirements,Salary,contact,kind)VALUES('$title','$companyname','$address','$description','$requirements','$Salary','$contact','$kind')";
			$result=mysqli_query($conn,$query);
				header("location:jobcard.php");
			}

			
			


	?>

</body>
</html>