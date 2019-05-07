<?php
	$con = mysqli_connect("localhost","root","","tdf");

		// Check connection
		if (mysqli_connect_errno())
		  {
		 	 echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

		  $output = '';

	if(isset($_POST['q'])) {
		$searchq = $_POST['q'];
		$searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

		// $q = mysqli_query($con, "SELECT * FROM question WHERE q_title LIKE '%$searchq%' OR q_desc LIKE '%$searchq%'") or die("Could not search!");
		$q = "SELECT * FROM question WHERE q_title LIKE '%$searchq%' OR q_desc LIKE '%$searchq%'";
		$result =$con->query($q);
		$count = mysqli_num_rows($result);
		if ($count == 0) {
			$output = 'No search results for!';
		}
		else{
			while ($row = mysqli_fetch_array($result)) {
				$topic = $row['q_title'];
				$question = $row['q_desc'];
				$id = $row['id'];

				$output .= '<div><h3><a href="q_details.php?id='.$id.'">'.$topic.'</a></h3><p>'.$question.'</p></div>';
			}

		}

	}
 echo ($output);
?>