<?PHP
  include 'conn.php';
  session_start();

    if(isset($_GET['ID'])){

      $bol = $_GET['ID'];
      $q = "SELECT * FROM `uploadreg` WHERE `application_no` = '$bol'";
      $query=mysqli_query($conn, $q);
      $row=mysqli_fetch_array($query);
      if($row['application_no']==$bol){
       
       echo "<script> window.location.href='uploadedfiles.php?ID=".$row['application_no']." '</script>";

      }

    
  }
  else{
    echo "<script>alert('sarada wrong!..');</script>";
    header('location:upload_Photograph_Signature.php');
  }

  if(isset($_SESSION["application_no"])){

    $a=$_SESSION['application_no'];
    
    $b="SELECT * FROM `initialreg` where `application_no`='$a'";
    $c = mysqli_query($conn,$b);
    $d = mysqli_fetch_array($c); 
    
  }else{
    header('location:loginpage.php');
  }
?>



<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>COMPLETE | REGISTRATION</title>
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
                      .btn-file {
    position: relative;
    overflow: hidden;
}

                      .btn-files {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;   
    cursor: inherit;
    display: block;
}
.btn-files input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;   
    cursor: inherit;
    display: block;
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
	color: #f5f6f5;
	font-weight: bold;
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

  <style>

  	 .row .col-xs-4{
	border: 1px solid black;
	background: #f5f5f5;
	text-align: center;
	padding-top: 8px;
	padding-bottom: 8px;
	}
  .box
  {
   width:800px;
   margin:0 auto;
  }
  .active_tab1
  {
   background-color:#fff;
   color:#333;
   font-weight: 600;
  }
  .inactive_tab1
  {
   background-color: #f5f5f5;
   color: #333;
   cursor: not-allowed;
  }
  .has-error
  {
   border-color:#cc0000;
   background-color:#ffff99;
  }




  .stepwizard-step p {
    margin-top: 10px;
    color:purple;
    font-weight: bold;
}
.stepwizard-row {
    display: table-row;

}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
    


}

.stepwizard-row:before {
    top: 30px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    color: purple;
    background-color: #456eb0;
    z-index: 0;
}


.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 60px;
    height: 60px;
    text-align: center;
    padding: 6px 0;
    font-size: 20px;
    line-height: 2.228571429;
    border-radius: 30px;



}


.btn-success
{
	background-color: #456eb0;

}

.btn-default:hover
{
	background-color: #456eb0 !important;

}

#not
{
  cursor: not-allowed;
}



  </style>

  

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
    <div class="navbar-right" id= "nav" >
      <a href="logout.php">Logout</a>
      <span class="col-md-2 col-sm-2"></span>
    </div>

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


<?PHP

if(isset($_POST['submit']))
{
  $aadhar_no = $_POST["aadhar_no"];
   $application_no = $_POST["application_no"];
}




?>
 <br />
  <section>
<div class="container" style="width: 90%">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3" > 
                <a href="#step-1" type="button" class="btn btn-success btn-circle"><h4 class="glyphicon glyphicon-tasks"></h4></a>
                <p><small>COMPLETE REGISTRATION</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-2" type="button" class="btn btn-default btn-circle" ><h4 class="glyphicon glyphicon-camera"></h4></a>
                <p><small>PHOTOGRAPHY AND SIGNATURE</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-3" type="button" class="btn btn-default btn-circle" > <h4 class="glyphicon glyphicon-list-alt"></h4></a>
                <p><small>PREVIEW</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a  id ="not" type="button" class="btn btn-default btn-circle"><h4 class="glyphicon glyphicon-credit-card"></h4></a>
                <p><small>PAYMENTS</small></p>
            </div>
        </div>
    </div>


<form method="POST" action ="uploads.php" enctype="multipart/form-data">

<div class="panel panel-primary setup-content" id="step-1" style="border:1px;">



     <div class="panel panel-primary" style="margin:20px;" >
	<div class="panel-heading">
        	<h3 class="panel-title">PERSONAL INFORMATION
          <span class="panel-title pull-right">

              <?PHP
          include 'conn.php';
          
        $query="SELECT * FROM `initialreg` WHERE `sno`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<span style  = 'color : grey'> ID : </span>".$row['application_no'];
          
           
        }
        


        ?>
          </span></h3>
	</div>
<div class="panel-body">


    	

<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-4 col-sm-4">
            <label for="name">Candidate's Name </label>

            <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `sno`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' readonly > ".$row['fname']." ".$row['mname']." ".$row['lname']."</div>";
        }
        ?>
        </div>


        <div class="form-group col-md-4 col-sm-4">
            <label for="email">Email Address </label>
                 <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `sno`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' readonly > ".$row['gmail']."</div>";
        }
        ?>
        </div>

        <div class="form-group col-md-4 col-sm-4">
            <label for="mobile">Mobile Number</label>
                <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `sno`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' readonly > ".$row['mobile']."</div>";
        }
        ?>
        </div>
</div>

<div class="col-md-12 col-sm-12">
        <div class="form-group col-md-4 col-sm-4">
            <label for="dob">Date Of Birth </label>
                 <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `sno`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' readonly > ".$row['dob']."</div>";
        }
        ?>
        </div>

        <div class="form-group col-md-4 col-sm-4">
            <label for="age">Age as on 1st July 2020</label>
		     <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `sno`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' readonly > ".$row['age']."</div>";
        }
        ?>
        </div>

       <div class = "form-group col-md-4 col-sm-4">

			 <label for="gender">Gender </label>     
	        <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `sno`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' readonly > ".$row['gender']."</div>";
        }
        ?>
	</div>
</div>


<div class="col-md-12 col-sm-12">
		<div class = "form-group col-md-6 col-sm-6">
	      <label for="qualification">Qualification </label>	 
     <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `sno`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' readonly > ".$row['qualification']."</div>";
        }
        ?>
	</div>

		<div class = "form-group col-md-6 col-sm-6">
	      <label for="category">Category</label>	 
	     <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `sno`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' readonly > ".$row['category']."</div>";
        }
        ?>
	</div>
</div>








<div class="col-md-12 col-sm-12">
<div class="form-group col-md-4 col-sm-4">
            <label for="name">Father's Name<span style="color: red"> *</span> </label>
            <input type="text" class="form-control input-sm" name="fathername" >
             <span id="fathername" class="text-danger font-weight-bold"> </span>
        </div>

 <div class="form-group col-md-4 col-sm-4">
            <label for="name">Mother's Name<span style="color: red"> *</span> </label>
            <input type="text" class="form-control input-sm" name="mothername">
             <span id="mothername" class="text-danger font-weight-bold"> </span>
        </div>

        	<div class = "form-group col-md-4 col-sm-4">
	      <label for="service">Martial Status<span style="color: red"> *</span></label>	 
	      <select class="form-control input-sm" name="martial">
		<option value="">-- Select --</option>
		<option value="MARRIED">MARRIED</option>
			<option value="UNMARRIED">UNMARRIED</option>
			<option value="WIDOW">WIDOW</option>
			<option value="WIDOWER">WIDOWER</option>
			<option value="DIVORCEE">DIVORCEE</option>
			<option value="SEPARATED">SEPARATED</option>

	
		
	      </select>
	</div>
</div>


<div class="col-md-12 col-sm-12">

	  <div class = "form-group col-md-4 col-sm-4">
	      <label for="service">Religion<span style="color: red"> *</span></label>	 
	      <select class="form-control input-sm" name="religion">
		<option value="">-- Select --</option>
		<option value="HINDU">HINDU</option>
			<option value="MUSLIM">MUSLIM</option>
			<option value="SIKH">SIKH</option>
			<option value="CHRISTIAN">CHRISTIAN</option>
			<option value="JAIN">JAIN</option>
			<option value="other">other</option>
	
		
	      </select>
	</div>

	 <div class="form-group col-md-4 col-sm-4">
            <label for="name">Nationality<span style="color: red"> *</span> </label>
            <input type="text" class="form-control input-sm" name="nationality">
             <span id="nationality" class="text-danger font-weight-bold"> </span>
        </div>
	 <div class="form-group col-md-4 col-sm-4">
            <label for="name">AADHAR No<span style="color: red"> *</span> </label>
            <input type="text" class="form-control input-sm" name="aadhar_no" required>
             <span id="aadhar_no" class="text-danger font-weight-bold"> </span>
        </div>
      </div>

<div class="col-md-12 col-sm-12">
	 <div class="form-group col-md-4 col-sm-4">
            <label for="name">Language-I<span style="color: red"> *</span> </label>
            <input type="text" class="form-control input-sm" name="langone">
             <span id="langone" class="text-danger font-weight-bold"> </span>
        </div>
   <div class="form-group col-md-4 col-sm-4">
            <label for="name">Language-II<span style="color: red"> *</span> </label>
            <input type="text" class="form-control input-sm" name="langtwo">
             <span id="langtwo" class="text-danger font-weight-bold"> </span>
        </div>

        <div class="form-group col-md-4 col-sm-4">
            <label for="name">APPLICATION NO<span style="color: red"> *</span> </label>
   
           <input type="text" name="application_num" class="form-control input-sm">
    

        </div>
  
  
</div>

</div>


</div>



     <div class="panel panel-primary" style="margin:20px;">
	<div class="panel-heading">
        	<h3 class="panel-title">PRESENT ADDRESS</h3>
	</div>
<div class="panel-body">
   


<div class="col-md-12 col-sm-12">
	 <div class="form-group col-md-4 col-sm-4">
            <label for="name">Address Line 1<span style="color: red"> *</span> </label>
            <textarea type="text" class="form-control input-sm" name="presentone" required></textarea>
             <span id="presentone" class="text-danger font-weight-bold"> </span>
        </div>
	 <div class="form-group col-md-4 col-sm-4">
            <label for="name">Address Line 2<span style="color: red"> *</span> </label>
          <textarea type="text" class="form-control input-sm" name="presenttwo"></textarea>
           <span id="presenttwo" class="text-danger font-weight-bold"> </span>
        </div>

         <div class="form-group col-md-4 col-sm-4">
            <label for="name">Address Line 3<span style="color: red"> *</span> </label>
           <textarea type="text" class="form-control input-sm" name="presentthree"></textarea>
            <span id="presentthree" class="text-danger font-weight-bold"> </span>
        </div>
      </div>
	
<div class="col-md-12 col-sm-12">
		 <div class="form-group col-md-4 col-sm-4">
            <label for="name">State<span style="color: red"> *</span> </label>
            <input type="text" class="form-control input-sm" name="presentstate">
             <span id="presentstate" class="text-danger font-weight-bold"> </span>
        </div>

         <div class="form-group col-md-4 col-sm-4">
            <label for="name">District/City<span style="color: red"> *</span> </label>
            <input type="text" class="form-control input-sm" name="presentcity">
             <span id="presentcity" class="text-danger font-weight-bold"> </span>
        </div>

         <div class="form-group col-md-4 col-sm-4">
            <label for="name">Pincode<span style="color: red"> *</span> </label>
            <input type="text" class="form-control input-sm" name="presentpincode">
             <span id="presentpincode" class="text-danger font-weight-bold"> </span>
        </div>
      </div>


</div>


</div>


 <div class="panel panel-primary" style="margin:20px;">
	<div class="panel-heading">
        	<h3 class="panel-title">PERMANENT ADDRESS</h3>
	</div>
<div class="panel-body">
    


<div class="col-md-12 col-sm-12">
	 <div class="form-group col-md-4 col-sm-4">
            <label for="name">Address Line 1<span style="color: red"> *</span> </label>
            <textarea type="text" class="form-control input-sm" name="perone"></textarea>
             <span id="perone" class="text-danger font-weight-bold"> </span>
        </div>
	 <div class="form-group col-md-4 col-sm-4">
            <label for="name">Address Line 2<span style="color: red"> *</span> </label>
           <textarea type="text" class="form-control input-sm" name="pertwo"></textarea>
            <span id="pertwo" class="text-danger font-weight-bold"> </span>
        </div>

         <div class="form-group col-md-4 col-sm-4">
            <label for="name">Address Line 3<span style="color: red"> *</span> </label>
            <textarea type="text" class="form-control input-sm" name="perthree"></textarea>
             <span id="perthree" class="text-danger font-weight-bold"> </span>
        </div>
	</div>

<div class="col-md-12 col-sm-12">
		 <div class="form-group col-md-4 col-sm-4">
            <label for="name">State<span style="color: red"> *</span> </label>
            <input type="text" class="form-control input-sm" name="perstate">
             <span id="perstate" class="text-danger font-weight-bold"> </span>
        </div>

         <div class="form-group col-md-4 col-sm-4">
            <label for="name">District/City<span style="color: red"> *</span> </label>
            <input type="text" class="form-control input-sm" name="percity">
             <span id="percity" class="text-danger font-weight-bold"> </span>
        </div>

         <div class="form-group col-md-4 col-sm-4">
            <label for="name">Pincode<span style="color: red"> *</span> </label>
            <input type="text" class="form-control input-sm" name="perpincode">
             <span id="perpincode" class="text-danger font-weight-bold"> </span>
        </div>
</div>

</div>




</div>


 <div class="panel panel-primary" style="margin:20px;">
	<div class="panel-heading">
        	<h3 class="panel-title">EDUCATIONAL QUALIFICATIONS</h3>
	</div>
<div class="panel-body">

  <div class="row">
    <div class="col-xs-12">
      <div class="table-responsive">
        <table summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover">
          
          <thead>
            <tr>
              <th>Qualification Acquired/Examination Passed</th>
              <th>Name of the Institution from which passed</th>
              <th>Name of the University to which Institution is affliated</th>
              <th>Roll Code</th>
              <th>Roll No</th>
              <th>Year of Passing</th>
              <th>Total Marks</th>
              <th>Marks Obtained</th>
              <th>Percentage of Marks</th>
              <th>Division</th>

            </tr>
          </thead>
          <tbody>
            <tr>
        <td><div class="input-sm" id="namef" ><b style="color: #265299;">Class X/Matric</b> <span style="color: red"> *</span></div></td>
              <td><input type="text" class="form-control input-sm" id="schoolname" name="schoolname" ></td>
              <td><input type="text" class="form-control input-sm" id="schoolunder" name="schoolunder" ></td>
              <td><input type="text" class="form-control input-sm" id="schoolrc" name="schoolrc" ></td>
              <td><input type="text" class="form-control input-sm" id="schoolrn" name="schoolrn" ></td>
              <td><input type="text" class="form-control input-sm" id="schoolpassed" name="schoolpassed" ></td>
              <td><input type="text" class="form-control input-sm" id="schooltmarks" name="schooltmarks" ></td>
              <td><input type="text" class="form-control input-sm" id="schoolmarkso"  name="schoolmarkso" ></td>
              <td><input type="text" class="form-control input-sm" id="schoolper" name="schoolper" ></td>
              <td><input type="text" class="form-control input-sm" id="schooldiv"  name="schooldiv" ></td>
            </tr>


              <tr>
              <td><div class="input-sm" id="namef"><b style="color: #265299;">Class 12th/ Intermediate</b> <span style="color: red"> *</span></div></td>
              <td><input type="text" class="form-control input-sm" id="clgname" name="clgname" ></td>
              <td><input type="text" class="form-control input-sm" id="clgunder" name="clgunder" ></td>
              <td><input type="text" class="form-control input-sm" id="clgrc"  name="clgrc" ></td>
              <td><input type="text" class="form-control input-sm" id="clgrn" name="clgrn" ></td>
              <td><input type="text" class="form-control input-sm" id="clgpassed"  name="clgpassed" ></td>
              <td><input type="text" class="form-control input-sm" id="clgtmarks"   name="clgtmarks" ></td>
              <td><input type="text" class="form-control input-sm" id="clgmarkso" name="clgmarkso" ></td>
              <td><input type="text" class="form-control input-sm" id="clgper"  name="clgper" ></td>
              <td><input type="text" class="form-control input-sm" id="clgdiv"  name="clgdiv"></td>
            </tr>




                 <tr>
              <td><div class="input-sm" id="namef" ><b style="color: #265299;">Graduate or Equivalent</b> <span style="color: red"> *</span></div></td>
              <td><input type="text" class="form-control input-sm" id="gradname" name="gradname" ></td>
              <td><input type="text" class="form-control input-sm" id="gradunder"  name="gradunder"></td>
              <td><input type="text" class="form-control input-sm" id="gradrc"  name="gradrc"></td>
              <td><input type="text" class="form-control input-sm" id="gradrn"  name="gradrn"></td>
              <td><input type="text" class="form-control input-sm" id="gradpassed"  name="gradpassed"></td>
              <td><input type="text" class="form-control input-sm" id="gradtmarks" name="gradtmarks" ></td>
              <td><input type="text" class="form-control input-sm" id="gradmarkso"  name="gradmarkso"></td>
              <td><input type="text" class="form-control input-sm" id="gradper" name="gradper" ></td>
              <td><input type="text" class="form-control input-sm" id="graddiv"  name="graddiv"></td>
            </tr>




                  <tr>
  			 <td><div class="input-sm" id="namef" ><b style="color: #265299;">B.ED </b><span style="color: red"> *</span></div></td>
              <td><input type="text" class="form-control input-sm" id="bedname" name="bedname" ></td>
              <td><input type="text" class="form-control input-sm" id="bedunder" name="bedunder"></td>
              <td><input type="text" class="form-control input-sm" id="bedrc" name="bedrc"></td>
              <td><input type="text" class="form-control input-sm" id="bedrn" name="bedrn"></td>
              <td><input type="text" class="form-control input-sm" id="bedpassed" name="bedpassed"></td>
              <td><input type="text" class="form-control input-sm" id="bedtmarks" name="bedtmarks"></td>
              <td><input type="text" class="form-control input-sm" id="bedmarkso" name="bedmarkso"></td>
              <td><input type="text" class="form-control input-sm" id="bedper" name="bedper"></td>
              <td><input type="text" class="form-control input-sm" id="beddiv" name="beddiv"></td>
            </tr>



                  <tr>
       <td><div class="input-sm" id="namef" ><b style="color: #265299;">Post Graduate</b></div></td>
              <td><input type="text" class="form-control input-sm" id="postname" name="postname"></td>
              <td><input type="text" class="form-control input-sm" id="postunder" name="postunder"></td>
              <td><input type="text" class="form-control input-sm" id="postrc" name="postrc"></td>
              <td><input type="text" class="form-control input-sm" id="postrn" name="postrn"></td>
              <td><input type="text" class="form-control input-sm" id="postpassed" name="postpassed"></td>
              <td><input type="text" class="form-control input-sm" id="posttmarks" name="posttmarks"></td>
              <td><input type="text" class="form-control input-sm" id="postmarkso" name="postmarkso"></td>
              <td><input type="text" class="form-control input-sm" id="postper" name="postper"></td>
              <td><input type="text" class="form-control input-sm" id="postdiv" name="postdiv"></td>
            </tr>
          </tbody>
        
        </table>
      </div>
    </div>
  </div>
</div>






</div>



	<div class="form-group pull-right" >
		<input type="button" class="btn btn-primary  nextBtn pull-right"  value="Next To Continue">
    </div>




</div></div>



 <script type="text/javascript">
    

    function validation(){

      var fathername = document.getElementById('fathername').value;
      var mothername = document.getElementById('mothername').value;
      var martial = document.getElementById('martial').value;
      var aadhar_no = document.getElementById('aadhar_no').value;
      var application_num = document.getElementById('application_num').value;
      var langone = document.getElementById('langone').value;
       var langtwo = document.getElementById('langtwo').value;
      var langone = document.getElementById('langone').value;


      if(fathername == ""){
        document.getElementById('firstname').innerHTML =" ** Enter your Father name";
        return false;
      }

      if((fathername.length <= 2) || (fathername.length > 20)) {
        document.getElementById('firstname').innerHTML =" ** Name lenght must be between 2 and 20";
        return false; 
      }

      if(!isNaN(fathername)){
        document.getElementById('firstname').innerHTML =" ** Only characters are allowed";
        return false;
      }

   if(mothername == ""){
        document.getElementById('firstname').innerHTML =" ** Enter your Mother name";
        return false;
      }

      if((mothername.length <= 2) || (mothername.length > 20)) {
        document.getElementById('firstname').innerHTML =" ** Name lenght must be between 2 and 20";
        return false; 
      }

      if(!isNaN(mothername)){
        document.getElementById('firstname').innerHTML =" ** Only characters are allowed";
        return false;
      }


   if(aadhar_no == ""){
        document.getElementById('aadhar_no').innerHTML =" ** Enter your AADHAR ID";
        return false;
      }

      if((aadhar_no != 12)) {
        document.getElementById('aadhar_no').innerHTML =" **  Check your AADHAR NUMBER AGAIN";
        return false; 
      }

      if(isNaN(aadhar_no)){
        document.getElementById('firstname').innerHTML =" ** Only Numbers are allowed";
        return false;
      }

  

      
    }



  </script>











































<!-----------------------------------------------panel 2 --------------------------------------------------------------------------------------------------------->
<br>





<div class="container" style="width: 90%">
<div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
                 <h3 class="panel-title">UPLOAD PHOTOGRAPH AND DOCUMENTS
                   <span class="panel-title pull-right">

              <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `sno`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<span style  = 'color : grey'> ID : </span>".$row['application_no'];
        }
        ?>
          </span>
                 </h3>
            </div>
            <div class="panel-body">
                <ul>
                	<li><p>
                		The colour passport size photograph must be a recent one, taken looking directly at the camera against a white or light background
                	</p></li>

                	<li><p>
                		Wearing of caps, hats or any tinted or dark glasses is not acceptable while the photograph is being taken Religious head wear is allowed but it must not cover the face. Your eyes and face should be clearly visible
                	</p></li>

                	<li>
                		<p>
                			If there is a red-eye effect in the photograph, please edit to remove it
                		</p>
                	</li>

                	<li>
                		<p>
                			Maximum size of the photograph should be of 150KB and scanned signature of the candidate should be of 100KB
                		</p>
                	</li>

                	<li>
                		<p>
                			Click <a>HERE</a> to resize your image
                		</p>
                	</li>
                </ul>
<hr>
                <div class="form-group">



                <label for="name" class="form-group col-md-4 col-sm-4">Upload Photograph (JPG/JPEG Format only)<span style="color: red"> *</span> </label>
                <span class="btn btn-danger btn-file">
                  upload your  photo <input type='file' onchange="readURL(this);" name="picture" id="picture" />
                </span>
              
					       <img id="blah" class="form-group " style="height: 150px" />
                    
                </div>
                
 <hr>

                 <div class="form-group">

                <label for="name" class="form-group col-md-4 col-sm-4">Upload Signature (JPG/JPEG Format only)<span style="color: red"> *</span> </label>
                 <span class="btn btn-danger btn-files">
               upload your signature<input type='file' onchange="readURLL(this);" name="signature" id="signature" />
             </span>
              

					     <img id="blah2" class="form-group" style="height: 150px" />
                    
                </div>
 <hr>
                <div class="col-md-8 col-sm-12">
                    <div class="form-group col-md-4 col-sm-4 pull-right" >
                
                <input type="submit" class="btn btn-success "  value="FINAl SUBMITION"/>
              </div>
            </div>
            </div>
        </div>
      </div>
</form>





        <script type="text/javascript">
        	
        	     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    
        </script>

            <script type="text/javascript">
        	
        	     function readURLL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah2')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    
        </script>

       









































 <!---------------------------------------panel 3--------------------------------------------------------------------------------------------------------------------->
 <div class="container" style="width: 90%">
 <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
                 <h3 class="panel-title">PREVIEW</h3>
            </div>
            <div class="panel-body">
                 <div class="form-group">

                
                  <center><h3 style="color: #265299"><i class="glyphicon glyphicon-alert"></i> &nbsp&nbspNO PREVIEW</h3></center>
                       <div class="form-group pull-right" >
                              <input type="button" class="btn btn-primary pull-right" value="finish your submition">
                        </div>
            </div>
        </div>

</div>
</div>








<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
</section>
 </body>






 <script type="text/javascript">
	$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-control").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');
});
</script>

    <footer style="background-color: #265299;">
      <style type="text/css">
.copyright-area{
  background: #265299;
  padding: 35px 0;
}
.copyright-text p {
  margin: 0;
  font-size: 14px;
  color: #878787;
  margin-bottom:-10px;
}
.copyright-text p a{
  color: #ff5e14;
}
.footer-menu li {
  display: inline-block;
 
}
.footer-menu li:hover a{
  color: #ff5e14;
}
.footer-menu li a {
  font-size: 14px;
  color: #878787;
}
      </style>

      <div class="copyright-area">
            <div class="container">
                <div class="row">
                   
                    <div class="d-none d-lg-block">
                        <div class="footer-menu">
                            <ul class="col-md-12 col-sm-12">
                                <li class="col-md-2 col-sm-2"><a href="index.php">Home</a></li>
                                <li class="col-md-2 col-sm-2"><a href="terms.php">Terms</a></li>
                                <li class="col-md-2 col-sm-2"><a href="privacy.php">Privacy & Policy</a></li>
                                <li class="col-md-2 col-sm-2"><a href="#">Contact</a></li>
                                
                            </ul>
                        </div>
                    </div>
                     <div class="text-center">
                        <div class="copyright-text">
                         <p>Copyright &copy; 2020, All Right Reserved <a href="https://www.aitamsac.in">AITAM SAC</a></p>
                        </div>
                    </div>
                
                    </div>
                </div>
            </div>
        
  </footer>
</html>

