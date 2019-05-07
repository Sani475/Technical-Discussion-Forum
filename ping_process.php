<?php
	require_once 'config/dbconfig.php';
	require_once 'helper/session.php';
	$db = new Database;
	$sc = new session;

	$logedUser = $db->selection("users",array(
			'where' => array('email'=>$_SESSION['email']),
			'return_type' => 'one'
		)
	);
	
	$isPinged = $db->selection("ping",array(
			'where' => array('user_id'=>$logedUser['id'],'q_id'=>$_POST['q_id']),
			'return_type' => 'one'
		)
	);

	if(!$isPinged){
		//insertion
		$isInserted = $db->insertion("ping",array(
				"user_id" => $logedUser['id'],
				"q_id" => $_POST['q_id']
			)
		);
		if($isInserted){
			echo "true";
		}
	}else{
		//deletion
		$deleted = $db->delete("ping",
			array('user_id'=>$logedUser['id'],'q_id'=>$_POST['q_id'])
		);		
		if($deleted){
			echo "false";
		}
	}


