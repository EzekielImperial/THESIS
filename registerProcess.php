<?php
	SESSION_start();
	require_once('connector.php');

		$marketEmail=$_POST['newemail'];
		$marketFirstName=$_POST['firstName'];
		$marketLastName=$_POST['lastName'];
		$marketPassword=$_POST['newpassword'];
		$userType=$_POST['userType'];
		$marketBirthDate=$_POST['birthDate'];
    $marketContactNum=$_POST['contactNum'];
    $marketStats=$_POST['Status'];
		$hash = md5( rand(0,1000) );


	if(!filter_var($marketEmail, FILTER_VALIDATE_EMAIL)) {
      	echo "<script>alert('Email is Invalid.');history.back();</script>";
   		exit;
    }

    if (!preg_match("/^[a-zA-Z ]*$/",$marketFirstName)) {
      	echo "<script>alert('Only letters and white space allowed.');history.back();</script>";
   		exit;
    }

    if (!preg_match("/^[a-zA-Z ]*$/",$marketLastName)) {
      	echo "<script>alert('Only letters and white space allowed.');history.back();</script>";
   		exit;
    }

	$stmt = $dbconn->prepare('SELECT * FROM users WHERE email = ?');
	$stmt->bind_param('s', $marketEmail);
	$stmt->execute();
	$result = $stmt->get_result();
	if($rows = $result->fetch_assoc()) {
		header("Content-Type: text/html; charset=UTF-8");
		echo "<script>alert('Email already exists.');history.back();</script>";
		$stmt->close();
		exit;
	} else {
		if ($userType == "student") {
			$stmt2 = $dbconn->prepare('INSERT INTO users (email, password, firstName, lastName, userType, birthDate, contactNum, userStatus, hash) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
			$stmt2->bind_param('sssssssds', $marketEmail, $marketPassword, $marketFirstName, $marketLastName, $userType, $marketBirthDate, $marketContactNum, $marketStats, $hash);
			$stmt2->execute();

				header('Location: index.php');
		}
		else if ($userType == "employee") {
			$query =  "INSERT INTO users (email, firstName, lastName, password, userType, birthDate, contactNum)values ('" . $marketEmail . "','" . $marketFirstName . "','" . $marketLastName . "','" . $marketPassword . "','" . $userType .  "','" . $marketBirthDate . "','" . $marketContactNum . "')";

			if(@mysqli_query($dbconn, $query)){
				header('Location: index.php');
			}else{
				echo mysqli_error($dbconn);
			}
		}


		require 'PHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		$mail->isSMTP();                                   // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                            // Enable SMTP authentication
		$mail->Username = 'imarketbns.team@gmail.com';          // SMTP username
		$mail->Password = 'igotyoubaby'; // SMTP password
		$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                 // TCP port to connect to

		$mail->setFrom('imarketbns.team@gmail.com', 'iMARKET B&S');
		$mail->addReplyTo('imarketbns.team@gmail.com', 'iMARKET B&S');
		$mail->addAddress($marketEmail);   // Add a recipient
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		$mail->isHTML(true);  // Set email format to HTML

		$bodyContent = '<h1>Welcome to iMarket, ' .$marketFirstName. '</h1>';
		$bodyContent .= 'Please click the link below to verify your account:<br/>';
		$bodyContent .= '<a href="http://localhost/THESIS/registerWelcome.php">http://localhost/THESIS/registerProcess.php?email='.$marketEmail.'&hash='.$hash.'</a>';

		$mail->Subject = 'iMARKET Account Verification';
		$mail->Body    = $bodyContent;

		if($mail->send()) {
		  echo "<script>alert('Email sent.');</script>";

		} else {

		  echo 'Message could not be sent.';
		  echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	}


?>
