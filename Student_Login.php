<!DOCTYPE html>
<html>

	<head>
		
		<title>
		
				Student Login
		
		</title>
		
		<link rel = "icon" href =  "RU Logo2.jpg" type = "image/x-icon">

		<link rel="stylesheet" type="text/css" href="Style3.css">
	<div class="topnav">
  

  <a class="active" href="Student_Login.php">Student Login</a>
  <a href="Admin.php">Admin Panel</a>
   <input type="text" placeholder="Search..">
</div>
		
		<body>
			<br>
			<CENTER>
				<fieldset>
					<LEGEND>Student Login Panel</LEGEND>
			<form action="">
  			<h2>Student ID  </h2>
  			<input type="text" name="Student_ID" size="20" align="center" id="roll" required><br>
  			<h2>Password  </h2> 	
  			<input type="password" name="Password" size="20" id="pass" required><br><br>
  			<b><input type="button" value="Login" size="40" onclick="validate()"></b>
  			<input type="reset" value="Reset">
			</form>
			</frameset>
			</CENTER>
			

			<script type="text/javascript">
			
			function validate(){


				var roll = document.getElementById("roll").value;
				var pass = document.getElementById("pass").value;
				if(roll =="sudarshan" && pass =="123456789"){

				
				window.location = "http://localhost/Harpara_High_School/Result.php";

				}
				else{

					window.alert("Invalid User ID or Password!");
				}
				


			}
			
			</script>
			
			<body bgcolor="#527E7F">
		
		</body>
		
	
	</head>







</html>