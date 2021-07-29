<html>
<body>
	<?php
		$con = mysqli_connect('localhost','root','');
		if(!$con){
			die('Error in Connection'.mysqli_error());
		}
		else
		{
			echo "Connection to server was successufull";
		}

		$dbname = "mydb";
		$qry = "CREATE DATABASE $dbname";
		mysqli_query($con , $qry);
		
		echo "<br> Database Created with name $dbname ";
		
		//selecting data base
		$sel = mysqli_select_db($con , $dbname);
			if($sel)
				echo "<br> Database $dbname is selected successfully";
			else
				echo " <br> Database $dbname not selected";
		
		
$qry1 = "CREATE TABLE login1 ( uname varchar(40) NOT NULL , pword varchar(20) NOT NULL)";
		
		$tab = mysqli_query($con , $qry1);

		if($tab)
			echo "<br> Login Table created";
		else
			echo "<br> Login Table Not created";
		
		mysqli_close($con);
	?>
</body>
</html>