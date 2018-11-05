<!DOCTYPE html>
<html>
<head>
	<title>add</title>
</head>
<body>
	<?php  
		require("connection.php");
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$type=$_POST['type'];

		if ($type=='owner') {
			$query="INSERT INTO users (name,email,password,address,phone,type) VALUES('$name','$email','$password','$address','$phone','$type')";
		$result=mysqli_query($conn,$query);
		if ($result) {
			header("location:register.html");
		}else{	
			header("location:register.html");
			echo "you didnt register try again ";
		}

		}else{
			$query="INSERT INTO users (name,email,password,address,phone,type) VALUES('$name','$email','$password','$address','$phone','$type')";
		$result=mysqli_query($conn,$query);
		if ($result) {
			header("location:register.html");
		}else{	
			header("location:register.html");
			echo "you didnt register try again ";
		}
		} 
		
		
	?>

</body>
</html>