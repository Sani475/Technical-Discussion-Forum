<?php 
	require_once 'config/dbconfig.php';
	require_once 'helper/session.php';
	$db = new Database;
	$sc = new session;	
	if(isset($_POST)){
		
		//insertion
		$selectUser = array(
		  'where' => array('email'=>$_SESSION['email'] ),
		  'return_type' => 'one'
		);
		$user = $db->selection("users",$selectUser);

		$cond = array(
		  "user_id" => $user['id'],
		  "q_title" => $_POST['q_title'],
		  "q_desc" => $_POST['q_desc']
		);
		$isInserted = $db->insertion("question",$cond);
		if($isInserted){
			$sc::setter('q_added','new question added.');
			header("Location:forum.php");
		}else{
			$sc::setter('q_added','question not created.');
			header("Location:forum.php");
		}
	}