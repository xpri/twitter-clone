<?php

	//login.do.php

	include("../../config/db.php");

	if(isset($_POST["inputUsername"], $_POST["inputPassword"])){

		$username = $_POST["inputUsername"];
		$password = md5($_POST["inputPassword"]);
		
		$error = 0;

		if(checkValid($username) && checkValid($password)){

			// do if valid input

			$sql = "SELECT * FROM accounts WHERE username='$username' AND password = '$password'";

			$query = mysqli_query($conn, $sql);

			if($query){

				// if query is successful

				if(mysqli_num_rows($query)){

					//login is correct

					setcookie("username", $username, time() + 3600, "/");

					header("location: ../dashboard/");

				}
				else{
					//login failed
					header("Location: login.php?error=4");
				}

			}
			else{

				// if query fails, redirect to login.php with url get parameter error=3
				header("Location: login.php?error=3");
			}
		}
		else{

			//redirect to login.php with url get parameter error = 2
			header("Location: login.php?error=2");

		}

	}
	else{

		//redirect to login.php with url get parameter error = 1
		header("Location: login.php?error=1");

	}

	function checkValid($x){

		$x = trim($x);

		if(strlen($x)==0){
			return 0;
		}

		return 1;
	}

?>