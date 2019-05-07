<?php 

	include 'inc/header.php';
	require_once 'helper/session.php';
	$sc = new session;
	if(isset($_SESSION['user'])){
		header("location:forum.php");
	}
 ?>
 <head>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <div id="top_slide_carousel" class="carousel slide  carousel-fade" data-ride="carousel">

			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="header_text_area">
						<div class="hero_bg slide_bg_1" data-velocity="0.8"></div>
							<div class="container">
								<div class="row">
									<div class="col-md-6 pull-right">
										<div class="header_text">
										<h2>Share to Explore</h2>
											<p>Share your problem & get solution.</br>
											Also spread your knoledge to help other.
											</p>
											<a href="#signup">Sign Up</a>
											<a href="#login">Log In</a>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
				<div class="item">
					<div class="header_text_area">
						<div class="hero_bg slide_bg_2" data-velocity="0.8"></div>
							<div class="container">
								<div class="row">
									<div class="col-md-6 pull-right">
										<div class="header_text">
										<h2>Share to Explore</h2>
											<p>Share your problem & get solution.</br>
											Also spread your knoledge to help other.
											</p>
											<a href="#signup">Sign Up</a>
											<a href="#login">Log In</a>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
				<div class="item">
					<div class="header_text_area">
						<div class="hero_bg slide_bg_3" data-velocity="0.8"></div>
							<div class="container">
								<div class="row">
									<div class="col-md-6 pull-right">
										<div class="header_text">
											<h2>Share to Explore</h2>
											<p>Share your problem & get solution.</br>
											Also spread your knoledge to help other.
											</p>
											<a href="#signup">Sign Up</a>
											<a href="#login">Log In</a>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
 
			<a class="left slide_control" href="#top_slide_carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
			<a class="right slide_control" href="#top_slide_carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
		
		</div>	
	
	
	</section>

	
	<!-- END OF HEADER & HERO SECTION -->
   <!-- Registration  -->
 <div class="join">
   <div class="row">
   		<div class="col-md-4 registration" id="signup">
			<form action="" method="post" id="regform">
				<h2 class="reg_sup">Sign Up</h2>
				<table style="height: 200px;">
					<tr>
						<th style="color: black">Name:</th>
						<td><input type="text" name="name" class="name" required></td>
					</tr>
					<tr>
						<th style="color: black">Email:</th>
						<td><input type="email" name="email" class="email" required></td>
					</tr>
					<tr>
						<th style="color: black">Password:</th>
						<td><input type="password" name="pass" class="password" required></td>
					</tr>
					<tr>
						<th style="color: black">Confirm Password:</th>
						<td><input type="password" name="conpass" class="confirm-password" required></td>
					</tr>						
					<tr>
						<td></td>
						<td><button class="btn btn-primary">Sign Up</button><span class="regalert"></span></td>
					</tr>
					
				</table>
			</form>
   		</div>
   		<div class="col-md-4">
   			
   		</div>
   		<div class="col-md-4 login" id="login">
			<form action="login_process.php" method="post" id="">
				<h2  class="reg_login">Log In</h2><br>
				<table style="height: 120px;">
					<tr>
						<th style="color: black">Email:</th>
						<td><input type="email" name="email" class="logemail"></td>
					</tr>
					<tr>
						<th style="color: black">Password:</th>
						<td><input type="password" name="password" class="logpassword"></td>
					</tr>
					<tr>
						<td></td>
						<td><button class="btn btn-primary">Log In</button><span class="logalert"></span></td>
					</tr>
					
				</table>
			</form>
   		</div>
   </div>

</div>


<!-- About Area -->

<div class="about" id="about_area">
	<div class="row">
			<div class=" col-md-8 about_form">
				<br><center><h3 style="color: white">Get to know a little</h3></center>
					<p style="font-size: 18px">
						<strong>The Technical Discussion Forum(TDF)</strong> is a discussion forum that gives information about various programming languages, general knowledge related questions, information.<br><br>

						This forum is useful for the beginners to get information related to various topics. There is a centralized database in which all the information is managed. The administrator acts as the highest authority and has the rights to update, delete and edit the database. The user has to create the account to access the data. Once the user has created the account in the database he becomes the connected user. When some other user asks the questions these connected user if knows the answer can reply the answer it. The user who logged in can select the questions according to the category. The administrator can insert new topic dynamically. The connected user while logged in can exchange messages with each other. If the message is present in the database the answer is received to the person who asked the question immediately. When the user asks the question related to any topic all the related question and their answers will be displayed. This site also gives the number of times the question is viewed and number of times the question is answered. This site also gives us information who had asked the questions and which users has replied to those question.
					</p>

				
					<aside style="float: right;">
						<h4>Find Developers</h4>
						<h4>
						<a href="https://www.facebook.com/Technical-Discussion-Forum-1905802566366419/" class="fa fa-facebook-official"></a>
						<a href="https://twitter.com/TechForum35" class="fa fa-twitter-square"></a>
						<a href="https://plus.google.com/u/0/116601355469200685578" class="fa fa-google-plus-official"></a>
						<a href="https://www.linkedin.com/in/tech-forum-934149143/" class="fa fa-linkedin-square"></a>
						<a href="https://www.github.com" class="fa fa-github-square"></a>
						<a href="https://www.youtube.com" class="fa fa-youtube-play"></a>
						</h4>	
					</aside>
					
			</div>
		
	</div>
</div>

<!-- Contact Area -->

	<div class="contact" id="contact_area">
		<center>
			<div class="contact_form">
				<form action="" method="POST">
				<br><h3 style="color: white">Feel Free To Leave Your Messege</h3>
					<input type="text" name="name" placeholder="Name"><br><br>		
					<input type="email" name="email" placeholder="Email"><br><br>	
					<input type="text" name="subj" placeholder="Subject"><br><br>	
					<textarea rows="5" cols="45" placeholder="Message" name="message"></textarea><br><br>
					<button class="btn btn-success" name="send" id="send">Send</button>	
				</form>

			</div>
		</center>
	</div>
<?php
	
	if(isset($_POST['send'])){
		
		if( empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subj']) || empty($_POST['message'])){
			echo "<script>
 				alert('Fill every field!');
 			</script>";
		}


		else{
			
			$name = $_POST['name'];
			$email = $_POST['email'];
			$subj = $_POST['subj'];
			$msg = $_POST['message'];

			$con = mysqli_connect("localhost","root","","tdf");

			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

			 $save = "INSERT INTO contact(name,email,subject,message) VALUES('$name','$email','$subj','$msg') ";
			 if( $insertion = $con->query($save) ){


 			echo "<script>
 				alert('Email has been sent successfully.Thanks for your feedback');
 			</script>";
			 }
		}
	}

	
	// echo $name;
	// echo $email;
	// echo $subj;
	// echo $msg;

?>
	
<?php 
	include 'inc/footer.php';

 ?>