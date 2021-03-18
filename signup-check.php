<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['fname'])&& isset($_POST['lname'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	
	$fname = validate($_POST['fname']);
	$lname = validate($_POST['lname']);

	$emailadd = validate($_POST['emailadd']);
	$phoneNo = validate($_POST['phoneNo']);

	$user_data = 'uname='. $uname. '&fname='. $fname. '&lname='. $lname. '&emailadd='. $emailadd. '&phoneNo='. $phoneNo;


	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	

	else if(empty($fname)){
        header("Location: signup.php?error=First Name is required&$user_data");
	    exit();
	}
	else if(empty($lname)){
        header("Location: signup.php?error=Last Name is required&$user_data");
	    exit();
	}
	
	else if(empty($emailadd)){
        header("Location: signup.php?error=Email is required&$user_data");
	    exit();
	}
	else if(empty($phoneNo)){
        header("Location: signup.php?error=Phone Number is required&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name,first_name, last_name,email, password, phone_number) VALUES('$uname','$fname', '$lname', '$emailadd', '$pass', '$phoneNo')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}