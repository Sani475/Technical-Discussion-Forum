<?php 
	include 'inc/admin_header.php';
?>	
		<div class="content">
			<div class="row">
				<div class="col-lg-12">
					<center>
						<h3>Total Messages</h3>
					 	<table border="2" width="600px">
					 		<tr>
					 			<th>NAME</th>
					 			<th>EMAIL</th>
					 			<th>SUBJECT</th>
					 			<th>MESSAGE</th>
					 			<th>DELETE</th>
					 		</tr>
					 		<!-- php code for retrieve database -->
					 		<?php
					 			$con = mysqli_connect("localhost","root","","tdf");

										// Check connection
										if (mysqli_connect_errno())
										  {
										 	 echo "Failed to connect to MySQL: " . mysqli_connect_error();
										  }
					 			$read = "SELECT * FROM contact";
					 			$retrieve = $con->query($read);
					 			//$row = mysqli_fetch_array($read);

					 			while($row = mysqli_fetch_array($retrieve)){
					 				$show_id = $row[0];
					 				$show_name = $row[1];
					 				$show_email = $row[2];
					 				$show_subj = $row[3];
					 				$show_message = $row[4];

					 				echo "<tr>
					 						<td>$show_name</td>
					 						<td>$show_email</td>
					 						<td>$show_subj</td>
					 						<td>$show_message</td>
					 						<td><a href='admin_message_delete.php?del=$show_id'>Delete</a></td>
					 					</tr>";
					 			}
					 			mysqli_close($con);

						 		?>
						 </table>
					</center>
				</div>
			</div>
		</div>
		
	</div>

</body>
</html>

<?php 
	include 'inc/footer.php';
?>	