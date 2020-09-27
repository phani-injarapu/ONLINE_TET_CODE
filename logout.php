<?PHP
	session_start();

	if (isset($_SESSION['application_no'])) {
		$a=$_SESSION['application_no'];
		session_destroy();
		unset($_SESSION['application_no']);
		echo "<script>alert('Do You Want To LogOut');</script>";
		echo "<script>window.location='loginpage.php';</script>";
	}
	else {
		header('location:loginpage.php');
	}


?>