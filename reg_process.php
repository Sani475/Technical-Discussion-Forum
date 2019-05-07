<?php 


	require_once 'config/dbconfig.php';
	$db = new Database;

	//selection
	$tbName = "users";
	$selectArr = array(
	  //'select' => array('id','task','time'),
	  'where' => array('email'=>$_POST['email']),
	  //'order_by' => 'id DESC',
	  //'limit' => array('0','2'),
	  'return_type' => 'one'
	);
	$selectAll = $db->selection($tbName,$selectArr);

	if($selectAll){
		echo "email is already taken.";
	}else{

		//insertion
		$cond = array(
		  "name" => $_POST['name'],
		  "email" => $_POST['email'],
		  "password" => md5($_POST['password'])
		);
		$isInserted = $db->insertion($tbName,$cond);

		if($isInserted){
			echo "<script>
			alert('You are registered.');
			window.location.href='index.php';
			</script>";
		}else{
			echo "<script>
			alert('ooops something went wrong.');
			window.location.href='index.php';
			</script>";
		}


	}

