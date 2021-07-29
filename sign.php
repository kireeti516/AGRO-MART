<html>
	<body>
	  
	<?php
       
		
		$mail=$_POST['email'];
		$pwd=$_POST['psw'];
		
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
		$uid=1;
		while($row = mysqli_fetch_array($res))
		{$uid = $row['userid'];
       if(strcmp($row['email'],$mail)==0 && strcmp($row['password'],$pwd)==0)
			{    
				$var=0;
				?>
				<script>
				var uid = '<?php echo $uid; ?>';
				localStorage.setItem('uid',uid);
			//	alert(localStorage.getItem('uid'));
				</script>
				<?php
				header("Location: home.html");
				
				break;
			}
		}
		if($var==1){
			
		echo '<script type="text/javascript">
		if(confirm(" Invalid Credentials! ") == true)
		{
			javascript:history.back();
		}
		</script>';
		}
        mysqli_close($con);
		?>
	</body>
</html>