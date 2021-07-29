<html>
<head>
<title>
Providers List
</title>
<link rel="stylesheet" href="mporder.css">
<link rel="stylesheet" href="primary_styles.css">
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Spectral' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Old Standard TT' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
table
{
	border-color:#BDBDBD;
}
td
{
	text-align:center;
	font-size:27px;
	padding:15px;
}
th
{
	text-align:center;
	font-size:30px;
	padding:15px;
	color:tomato;
}
.call
{
	padding-bottom:7px;
	padding-top:7px;
	background-color:#00BFA5;
	width:100px;
	height:40px;
	text-align:center;
	border-radius:10px;
	font-size:18px;
	color:white;
	cursor:pointer;
}
</style>
</head>
<body>
<center>
<h1 class="title" style="color:#00BFA5">Providers List</h1>
<?php
$dst = $_POST['dst'];
//echo $dst;
$con = mysqli_connect('localhost','root','','mydb');
$name = $_POST['model'];
//echo $name;
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
		$provider = $get_provider_name[$name];
	//	echo $provider;
		$query = "select * from $provider where district='$dst'";
		$result = mysqli_query($con,$query);
		$stack = array();
		//while( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ) ) {
		//array_push( $stack, $row );
		?>
		<table border="0">
		<tr>
		<th>District</th>
		<th>Cost</th>
		<th>Availability</th>
		<th>Contact</th>
		</tr>
		<?php 
		if(mysqli_num_rows($result)==0)
		{
			echo '<tr><td colspan="4">Sorry currently we dont have any suppliers at this movement in your area</td></tr>';
		}
		else
		{
			while($row=mysqli_fetch_assoc($result))
			{
				echo "<tr><td>{$row['district']}</td>
				<td>₹ {$row['cost']}</td>
				<td>{$row['availability']}</td>
				<td><a href='tel:{$row['contact']}'><button class='call'>Call <i class='fa fa-phone'></i></button></a></td>\n";
			}
		}
		?>
		</table>
		<?
}

?>
</center>
</body>
</html>