<html>
<body>
<?php
$model = $_POST['model_type'];
$count = $_POST['count'];
$dst = $_POST['dstrct'];
$cost = $_POST['cost'];
echo "$dst $cost $model $count";
?>
<script>
let uid = localStorage.getItem('uid');
document.cookie = "uid = " + uid;
</script>
<?php
$uid = $_COOKIE['uid'];
echo $uid;
$phone = $_POST['contact'];
$con = mysqli_connect('localhost','root','','mydb');
		if(!$con)
		{
			die('Error in Connection'.mysqli_error());
		}
		$sel = mysqli_select_db($con , 'mydb');
		if(!$sel)
			alert("Some error occured please try after a while");
		function alert($msg) {
		echo "<script type='text/javascript'>alert('$msg');</script>";
		}
	//Providers mapping
	$get_provider_name = array(
		"Tractor"=>"tractor_provider",
		"Advanced Ace Tractor"=>"advancedacetractor_provider",
		"Sprayer"=>"sprayer_provider",
		"Field Cultivator"=>"fieldcultivator_provider",
		"Shredder & Cutter"=>"shredder_provider",
		"Seeder & Planter"=>"seeder_provider",
		"Plough"=>"plough_provider",
		"Baler"=>"baler_provider",
		"Slurry Tank"=>"slurry_provider",
		"Seed Drill"=>"seeddrill_provider",
		"Mower"=>"mower_provider"
		);
	$provider_name = $get_provider_name[$model];
	$insert_query = "insert into $provider_name(userid,district,cost,availability,contact) VALUES('$uid','$dst','$cost','$count','$phone')";
	$success = mysqli_query($con , $insert_query) or trigger_error("Query Failed! SQL: $insert_query - Error: ".mysqli_error($con), E_USER_ERROR);
	if($success)
	{
		echo "Success";
		header("Location: on_successfully_added.html");
	}
	mysqli_close($con);
?>
</body>
</html>