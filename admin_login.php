<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>
</head>
<body style="background-color: #34495e">
	<center >
		<div >
			<h1 style="padding-top: 20px; color: #f1c40f"><marquee>TDF Admin login</marquee></h1>
			<section style="background-color: #1abc9c; width: 300px; height: 250px; border-radius: 20px;">
			<form action="" method="POST" style="margin-top: 150px; padding: 50px;">
				<input type="text" name="name" placeholder="Username" style="width: 150px; height: 25px"><br><br>
				<input type="password" name="pass" placeholder="User Password" style="width: 150px; height: 25px"><br><br>
				<input type="submit" name="submit" value="Submit">
			</form>
			</section>
		</div>
	</center>
	<?php

		$username = "admin";
		$pass="tdf123";

		/*$name = $_POST['name'];
		$password = $_POST['pass'];*/

		if(isset($_POST['submit'])){

			if( ($_POST['name']==$username) && ($_POST['pass']==$pass) ){
				header("location:admin_panel.php");
				echo $name;
				echo $password;
			}
			else{
				echo "<script>
				alert('Wrong Password or Username');
				header('location:admin_login.php');
				</script>";
			}
		}
	?>
</body>
</html>