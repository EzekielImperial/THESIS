<?php require_once('connector.php');
    session_start();
    ?>



<?php

	$user = $_SESSION['email'];
    $Pname = $_POST['pname'];
    $active = 1;

    date_default_timezone_set('Asia/Manila');  /// creating date_created
    $newdate =date('F j, Y g:i:a  ');          /// date_created format
    
 

    $query = "INSERT INTO wishlist (email, productName, date_created, wishListActive) 
	values ('" . $user . "','" . $Pname . "','" . $newdate . "','" . $active . "')";
    
	
	if(@mysqli_query($dbconn, $query)){
		echo "<script>location.href='index_wishlist.php';</script>";
		echo "Product Added to your wishlist whohohoo!";
	}else {
		echo mysqli_error($dbconn);
	}
?>