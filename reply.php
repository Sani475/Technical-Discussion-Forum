<?php 
  require_once 'helper/session.php';
  require_once 'config/dbconfig.php';
  $db = new Database;
  $sc = new session;
  if(isset($_POST)){

      $tbName = "users";
      $selectArr = array(
        'where' => array('email'=>$_SESSION['email'] ),
        'return_type' => 'one'
      );
      $user = $db->selection($tbName,$selectArr);

      $qName = "question";
      $qArr = array(
        'where' => array('id'=>$_POST['q_id'] ),
        'return_type' => 'one'
      );
      $question = $db->selection($qName,$qArr);
      //var_dump($question); exit();
      $tbName = "answers";
      $cond = array(
        "q_id" => $question['id'],
        "q_reply" => $_POST['reply_text'],
        "replier_name" => $user['name']
      );
      $isInserted = $db->insertion($tbName,$cond);
      $query_string = "?id=".$_POST['q_id'];
      if($isInserted){
        header("Location:q_details.php".$query_string);
      }
  }