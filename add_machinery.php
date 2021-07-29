<html>
<head>
<title>
Add your Machinary
</title>
<link rel="stylesheet" href="mporder.css">
<link rel="stylesheet" href="primary_styles.css">
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Spectral' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Old Standard TT' rel='stylesheet'>
</head>
<body style="padding:0px;margin:0px;">
  <div class="header">
    <a href="home.html" class="logo"><img src="AGRO.jpg" width="120"height="60"></a>
    <div class="header-right">
      <a class="active" href="sign.html">Logout</a>
	  <a href="about.html">About us</a>
	  <a href="model.html">Models</a>
	   <a href="home.html">Home</a>
	   </div>
  </div>
<center>
<h1 class="machinery_title">
Add Machinery
</h1>
<p style="color:#BDBDBD;font-size:14pt;">Now adding you machinery is super easy. You can easily fill in the details in short and add your machinery in the AGROMART.</p>
<p class="hint">Select your machinery from the below : </p>
<form method="post" action="add_machinery_data.php">
<select class="selecter" id="model" onchange="displayCount()" name="model_type">
<option value="chs">Choose</option>
<option value="Tractor">Tractor</option>
<option value="Advanced Ace Tractor">Advanced Ace Tractor</option>
<option value="Sprayer">Sprayer</option>
<option value="Field Cultivator">Field Cultivator</option>
<option value="Shredder & Cutter">Shredder & Cutter</option>
<option value="Seeder & Planter">Seeder & Planter</option>
<option value="Plough">Plough</option>
<option value="Baler">Baler</option>
<option value="Slurry Tank">Slurry Tank</option>
<option value="Seed Drill">Seed Drill</option>
<option value="Mower">Mower</option>
</select>
<div class="machinery_count" id="Count"></br></br>
<p class="hint">Select the count of machinery you had</p>
<input type="number" class="count_input" placeholder="Count" title="Count of Machinery" onkeyup="showDstrct()" id="no" name="count"
required />
</br></br>
<p class="hint">Please provide the cost (minimum is 200/day) </p>
<input type="number" class="count_input" placeholder="Cost" title="Machinery Cost" id="cost" name="cost" value="200"
style="width:200px;" required><br/><br/>
<p class="hint">Please provide the contact </p>
<input type="tel" class="count_input" placeholder="Contact" title="Machinery Contact info" id="contact" name="contact" size="10" maxlength="10"
style="width:200px;" required><br/><br/>
<select class="selecter" onchange="showBtn()" name="dstrct" id="dstrct" style="display:none;" >
<option value="chs">Choose</option>
<option value="Karimnagar">Karimnagar</option>
<option value="Jagityal">Jagityal</option>
<option value="Kamareddy">Kamareddy</option>
<option value="Adilabad">Adilabad</option>
<option value="Khammam">Khammam</option>
<option value="Medak">Medak</option>
<option value="Nalgonda">Nalgonda</option>
<option value="Nizamabad">Nizamabad</option>
<option value="Hyderabad">Hyderabad</option>
<option value="Siddipet">Siddipet</option>
<option value="Vikarabad">Vikarabad</option>
<option value="Warangal">Warangal</option>
<option value="Wanaparthy">Wanaparthy</option>
<option value="Mancherial">Mancherial</option>
<option value="Mahaboobnagar">Mahaboobnagar</option>
</select>
<input type="submit" class="btn" id="btn" value="Add">
</div>
</form>
</center>
</body>
<script>
var arr
function showDstrct()
{
	if(document.getElementById("no").value>0)
	{
		document.getElementById("dstrct").style.display="block";
	}
	else
	{
		document.getElementById("dstrct").style.display="none";
		document.getElementById("btn").style.display="none";
		alert("Machinery count should be more than or equal to 1");
	}
}
function showBtn()
{
	if(document.getElementById("dstrct").value!="chs")
	{
		document.getElementById("btn").style.display="block";
	}
	else
	{
		document.getElementById("btn").style.display="none";
		alert("Select the district for better results ");
	}
}
function displayCount()
{
	if(document.getElementById("model").value!="chs")
	{
		document.getElementById("Count").style.display="block";
	}
	else
	{
		document.getElementById("Count").style.display="none";
	}
}
</script>
</html>