<?php 

	require_once "helper/session.php";
	$sc = new session;
	$sc::destroy();
	header("location:index.php");