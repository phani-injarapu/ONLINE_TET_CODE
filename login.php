<?PHP
	include 'conn.php';
	session_start();
	
	if(isset($_POST['application_no'])&&isset($_POST['dob']))
	{
	
	
	$a=mysqli_real_escape_string($conn,$_POST['application_no']);
	$b=mysqli_real_escape_string($conn,$_POST['dob']);
	
	$sql="SELECT * FROM `initialreg` WHERE `application_no` = '$a'";
	
	
	$query = mysqli_query($conn, $sql);
	
	
	while($row = mysqli_fetch_array($query))
	{
	if($row['dob']==$b)
	{
			$_SESSION['application_no']=$row['sno'];
				echo "<script> window.location.href='upload_Photograph_Signature.php?ID=".$row['application_no']." '</script>";
		}

	else
	{
		echo "<script>alert('Password is incorrect.');</script>";
		echo "<script>window.location='loginpage.php';</script>";
	}
	}
}
else
{
	echo "<script>alert('Please Check Your Username and Password');</script>";
		echo "<script>window.location='loginpage.php';</script>";


}

?>