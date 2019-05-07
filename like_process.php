<?php
	require_once 'config/dbconfig.php';
	require_once 'helper/session.php';
	$db = new Database;
	$sc = new session;

	$user = $db->selection("users",array(
			'where' => array('email'=>$_SESSION['email']),
			'return_type' => 'one'
		)
	);

	$selectArr = array(
	  'where' => array('user_id'=>$user['id'],'q_id'=>$_POST['q_id']),
	  'return_type' => 'one'
	);
	$hasLiked = $db->selection("likes",$selectArr);

	if(!$hasLiked){
		//insertion
		$cond = array(
		  "user_id" => $user['id'],
		  "q_id" => $_POST['q_id']
		);
		$isInserted = $db->insertion("likes",$cond);
		if($isInserted){
			$likeCount = $db->selection("likes",array(
				  'where' => array('q_id'=>$_POST['q_id']),
				  'return_type' => 'rowCount'
				)
			);
			$new_array = array($likeCount,"true");
			echo json_encode($new_array);
			//echo "true";
		}
	}else{
		//deletion
		$cond = array('user_id'=>$user['id'],'q_id'=>$_POST['q_id']);
		$deleted = $db->delete("likes",$cond);		
		if($deleted){
			$likeCount = $db->selection("likes",array(
				  'where' => array('q_id'=>$_POST['q_id']),
				  'return_type' => 'rowCount'
				)
			);
			$new_array = array($likeCount,"false");
			echo json_encode($new_array);
			//echo "deleted";
		}
	}