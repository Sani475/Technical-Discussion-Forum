<?php 
	include 'inc/admin_header.php';
?>	
<?php

			$con = mysqli_connect("localhost","root","","tdf");

			// Check connection
			if (mysqli_connect_errno())
			  {
			 	 echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

			 $all_user = mysqli_query($con,"SELECT * FROM users");
			$total_user = mysqli_num_rows($all_user); /*count the total records in the database*/

			 $all_question = mysqli_query($con,"SELECT * FROM question");
			$total_question = mysqli_num_rows($all_question); /*count the total records in the database*/
?>
		<div class="container">
			
			<div class="row">
				<br>
				<center><h2 style="color:#2c3e50;"><b>Welcome to TDF admin panel!</b></h2></center>
				
					<div class="col-lg-4 users">
						<center>
							<h2>Total Users</h2><br>
							<?php echo"<h1>". $total_user."</h1>";?>
						</center>
					</div>
					<div class="col-lg-4 questions">
						
						<center>
							<h2>Total Questions</h2><br>
							<?php echo "<h1>". $total_question."</h1>";?>
						</center>
						
					</div>
			</div>
		</div>
		

</body>
</html>

<?php 
	include 'inc/footer.php';
?>	
