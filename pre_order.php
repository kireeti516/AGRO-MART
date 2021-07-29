<html>
<head>
<title>
Pre Ordering
</title>
<link rel="stylesheet" href="mporder.css">
<link rel="stylesheet" href="primary_styles.css">
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Spectral' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Old Standard TT' rel='stylesheet'>
</head>
<body onload="initiateScreen()">
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
<h1 class="title"> Select your district(location)</h1>
<h2 class="title" id="model-name">select model</h2>

<form method="post" action="providers_list.php">
<select name="model" class="selecter">
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
</br></br>
<select class="selecter" id="dst" name="dst">
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

<div class="details">
<p class="hint">The details you have selected are :</p>
<p class="hint" id="dst-d"></p>
<input type="submit" class="btn-get-list" value="Get Providers List"/>
</form>
</div>

</center>
</body>
<script>
var model="";
dst  = document.getElementById("dst-d");
var arr={"knr":"Karimnagar","jgt":"Jagityal","kmr":"Kamareddy","adb":"Adilabad","kmm":"Khammam","mdk":"Medak","ngd":"Nalgonda","nzb":"Nizamabad",
"hyd":"Hyderabad","sdpt":"Siddipet","vkb":"Vikarabad","wgl":"Warangal","wpt":"Wanaparthy","mncl":"Mancherial","mhb":"Mahaboobnagar"};
function initiateScreen()
{
	model = localStorage.getItem('name');
	document.getElementById("model-name").textContent = model;
}
function display()
{
	if(document.getElementById("dst").value=="chs")
		alert("Choose a district");
	else
	{
		dst.textContent = ""+arr[document.getElementById("dst").value];
	}
}
</script>
</html>