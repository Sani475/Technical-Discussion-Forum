<?php 
	 include 'inc/header2.php';
 ?>

<div class="ask_form">
		<h2 style="text-align: center; color: white;">Ask Your Desire?</h2>

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
    border: 1px solid  white;  
    position: relative;
	bottom:3em;
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
  
  position: relative;
  top: 2em;
  

}
input, textarea{
  width: 15em;
border: 1px solid white;
}

  </style>
</head>
<body>
<header>
<div class="container">
	<div class="row" id="none1">
        <div class="col-sm-6 col-sm-offset-3">
        
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search" >
                    <span class="input-group-addon" style="border-color:white; border-left: 1px solid white;">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
          
        </div>
	</div>
</div>
</header>

<div class="container">
<div class="clearfix">
<button onclick="location.href='forum.php'" class="button">Forum</button>
</div>
<div  style="border-top:1px solid white;margin-top: -5em;">
</div>
</div>

<div class="container">
  <form action="ask_process.php" method="post">
    <strong>&#160;&#160;&#160;&#160;&#160;&#160;Create Question</strong><br><br>
    &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<b>Topic:</b>
    &#160;&#160;&#160;&#160;&#160;&#160;<input type="text" name="q_title"><br><br>
    &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<b>Question:</b>
    &#160;&#160;&#160;&#160;<textarea name="q_desc"></textarea><br><br><br>
      <button type="submit" class="btn btn-success" style="margin-left: 290px;">Post</button>
  </form>
</div>



</div>








 <?php 
	 include 'inc/footer.php';
  ?>