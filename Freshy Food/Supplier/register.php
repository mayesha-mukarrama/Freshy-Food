<?php
session_start();
include "db.php";
if (isset($_POST["f_name"])) {

	$f_name = $_POST["f_name"];
	$l_name = $_POST["l_name"];
	$email = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$mobile = $_POST['mobile'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";

if(empty($f_name) || empty($l_name) || empty($username) || empty($password) || empty($repassword) ||
	empty($mobile) || empty($address1) || empty($address2)){
		
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
			</div>
		";
		exit();
	} else {
		if(!preg_match($name,$f_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $f_name is not valid..!</b>
			</div>
		";
		exit();
	}
	if(!preg_match($name,$l_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $l_name is not valid..!</b>
			</div>
		";
		exit();
	}
	if(!preg_match($usernameValidation,$username)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $username is not valid..!</b>
			</div>
		";
		exit();
	}
	if(strlen($password) < 6 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password Should be more than 6 character long</b>
			</div>
		";
		exit();
	}
	if(strlen($repassword) < 6 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password Should be more than 6 character long</b>
			</div>
		";
		exit();
	}
	if($password != $repassword){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>password is not same</b>
			</div>
		";
	}
	if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($mobile) == 11)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 11 digit</b>
			</div>
		";
		exit();
	}
	//existing email address in our database
	$sql = "SELECT supplier_id FROM supplier_info WHERE username = '$username' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_username = mysqli_num_rows($check_query);
	if($count_username > 0){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Username is already available Try Another Username</b>
			</div>
		";
		exit();
	} else {
		$password = md5($password);
		$sql = "INSERT INTO `supplier_info` 
		(`supplier_id`, `first_name`, `last_name`, `username`, 
		`password`, `mobile`, `address1`, `address2`) 
		VALUES (NULL, '$f_name', '$l_name', '$username', 
		'$password', '$mobile', '$address1', '$address2')";
		$run_query = mysqli_query($con,$sql);
		$_SESSION["uid"] = mysqli_insert_id($con);
		$_SESSION["name"] = $f_name;
		$ip_add = getenv("REMOTE_ADDR");
		
		if(mysqli_query($con,$sql)){
			echo "register_success";
			exit();
		}
	}
	}
	
}



?>




















































