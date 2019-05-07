<?php
	
	$con = mysqli_connect("localhost","root","","tdf");

		// Check connection
		if (mysqli_connect_errno())
		  {
		 	 echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
	if(isset($_GET['del'])){
		$del_id = $_GET['del'];

		$delete = "DELETE FROM contact WHERE id='$del_id' ";
		$exucute_del = $con->query($delete);
		if($exucute_del){
			//echo "<h2>User of id $del_id has been deleted successfully</h2><br>";
			mysqli_close($con);
			header("location:message_control.php");
			//echo "<a href='read.php'><h2>Show Database</h2></a> ";
		}
		else{
			echo "Could Not Delete!<br>";
		}

	}
?>