<?php

	session_start();
	require_once('connector.php');

	$userType=$_POST['userType'];
	$userName=$_POST['email'];
	$password=$_POST['password'];
	$userStatus = 1;

	if(!filter_var($userName, FILTER_VALIDATE_EMAIL)) {
      	echo "<script>alert('Email is Invalid.');history.back();</script>";
   		exit;
    }



				$stmt = $dbconn->prepare('SELECT * FROM users WHERE email = ? AND password = ? AND userType = ? AND userStatus = ?');
				$stmt->bind_param('sssi', $userName, $password, $userType, $userStatus);
				$stmt->execute();
				$result = $stmt->get_result();



			if ($userType == "student" || $userType=="employee") {

				if($rows = $result->fetch_assoc()){
					$_SESSION['email']=$rows['email'];
					$_SESSION['user_ID']=$rows['user_ID'];
					$_SESSION['password']=$rows['password'];
					$_SESSION['userType']=$rows['userType'];
					$userStatus=$rows['userStatus'];
					echo"<script>window.alert('Welcome');</script>";
					echo"<script>location.href='index.php';</script>";

				}else{
					echo"<script>window.alert('Email Address/Password/Usertype Incorrect');</script>";
					echo"<script>location.href='login.php';</script>";
					echo mysqli_error($dbconn);
				}
			}



			else if ($userType == "admin") {

				if($rows = $result->fetch_assoc()){
					$_SESSION['email']=$rows['email'];
					$_SESSION['password']=$rows['password'];
					$_SESSION['userType']=$rows['userType'];
					$userStatus=$rows['userStatus'];
					echo"<script>window.alert('Welcome Administrator :)');</script>";
					echo"<script>location.href='index.php';</script>";
				}else{
					echo"<script>window.alert('Email Address/Password/Usertype Incorrect');</script>";
					echo"<script>location.href='login.php';</script>";
					echo mysqli_error($dbconn);
				}
			}
?>
