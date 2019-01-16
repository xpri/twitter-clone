<?php

	// delete.php

	include("../../config/db.php");

	$postid = $_POST["postid"];

	$sql = "DELETE FROM posts WHERE postid = '$postid'";

	$query = mysqli_query($conn, $sql);

	if($query){
		echo "ok";
	}
	else{
		echo "error";
	}


?>