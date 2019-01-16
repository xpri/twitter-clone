<?php

	// profile_pic.php

	include("../../config/db.php");

	print "<pre>";
	print_r($_FILES);
	print "</pre>";

	$username = $_SESSION["username"];

	$hash = md5($username);

	// $extension = pathinfo($_FILES["profilePic"]["name"], PATHINFO_EXTENSION);

	$extension = "png";

	$targetFileName = $hash.".".$extension;

	$targetFolder = "../../uploads/profile_pics/";

	if(move_uploaded_file($_FILES["profilePic"]["tmp_name"], $targetFolder.$targetFileName)){
		echo "Successfully Uploaded";
	}
	else{
		echo "Upload Error";
	}





?>