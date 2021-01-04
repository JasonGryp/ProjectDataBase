
<!DOCTYPE html>
<html>
<head>
	<title>Project Team 46</title>
	<script type="text/javascript">
		function typeChoose(s1)
		{
			var type = document.getElementById(s1);
			if(s1.value=="house")
			{

			}
			else if(s1.value=="working place")
			{

			}
			else if(s1.value=="land")
			{

			}
		}
	</script>
</head>
<body>
	<div id="searchdiv">
		<form action="includes/search.inc.php" method="POST">
			<label for="type" id='type'>Choose type of property:</label>
			<select name="type" id="type">
				<option value="house">Living Space</option>
				<option value="working place">Working Space</option>
				<option value="land">Land</option>
			</select>
		</form>
	</div>

	<!--this is the sign up section -->
	<div>
		<form action="includes/signup.inc.php" method="POST">
			<input type="text" name="onoma" placeholder="User Name">
			<br>
			<input type="Password" name="password" placeholder="Password">
			<br>
			<input type="text" name="email" placeholder="E-mail">
			<br>
			<input type="text" name="tilefono" placeholder="Phone Number">
			<br>
			<button type="submit" name="submit">Sign up</button>
		</form>
	</div>

</body>
</html>