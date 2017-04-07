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
