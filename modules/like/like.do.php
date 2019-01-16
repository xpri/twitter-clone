<?php

	// like.do.php

	include("../../config/db.php");

	$postid = $_POST["postid"];

	$username = $_SESSION["username"];

	$sql = "SELECT * FROM accounts WHERE username='$username'";

	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($query);

	$userid = $row["userid"];

	$sql2 = "SELECT * FROM likes WHERE userid='$userid' AND postid='$postid'";

	$query2 = mysqli_query($conn, $sql2);

	if(mysqli_num_rows($query2)==0){
		$sql3 = "INSERT INTO likes (postid, userid) VALUES ('$postid', '$userid')";
		mysqli_query($conn, $sql3);
		echo "like";
	}
	else{
		$sql3 = "DELETE FROM likes WHERE userid='$userid' AND postid='$postid'";

		mysqli_query($conn, $sql3);
		echo "unlike";
	}

?>