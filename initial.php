
<html>
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
	</head>

</html>
<?PHP
	include 'conn.php';
	session_start();
	if(isset($_POST["dob"])){

    
  }else{
  	echo "<script>alert('something wrong!..');</script>";
    header('location:initial_Registration.php');
  }
	
	$a=$_POST['post_applied'];
	$b=$_POST['fname'];
	$c=$_POST['mname'];
	$d=$_POST['lname'];
	$e=$_POST['gmail'];
	$f=$_POST['cgmail'];
	$gg=$_POST['mobile'];
	$g=$_POST['mobile'];
	$h=$_POST['dob'];
	$i=$_POST['agess'];
	$j=$_POST['gender'];
	$k=$_POST['domicile'];
	$l=$_POST['subject'];
	$m=$_POST['qualification'];
	$n=$_POST['category'];
	$o=$_POST['exservice'];
	$p=$_POST['disability'];
	$q=$_POST['termsa'];

	$ap_id = substr($g,3);
	$ap_id = intval($ap_id);
	$mon = date('m');
	$day = date('d');
	$year = date('Y');

	$app = "SK".$day.$mon.$year.($ap_id+1).$g;




	
	$query = "INSERT INTO `initialreg` (`application_no`,`post_applied`, `fname`,`mname`,`lname`,`gmail`,`cgmail`,`mobile`,`dob`,`age`,`gender`,`domicile`,`subject`,`qualification`,`category`,`exservice`,`disability`,`termsa`) VALUES ('$app','$a', '$b','$c','$d','$e','$f','$gg','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q')";
	
	$sql = mysqli_query($conn, $query);


	if($sql){
		echo "<script>swal('Success!', 'initial registration saved.. ', 'success');</script>";
		
	}else{
		echo "<script>alertt('Failed Try again!..');</script>";
		echo "<script>window.location='initial_Registration.php';</script>";
	}
	
?>


<html>
<head>
	<title>STET | Login</title>
<link rel="icon" type="image/png" href="images/STETlogo.png"/>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
 
<style type="text/css">
	@import url(https://fonts.googleapis.com/css?family=Roboto+Slab);


  	body{
  	font-family: 'Roboto Slab';
  	}
	.panel-heading
	{
		background-color: #265299 !important;
	}
	.panel
	{
		border-color: #265299 !important;
	}
	.navbar {
	overflow: hidden;
	background: #C51B1E;
}
.navbar a {
	float: left;
	display: block;
    color: white;
    text-align: center;
    font-size: 17px;
    padding: 20px 20px;
    text-decoration: none;
}
.navbar a:hover {
	font-weight: bolder;
}
.navbar .icon {
	display: none;
}
.dropdown {
	float: left;
	overflow: hidden;
}
.dropdown .drop {
	font-size: 17px; 
    border: none;
    outline: none;
    color: #fff;
    padding: 20px 20px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}
.drop .fa-angle-double-up,
.drop:hover .fa-angle-double-down {
	display: none;
}
.drop:hover .fa-angle-double-up {
	display: inline;
}
.drop-content {
	display: none;
	position: absolute;
	background-color: #404040;
	min-width: 150px;
	z-index: 1;
}
.drop-content a {
	float: none;
	color: #fff;
	padding: 12px, 16px;
	text-decoration: none;
	display: block;
	text-align: left;
}
.dropdown:hover .drop-content {
	display: block;
}
.drop-content a:hover {
	background-color: rgba(179, 167, 167, 0.5);
}
@media screen and (max-width: 768px) {
	.navbar a {
		display: none;
	}
	.navbar a.icon {
		float: right;
		display: block;
	}
}
@media screen and (max-width: 768px) {
	.navbar.responsive {
		position: relative;
	}
	.navbar.responsive a.icon {
		position: absolute;
		right: 0;
		top: 0;
	}
	.navbar.responsive a {
		float: none;
		display: block;
		text-align: left;
		padding-left: 20px;
		border-top: 1px solid #fff;

	}
	.navbar.responsive .dropdown {
		float: none;
	}
	.navbar.responsive .drop-content {
		position: relative;
		padding-left: 30px;
		padding-right: 30px;
		background-color: rgba(179, 167, 167, 0.5);
	}
	.navbar.responsive .drop-content a {
		border-top: 1px solid #fff;
	}
	.navbar.responsive .dropdown .drop {
		display: block;
		width: 100%;
		text-align: left;
		border-top: 1px solid #fff;
	}
	.navbar.responsive .dropdown .drop:hover {
		background-color: rgba(179, 167, 167, 0.5);
	}

}
</style>
<script type="text/javascript">
	window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 40000000);
</script>
</head>
<body>
	
	
	<header>
		<center>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    
          <img  src="images/header.png" class="img-responsive" alt="header" style="max-width: 100% !important;">
                   
                </div>
            </div>
        </div>
    </center>

    <div class="navbar" id= "nav" >
    <a href="index.php">Home</a>
    <!--<div class="dropdown">
        <a class="drop" href="#Home">Dropdown 
          <i class="fa fa-angle-double-down"></i>
          <i class="fa fa-angle-double-up"></i>
        </a>
      <div class="drop-content">
        <a href="#Prod1">Drop 1</a>
        <a href="#Prod2">Prod 2</a>
        <a href="#Prod3">Prod 3</a>
      </div>
    </div>-->
    <a href="index.php">Notifications</a>

    <a href="javascript:void(0);" class="icon" onclick="displayMenu()"><i class="glyphicon glyphicon-tasks"></i></a>
  </div>

  <script type="text/javascript">
    	function displayMenu() {
	var x = document.getElementById("nav");
    if (x.className === "navbar") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
}
    </script>

    </header>

  


    <section>
    	<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> You have been registered  successfully!
</div>
    	<div class="container" style="width: 50%">

    	<div class="panel panel-primary" style="margin:20px;">
	<div class="panel-heading">
        	<h3 class="panel-title">REGISTRATION STEP-1 COMPLETED</h3>
        
	</div>
<div class="panel-body " style="margin: 0 auto;">
    <form method="POST" action="loginpage.php?ID=$row['application_no']">


<div class="col-md-12 col-sm-12 ">
	<h5>
		Dear Applicant,<br><br>
		You have sucessfully completed the First step of registration process,<br><br>
		Your Application No:    
		<?PHP
					include 'conn.php';
				$query="SELECT `application_no` FROM `initialreg` WHERE `gmail`= '$e'"; 
				$sql = mysqli_query($conn, $query);
				while($row=mysqli_fetch_array($sql)){
					echo " ".$row['application_no'];
				}
				?>


		<br><br>
		Your DOB : <?php echo $_POST["dob"]; ?> <br><br>
		we have sent an Email and SMS containing your login details to the registered email address and mobile number<br><br>
		Please check your email address and SMS for the login credential<br><br>
		LOGIN through the tab given below with your Application No. and DOB to complete your registration.<br><br><br>
		Thanks and Regards,<br>
		<b style="color: #265299">Sikkim Examination Board</b>
	</h5>
 </div>

<center>
<div class="col-md-7 col-sm-12">
	<div class="form-group col-md-3 col-sm-3 pull-right" >
			<input type="submit" class="btn btn-success" value="Login To Continue"/>
	</div>
</div>
</center>
</div>
</form>
</div>




</div>




    </section>

	
</body>
</html>