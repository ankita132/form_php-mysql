<?php

	function email_exists($email, $con)
	{
		$result = mysqli_query($con,"SELECT * FROM usersinfo WHERE email='$email'");
		$row = mysqli_fetch_array($result);
		
		return mysqli_num_rows($result);
	}

	function logged_in()
	{
		return isset($_SESSION['email']) || isset($_COOKIE['email']);
	}

	function check_username($username, $con)
	{
		$result = mysqli_query($con,"SELECT * FROM usersinfo WHERE username='$username'");
		$row = mysqli_fetch_array($result);
		
		return mysqli_num_rows($result);
	}
