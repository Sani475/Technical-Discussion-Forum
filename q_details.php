<?php 
	include 'inc/header2.php';
	$selectArr = array(
	  'where' => array('id'=>$_GET['id'] ),
	  'return_type' => 'one'
	);
	$question = $db->selection("question",$selectArr);
	$answers = $db->selection("answers",
		array(
	  		'where' => array('q_id'=>$_GET['id'] ),
	  		'return_type' => 'all'
		)
	);
//echo $question['view'];
//insertion
$updated = $db->update("question",array('id'=>$_GET['id']),array('view'=>$question['view']+1));

 ?>

<div class="reply_form">
	<h2 style="text-align: center; color: white;"></h2>
<style type="text/css">
  * {margin:0;padding:0;}
  body{
    background-color:  white;
  }
#imaginary_container{
    margin-top:20%; /* Don't copy this */
}
.stylish-input-group .input-group-addon{
    background: white !important; 
}
.stylish-input-group .form-control{
	border-right:0; 
	box-shadow:0 0 0; 
	border-color:white;
}
.stylish-input-group button{
    border:0;
    background:transparent;
}
#none1{
	position: relative;
	bottom:6em;
}

hr{
  border: 1px dotted black;
  margin-left: 3em;
   position: relative;
  bottom:3em;
  width: 30em;
}

.fa-comment-o{
  color: white;
}
.button {

    border: none;
    color: white;
      padding: 1px 1px 1px 1px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-weight: bold;
    margin:0 0;
    cursor: pointer;
    border: 1px solid white;
    background-color: white; 
    color: black; 
    position: relative;
    top: -5em;
    height: 2em;
    width:5em;
}
textarea{
  resize: none;
  width: 25em;
  border: 1px solid white;
  margin-bottom: 5px;
  height: 100px;
}
#none3{
  color: white; 
  background-color: black; 
  margin-left:380px; 
  width: 6em;
  height: 2em;
  position: relative;
  top: -3em;
  border-color: black;
}

footer{
  background-color: black;
  text-align:center;
  color: white;
  padding: 2px;
}


  </style>
</head>
<body>
<header>
<div class="container">
	<div class="row" id="none1">
        <div class="col-sm-6 col-sm-offset-3">
        </div>
	</div>
</div>
</header>

<div class="container">
	<div class="question_area">
		<div class="q_title">
			<h3><?php echo $question['q_title']; ?></h3>
		</div>
		<div class="q_desc">
			<p><?php echo $question['q_desc']; ?></p>
		</div>
		<h5>All answers</h5>
			<?php 
				foreach ($answers as $value) {
			?>
		<div class="q_reply">
			<p class="name">by <?php echo $value['replier_name']; ?></p>
			<p><?php echo $value['q_reply']; ?></p>
		</div>
			<?php } ?>
	</div>
    <div class="reply_area">
    	<div class="col-md-6">
    		
			<form action="reply.php" method="post">
				<input type="hidden" name="q_id" value="<?php echo $question['id']; ?>">
			    <textarea placeholder="reply" name="reply_text" class="form-control"></textarea>
			    <button class="btn btn-success pull-right">post</button>
			</form>
    	</div>
    </div>
</div>

<!-- <div class="container">
	<div class="col-md-6">
		<form action="#" method="post">
		    <textarea class="form-control"></textarea>
		    <button class="btn btn-success">post</button>
		</form>
	</div>
</div> -->


</div>


  <?php 
	 include 'inc/footer.php';
  ?>
