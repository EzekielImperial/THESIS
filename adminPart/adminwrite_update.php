<?php
	require_once('../connector.php');

  //$_POST['boardno'] called
	if(isset($_POST['bno'])) {
		$bNo = $_POST['bno'];
	}

	//boardno non
	if(empty($bNo)) {
		$bID = $_POST['bID'];
		$date = date('Y-m-d H:i:s');
	}

  $bPassword = $_POST['bPassword'];
	$bTitle = $_POST['bTitle'];
	$bContent = $_POST['bContent'];


if(isset($bNo)) {

	$sql = 'select count(board_password) as cnt from announcement where board_password=password("' . $bPassword . '") and board_no = ' . $bNo;
	$result = $dbconn->query($sql);
	$row = $result->fetch_assoc();


		if($row['cnt']) {
			$sql = 'update announcement set board_title="' . $bTitle . '", board_content="' . $bContent . '" where board_no = ' . $bNo;
			$msgState = 'Fix';
		} else {
				$msg = 'Wrong Password Please Try again.';
			?>
				<script>
					alert("<?php echo $msg?>");
					history.back();
				</script>
			<?php
				exit;
			}

  //post upload
} else {
	$sql = 'insert into announcement (board_no, board_title, board_content, board_date, board_hit, board_admin, board_password) values(null, "' . $bTitle . '", "' . $bContent . '", "' . $date . '", 0, "' . $bID . '", password("' . $bPassword . '"))';
	$msgState = 'Post';
}

if(empty($msg)) {
	$result = $dbconn->query($sql);
	if($result) {
		$msg = "Announcement Succefully posted !";

		require '../PHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead

$mail->SMTPSecure = 'tls'; // if required
$mail->Port = 587; // or use the preferred port of your choice
$mail->Username = 'imarketbns.team@gmail.com';
$mail->Password = 'igotyoubaby';

$mail->addAddress('imarketbns.team@gmail.com', 'iMARKET B&S');
$mail->setFrom('imarketbns.team@gmail.com', 'iMARKET B&S');
$mail->addReplyTo('imarketbns.team@gmail.com', 'iMARKET B&S');
$mail->Subject = "iMARKET Admin Announcement";
//Same body for all messages, so set this before the sending loop
//If you generate a different body for each recipient (e.g. you're using a templating system),
//set it inside the loop

//msgHTML also sets AltBody, but if you want a custom one, set it afterwards
$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';

$result = mysqli_query($dbconn, "SELECT email FROM users WHERE userStatus=1 AND userType='student'");

    foreach ($result as $row) { //This iterator syntax only works in PHP 5.4+
				$body = "<h2>Greetings from iMARKET!</h2>";
				$body .= "<p>There is a new announcement posted in iMARKET. Check it out by clicking the link below:</p>";
				$body .="http://localhost/THESIS/announcement.php";
        $mail->msgHTML($body);

        $mail->addBCC($row['email']);

        if (!$mail->send()) {
            echo "Mailer Error (" . str_replace("@", "&#64;", $row["email"]) . ') ' . $mail->ErrorInfo . '<br />';
            break; //Abandon sending
        } else {
            echo str_replace("@", "&#64;", $row['email']) . ')<br />';
            //Mark it as sent in the DB

    /* UPDATE the table if needed
            mysqli_query(
                $connection,
                "UPDATE mailinglist SET sent = true WHERE email = '" .
                mysqli_real_escape_string($connection, $row['email']) . "'"
            );
    */

        }
        // Clear all addresses and attachments for next loop
        $mail->clearAddresses();
        $mail->clearAttachments();
    }

    if(empty($bNo)) {
		$bNo = $dbconn->insert_id;
  }
    $replaceURL = './adminAnnoun_view.php?bno=' . $bNo;
	} else {
		$msg = "The Server is busy. Please try again later !";
?>
		<script>
			alert("<?php echo $msg?>");
      history.back();
		</script>
<?php
exit;
	}
}
?>
<script>
	alert("<?php echo $msg?>");
	location.replace("<?php echo $replaceURL?>");
</script>
