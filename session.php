<?php
	session_start();
	
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	header('location:../index.php');
    exit();
	}
	
	include('../database/conn.php');

	$sq=mysqli_query($conn,"select * from `tbl_users` where userid='".$_SESSION['id']."'");
	$srow=mysqli_fetch_array($sq);
	
	$user=$srow['username'];
	$user_id=$srow['userid'];
	$work_id=$srow['word_access_id'];
?>