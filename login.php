<html>
	<body>
	<?php
       
		$name=$_POST['uname'];
		$pwd=$_POST['pw'];
		
		$con = mysqli_connect('localhost','root','','mydb');
		if(!$con)
		{
			die('Error in Connection'.mysqli_error());
		}
		$sel = mysqli_select_db($con , 'mydb');
		if(!$sel)
			echo " <br> Database not selected";
		$res = mysqli_query($con ,"SELECT * From users");
		$var=1;
		
		while($row = mysqli_fetch_array($res))
		{
       if(strcmp($row['username'],$name)==0 && strcmp($row['password'],$pwd)==0)
			{    
				$var=0;
				header("Location: main.html");
				break;
			}
		}
		if($var==1){
			
			header("Location: login.html");
			
		}
        mysqli_close($con);
		?>
	</body>
</html>