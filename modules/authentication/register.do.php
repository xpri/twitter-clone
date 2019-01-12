<?php

	//register.do.php

	include("../../config/db.php");

	if(isset($_POST["inputEmail"], $_POST["inputUsername"], $_POST["inputPassword"], $_POST["inputFullname"], $_POST["inputPhone"], $_POST["inputLocation"], $_POST["inputDob"], $_POST["gender"])){

		$email = $_POST["inputEmail"];
		$username = $_POST["inputUsername"];
		$password = $_POST["inputPassword"];
		$fullname = $_POST["inputFullname"];
		$phone = $_POST["inputPhone"];
		$location = $_POST["inputLocation"];
		$dob = $_POST["inputDob"];
		$gender = $_POST["gender"];

		$error = 0;

		if(checkValid($email) && checkValid($username) && checkValid($password) && checkValid($fullname) && checkValid($phone) && checkValid($location) && checkValid($dob) && checkValid($gender)){

			// do if valid input

			$sql = "SELECT * FROM accounts WHERE username='$username'";

			$query = mysqli_query($conn, $sql);

			if(!$query){

				// if query fails
				die(mysqli_error($conn));

			}
			else{

				// if query successfull
				if(mysqli_num_rows($query)){
					// Username already exists. Redirect to register.php with error=3

					header('location: register.php?error=3');
				}
				else{
					// add the user entry to the accounts table
					$sql2 = "INSERT INTO accounts (username, email, password, fullname, phone, location, dob, gender) VALUES ('$username', '$email', '$password', '$fullname', '$phone', '$location', '$dob', '$gender')";

					$query2 = mysqli_query($conn, $sql);

					if($query2){
						// Successfully added. Redirect to login.php
						header('location: login.php');
					}
					else{
						// error adding to database. Redirect to register.php with url get error = 4

						header("Location: register.php?error=4");

						
					}

				}

			}

		}
		else{

			//redirect to register.php with url get parameter error = 2
			header("Location: register.php?error=2");

		}

	}
	else{

		//redirect to register.php with url get parameter error = 1
		header("Location: register.php?error=1");

	}

	function checkValid($x){

		$x = trim($x);

		if(strlen($x)==0){
			return 0;
		}

		return 1;
	}

?>