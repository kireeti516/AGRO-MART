<html>
	<body>
	<?php

        
		$con = mysqli_connect('localhost','root','','mydb');
		if(!$con)
		{
			die('Error in Connection'.mysqli_error());
		}
		
		
		$sel = mysqli_select_db($con , 'mydb');
		if(!$sel)
		{
			echo " <br> Database not selected";
		}
		
		$uname = $_POST['usrnm'];
		$mail = $_POST['email'];
		$pwd = $_POST['psw'];
		// $cpwd=$_POST['rpsw'];
		$phno = $_POST['phoneno'];
		$address =$_POST['address'];
		echo "$mail";
      
	   $qry2 = "INSERT INTO users(username,email,password,phone,address) VALUES('$uname','$mail','$pwd','$phno','$address')";
	   $ins = mysqli_query($con , $qry2);
	   if(!$ins)
			echo "<br> Login data Not inserted successfully";
		else
		echo "<br> User $uname data inserted successfully";
		header("Location: home.html");
		
		
		mysqli_close($con);
		?>
	</body>
</html>

