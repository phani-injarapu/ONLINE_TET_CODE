
<html>
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
	</head>

</html>
<?PHP
	include 'conn.php';
	session_start();



	if(isset($_POST["aadhar_no"])){

	
    
  }else{
  	echo "<script>swal('Failed Try again!..');</script>";
    header('location:upload_Photograph_Signature.php');
  }
	$app = $_POST['application_num'];
	$a=$_POST['fathername'];
	$b=$_POST['mothername'];
	$c=$_POST['martial'];
	$d=$_POST['religion'];
	$e=$_POST['nationality'];
	$f=$_POST['aadhar_no'];
	$g=$_POST['langone'];
	$h=$_POST['langtwo'];
	$i=$_POST['presentone'];
	$j=$_POST['presenttwo'];
	$k=$_POST['presentthree'];
	$l=$_POST['presentstate'];
	$m=$_POST['presentcity'];
	$n=$_POST['presentpincode'];
	$o=$_POST['perone'];
	$p=$_POST['pertwo'];
	$q=$_POST['perthree'];
	$r=$_POST['perstate'];
	$s=$_POST['percity'];
	$t=$_POST['perpincode'];


$files = $_FILES['picture'];
$filename = $files['name'];
$fileerror = $files['error'];
$filetmp = $files['tmp_name'];

$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));

$fileextstored = array('png','jpg','jpeg');

if(in_array($filecheck, $fileextstored))
{
  $destinationfile = 'images/'.$filename;
  move_uploaded_file($filetmp, $destinationfile);
}


$filess = $_FILES['signature'];
$filenames = $filess['name'];
$fileerrors = $filess['error'];
$filetmps = $filess['tmp_name'];

$fileexts = explode('.',$filenames);
$filechecks = strtolower(end($fileexts));

$fileextstoreds = array('png','jpg','jpeg');

if(in_array($filechecks, $fileextstoreds))
{
  $destinationfiles = 'images/'.$filenames;
  move_uploaded_file($filetmps, $destinationfiles);
}


	$schoolname = $_POST['schoolname'];
	$schoolunder = $_POST['schoolunder'];
	$schoolrc = $_POST['schoolrc'];
	$schoolrn = $_POST['schoolrn'];
	$schoolpassed = $_POST['schoolpassed'];
	$schooltmarks = $_POST['schooltmarks'];
	$schoolmarkso = $_POST['schoolmarkso'];
	$schoolper = $_POST['schoolper'];
	$schooldiv = $_POST['schooldiv'];

	$clgname = $_POST['clgname'];
	$clgunder =  $_POST['clgunder'];
	$clgrc =  $_POST['clgrc'];
	$clgrn = $_POST['clgrn'];
	$clgpassed = $_POST['clgpassed'];
	$clgtmarks = $_POST['clgtmarks'];
	$clgmarkso = $_POST['clgmarkso'];
	$clgper = $_POST['clgper'];
	$clgdiv = $_POST['clgdiv'];


	$gradname = $_POST['gradname'];
	$gradunder =  $_POST['gradunder'];
	$gradrc =  $_POST['gradrc'];
	$gradrn = $_POST['gradrn'];
	$gradpassed = $_POST['gradpassed'];
	$gradtmarks = $_POST['gradtmarks'];
	$gradmarkso = $_POST['gradmarkso'];
	$gradper = $_POST['gradper'];
	$graddiv = $_POST['graddiv'];


	$bedname = $_POST['bedname'];
	$bedunder =  $_POST['bedunder'];
	$bedrc =  $_POST['bedrc'];
	$bedrn = $_POST['bedrn'];
	$bedpassed = $_POST['bedpassed'];
	$bedtmarks = $_POST['bedtmarks'];
	$bedmarkso = $_POST['bedmarkso'];
	$bedper = $_POST['bedper'];
	$beddiv = $_POST['beddiv'];

	$postname = $_POST['postname'];
	$postunder =  $_POST['postunder'];
	$postrc =  $_POST['postrc'];
	$postrn = $_POST['postrn'];
	$postpassed = $_POST['postpassed'];
	$posttmarks = $_POST['posttmarks'];
	$postmarkso = $_POST['postmarkso'];
	$postper = $_POST['postper'];
	$postdiv = $_POST['postdiv'];








	
	$query = "INSERT INTO `uploadreg` (`application_no`,`fathername`, `mothername`,`martial`,`religion`,`nationality`,`aadhar_no`,`langone`,`langtwo`,`presentone`,`presenttwo`,`presentthree`,`presentstate`,`presentcity`,`presentpincode`,`perone`,`pertwo`,`perthree`,`perstate`,`percity`,`perpincode`,`picture`,`signature`) VALUES ('$app','$a', '$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$destinationfile','$destinationfiles')";
	$queries = "INSERT INTO `educationreg`(`application_no`, `schoolname`, `schoolunder`, `schoolrc`, `schoolrn`, `schoolpassed`, `schooltmarks`, `schoolmarkso`, `schoolper`, `schooldiv`, `clgname`, `clgunder`, `clgrc`, `clgrn`, `clgpassed`, `clgtmarks`, `clgmarkso`, `clgper`, `clgdiv`, `gradname`, `gradunder`, `gradrc`, `gradrn`, `gradpassed`, `gradtmarks`, `gradmarkso`, `gradper`, `graddiv`, `bedname`, `bedunder`, `bedrc`, `bedrn`, `bedpassed`, `bedtmarks`, `bedmarkso`, `bedper`, `beddiv`, `postname`, `postunder`, `postrc`, `postrn`, `postpassed`, `posttmarks`, `postmarkso`, `postper`, `postdiv`) VALUES ('$app', '$schoolname', '$schoolunder', '$schoolrc', '$schoolrn', '$schoolpassed', '$schooltmarks', '$schoolmarkso', '$schoolper', '$schooldiv', '$clgname', '$clgunder', '$clgrc', '$clgrn', '$clgpassed', '$clgtmarks', '$clgmarkso', '$clgper', '$clgdiv', '$gradname', '$gradunder', '$gradrc', '$gradrn', '$gradpassed', '$gradtmarks', '$gradmarkso', '$gradper', '$graddiv', '$bedname', '$bedunder', '$bedrc', '$bedrn', '$bedpassed', '$bedtmarks', '$bedmarkso', '$bedper', '$beddiv', '$postname', '$postunder', '$postrc', '$postrn', '$postpassed', '$posttmarks', '$postmarkso', '$postper', '$postdiv')";
	
	$sql = mysqli_query($conn, $query);
	$sqll = mysqli_query($conn, $queries);
	
	if($sql && $sqll){

		echo "<script>setTimeout(function () { swal('WOW','Message!','success') }, 1000);</script>";

		$apd=$_POST['application_num'];	
					$query="SELECT * FROM `initialreg` WHERE `application_no` = '$apd'"; 
					$sql = mysqli_query($conn, $query);
					while($row=mysqli_fetch_array($sql)){
						echo "<script> window.location.href='uploadedfiles.php?ID=".$row['application_no']." '</script>";

					}





	}else
	{
		echo "<script>swal('something wrong!..');</script>";
		echo "<script>window.location='upload_Photograph_Signature.php';</script>";
	}
	
	
?>