<!DOCTYPE html>
<html>
<head>
<title>Result</title>
	<div class="topnav">
  
  <a class="active" href="https://resultapi.herokuapp.com/UpResult.php">Result</a>
  

  <a id="logout" href="https://resultapi.herokuapp.com/Admin.php">Log out</a>
</div>
<CENTER><h1><font color="Red">  Harpara High School</font></h1></CENTER>
	
	<link rel="stylesheet" type="text/css" href="Style5.css">
		<link rel = "icon" href =  "RU Logo2.jpg" type = "image/x-icon">

</head>
		
<body>
		<center>
	<fieldset>
		<LEGEND>Update Result</LEGEND>

		<label>Class 10 Section -A (Science) Result </label> <br>

		<input type="button" value="Update" onclick="apply()"><br>

		<label>Class 10 Section -B (Commerce) Result </label> <br>

		<input type="button" value="Update" onclick="apply()"><br>

	
		<label>Class 10 Section -C (Arts) Result </label> <br>

		<input type="button" value="Update" onclick="apply()"><br>

	
	

		
</form>


	</fieldset>
	<script type="text/javascript">
			
			function apply(){


				

				
				window.location = "https://resultapi.herokuapp.com/UPDATEresul.php";

				

			}
			
			</script>
	

</center>
<body bgcolor="#E5EC19">
</body>
</html>
