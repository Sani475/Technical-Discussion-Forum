<?php     
	require_once 'config/dbconfig.php';
	require_once 'helper/session.php';
	$sc = new session;
	$db = new Database;
//var_dump($_POST);
	//selection
	if(isset($_POST)){
		$tbName = "users";
		$selectArr = array(
		  'where' => array('email'=>$_POST['email'] ,'password'=>md5($_POST['password']) ),
		  'return_type' => 'one'
		);
		$selectAll = $db->selection($tbName,$selectArr);
		if($selectAll){
	        session::setter('user','true');
			session::setter('email',$_POST['email']);
			header("Location:forum.php");
		}else{
			echo "<script>
			alert('username or password is invalid.');
			window.location.href='index.php';
			</script>";
		}
	}else{
		echo "<script>
		alert('something went wrong.');
		window.location.href='index.php';
		</script>";		
	}