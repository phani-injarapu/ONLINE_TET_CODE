<?PHP
  include 'conn.php';
  session_start();
  if(isset($_GET['ID']))
  {

      $b = $_GET['ID'];
      $q = "SELECT * FROM `uploadreg` WHERE `application_no` = '$b'";
      $query=mysqli_query($conn, $q);
      $row=mysqli_fetch_array($query);
      if($row['application_no']==$b)
      {
       
      }
   




  }
  else{
    echo "<script>alert(' wrong!..');</script>";
    header('location:upload_Photograph_Signature.php');
  }

     if(isset($_GET['ID'])){

      $a = $_GET['ID'];
      $sql = "SELECT * FROM `initialreg` WHERE `application_no` = '$a'";
      $querys=mysqli_query($conn, $sql);
      $row=mysqli_fetch_array($querys);
      if($row['application_no']==$a){
       
      }
    
  }else{
    echo "<script>alert('sarada wrong!..');</script>";
    header('location:upload_Photograph_Signature.php');
  }


if(isset($_SESSION["application_no"])){

    $ab=$_SESSION['application_no'];
    
    $bc="SELECT * FROM `initialreg` where `application_no`='$ab'";
    $cd = mysqli_query($conn,$bc);
    $da = mysqli_fetch_array($cd); 
    
  }else{
    header('location:loginpage.php');
  }

?>



<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PREVIEW & PAYMENTS | SIKKIM</title>
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
}


?>
 <br />
  <section>
<div class="container" style="width: 90%">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3" > 
                <a href="#step-1" type="button" class="btn btn-default btn-circle"><h4 class="glyphicon glyphicon-tasks"></h4></a>
                <p><small>COMPLETE REGISTRATION</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-2" type="button" class="btn btn-default btn-circle" ><h4 class="glyphicon glyphicon-camera"></h4></a>
                <p><small>PHOTOGRAPHY AND SIGNATURE</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-3" type="button" class="btn btn-success btn-circle" > <h4 class="glyphicon glyphicon-list-alt"></h4></a>
                <p><small>PREVIEW</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-4" type="button" class="btn btn-default btn-circle"><h4 class="glyphicon glyphicon-credit-card"></h4></a>
                <p><small>PAYMENTS</small></p>
            </div>
        </div>
    </div>



<form>

<div class="panel panel-primary setup-content" id="step-1" style="border:1px;">
<input type="button" name="po" style="height: 0px; width:0px; background-color: white; border-color: white" >
<center>  <div class="alert alert-success" role="alert" style="width: 100%;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> You have been registered  successfully !
</div></center>

     <div class="panel panel-primary" style="margin:20px;" >
	<div class="panel-heading">
        	<h3 class="panel-title">PERSONAL INFORMATION
      </h3>
	</div>
<div class="panel-body">


    	

<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-4 col-sm-4">
            <label for="name">Candidate's Name </label>

            <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' > ".$row['fname']." ".$row['mname']." ".$row['lname']."</div>";
        }
        ?>
        </div>


        <div class="form-group col-md-4 col-sm-4">
            <label for="email">Email Address </label>
                 <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' > ".$row['gmail']."</div>";
        }
        ?>
        </div>

        <div class="form-group col-md-4 col-sm-4">
            <label for="mobile">Mobile Number</label>
                <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' > ".$row['mobile']."</div>";
        }
        ?>
        </div>
</div>

<div class="col-md-12 col-sm-12">
        <div class="form-group col-md-4 col-sm-4">
            <label for="dob">Date Of Birth </label>
                 <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' > ".$row['dob']."</div>";
        }
        ?>
        </div>

        <div class="form-group col-md-4 col-sm-4">
            <label for="age">Age as on 1st July 2020</label>
		     <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' > ".$row['age']."</div>";
        }
        ?>
        </div>

       <div class = "form-group col-md-4 col-sm-4">

			 <label for="gender">Gender </label>     
	        <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' > ".$row['gender']."</div>";
        }
        ?>
	</div>
</div>


<div class="col-md-12 col-sm-12">
		<div class = "form-group col-md-6 col-sm-6">
	      <label for="qualification">Qualification </label>	 
     <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' > ".$row['qualification']."</div>";
        }
        ?>
	</div>

		<div class = "form-group col-md-6 col-sm-6">
	      <label for="category">Category</label>	 
	     <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm'> ".$row['category']."</div>";
        }
        ?>
	</div>
</div>




<div class="col-md-12 col-sm-12">
<div class="form-group col-md-4 col-sm-4">
            <label for="name">Father's Name<span style="color: red"> *</span> </label>
                <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm'> ".$row['fathername']."</div>";
        }
        ?>
        </div>

 <div class="form-group col-md-4 col-sm-4">
            <label for="name">Mother's Name<span style="color: red"> *</span> </label>
                   <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm'> ".$row['mothername']."</div>";
        }
        ?>
        </div>

        	<div class = "form-group col-md-4 col-sm-4">
	      <label for="service">Martial Status<span style="color: red"> *</span></label>	 
	            <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' > ".$row['martial']."</div>";
        }
        ?>
	</div>
</div>


<div class="col-md-12 col-sm-12">

	  <div class = "form-group col-md-4 col-sm-4">
	      <label for="service">Religion<span style="color: red"> *</span></label>	 
	            <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' > ".$row['religion']."</div>";
        }
        ?>
	</div>

	 <div class="form-group col-md-4 col-sm-4">
            <label for="name">Nationality<span style="color: red"> *</span> </label>
                   <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' > ".$row['nationality']."</div>";
        }
        ?>
        </div>
	 <div class="form-group col-md-4 col-sm-4">
            <label for="name">AADHAR No<span style="color: red"> *</span> </label>
                   <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' > ".$row['aadhar_no']."</div>";
        }
        ?>
        </div>
      </div>

<div class="col-md-12 col-sm-12">
	 <div class="form-group col-md-4 col-sm-4">
            <label for="name">Language-I<span style="color: red"> *</span> </label>
                   <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' > ".$row['langone']."</div>";
        }
        ?>
        </div>
   <div class="form-group col-md-4 col-sm-4">
            <label for="name">Language-II<span style="color: red"> *</span> </label>
                 <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm' > ".$row['langtwo']."</div>";
        }
        ?>
        </div>

        <div class="form-group col-md-4 col-sm-4">
            <label for="name">APPLICATION NO<span style="color: red"> *</span> </label>
                   <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm'  > ".$row['application_no']."</div>";
        }
        ?>

           
    

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
                       <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm'  > ".$row['presentone']."</div>";
        }
        ?>
        </div>
	 <div class="form-group col-md-4 col-sm-4">
            <label for="name">Address Line 2<span style="color: red"> *</span> </label>
                     <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm'  > ".$row['presenttwo']."</div>";
        }
        ?>
        </div>

         <div class="form-group col-md-4 col-sm-4">
            <label for="name">Address Line 3<span style="color: red"> *</span> </label>
                      <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm'  > ".$row['presentthree']."</div>";
        }
        ?>
        </div>
      </div>
	
<div class="col-md-12 col-sm-12">
		 <div class="form-group col-md-4 col-sm-4">
            <label for="name">State<span style="color: red"> *</span> </label>
                       <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm'  > ".$row['presentstate']."</div>";
        }
        ?>
        </div>

         <div class="form-group col-md-4 col-sm-4">
            <label for="name">District/City<span style="color: red"> *</span> </label>
                       <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm'  > ".$row['presentcity']."</div>";
        }
        ?>
        </div>

         <div class="form-group col-md-4 col-sm-4">
            <label for="name">Pincode<span style="color: red"> *</span> </label>
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm'  > ".$row['presentpincode']."</div>";
        }
        ?>
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
                      <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm'  > ".$row['perone']."</div>";
        }
        ?>
        </div>
	 <div class="form-group col-md-4 col-sm-4">
            <label for="name">Address Line 2<span style="color: red"> *</span> </label>
                      <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm'  > ".$row['pertwo']."</div>";
        }
        ?>
        </div>

         <div class="form-group col-md-4 col-sm-4">
            <label for="name">Address Line 3<span style="color: red"> *</span> </label>
                       <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm'  > ".$row['perthree']."</div>";
        }
        ?>
        </div>
	</div>

<div class="col-md-12 col-sm-12">
		 <div class="form-group col-md-4 col-sm-4">
            <label for="name">State<span style="color: red"> *</span> </label>
                       <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm'  > ".$row['perstate']."</div>";
        }
        ?>
        </div>

         <div class="form-group col-md-4 col-sm-4">
            <label for="name">District/City<span style="color: red"> *</span> </label>
                       <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm'  > ".$row['percity']."</div>";
        }
        ?>
        </div>

         <div class="form-group col-md-4 col-sm-4">
            <label for="name">Pincode<span style="color: red"> *</span> </label>
                       <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  class='form-control input-sm'  > ".$row['perpincode']."</div>";
        }
        ?>
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
              <th>Qualification Acquired/Examination Passed </th>
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
             <td class="input-sm"><div style="color: #265299;font-size: 14px; font-weight: bold">Class X/Matric <span style="color: red"> *</span></div></td>
                <?PHP
                                  include 'conn.php';
                                  $query="SELECT * FROM `educationreg` WHERE `application_no`= '$b'"; 
                                   $sql = mysqli_query($conn, $query);
                                   while($row=mysqli_fetch_array($sql)){
                                   echo "<td class='input-sm' ><div> ".$row['schoolname']."</div>  </td>";
                                  echo "<td class='input-sm' ><div> ".$row['schoolunder']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['schoolrc']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['schoolrn']."</div>  </td>";
                                  echo "<td class='input-sm' ><div> ".$row['schoolpassed']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['schooltmarks']."</div>  </td>";
                                  echo "<td class='input-sm' ><div> ".$row['schoolmarkso']."</div>  </td>";
                                  echo "<td class='input-sm' ><div> ".$row['schoolper']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['schooldiv']."</div>  </td>";
                              }
                              ?>
            </tr>


              <tr>
                <td class="input-sm"><div style="color: #265299;font-size: 14px; font-weight: bold">Class 12th/ Intermediate <span style="color: red"> *</span></div></td>
                 <?PHP
                                  include 'conn.php';
                                  $query="SELECT * FROM `educationreg` WHERE `application_no`= '$b'"; 
                                   $sql = mysqli_query($conn, $query);
                                   while($row=mysqli_fetch_array($sql)){
                                   echo "<td class='input-sm' ><div   > ".$row['clgname']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['clgunder']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['clgrc']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['clgrn']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['clgpassed']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['clgtmarks']."</div>  </td>";
                                  echo "<td class='input-sm' ><div> ".$row['clgmarkso']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['clgper']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['clgdiv']."</div>  </td>";
                              }
                              ?>
            </tr>




                 <tr>
                   <td class="input-sm"><div style="color: #265299;font-size: 14px; font-weight: bold">Graduate or Equivalent <span style="color: red"> *</span></div></td>
              
                  <?PHP
                                  include 'conn.php';
                                  $query="SELECT * FROM `educationreg` WHERE `application_no`= '$b'"; 
                                   $sql = mysqli_query($conn, $query);
                                   while($row=mysqli_fetch_array($sql)){
                                   echo "<td class='input-sm'><div   > ".$row['gradname']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['gradunder']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['gradrc']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['gradrn']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['gradpassed']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['gradtmarks']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['gradmarkso']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['gradper']."</div>  </td>";
                                  echo "<td class='input-sm' ><div> ".$row['graddiv']."</div>  </td>";
                              }
                              ?>
            </tr>


             <tr>
           <td class="input-sm"><div style="color: #265299;font-size: 14px; font-weight: bold">B.ED <span style="color: red"> *</span></div></td>
                   <?PHP
                                  include 'conn.php';
                                  $query="SELECT * FROM `educationreg` WHERE `application_no`= '$b'"; 
                                   $sql = mysqli_query($conn, $query);
                                   while($row=mysqli_fetch_array($sql)){
                                   echo "<td class='input-sm'><div   > ".$row['bedname']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['bedunder']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['bedrc']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['bedrn']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['bedpassed']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['bedtmarks']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['bedmarkso']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['bedper']."</div>  </td>";
                                  echo "<td class='input-sm' ><div> ".$row['beddiv']."</div>  </td>";
                              }
                              ?>
            </tr>

                  <tr>
                      <td class="input-sm"><div style="color: #265299;font-size: 14px; font-weight: bold">Post Graduate</div></td>

                  <?PHP
                                  include 'conn.php';
                                  $query="SELECT * FROM `educationreg` WHERE `application_no`= '$b'"; 
                                   $sql = mysqli_query($conn, $query);
                                   while($row=mysqli_fetch_array($sql)){
                                   echo "<td class='input-sm'><div   > ".$row['postname']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['postunder']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['postrc']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['postrn']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['postpassed']."</div>  </td>";
                                  echo "<td class='input-sm' ><div> ".$row['posttmarks']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['postmarkso']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['postper']."</div>  </td>";
                                 echo "<td class='input-sm' ><div> ".$row['postdiv']."</div>  </td>";
                              }
                              ?>
            </tr>



     
          </tbody>
        
        </table>
      </div>
    </div>
  </div>
</div>






</div>



	<div class="form-group pull-right" >
		<a class="btn btn-primary  nextBtn pull-right" >Next</a>
    </div>




</div></div>


<!-----------------------------------------------panel 2 --------------------------------------------------------------------------------------------------------->
<center>  <div class="alert alert-success" role="alert" style="width: 90%;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> You have been registered  successfully !
</div></center>

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
                <span class="btn btn-primary btn-file">
                  uploaded<input type='file'  name="picture" />
                </span>
              
					     <?PHP
              include 'conn.php';
               $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
              $sql = mysqli_query($conn, $query);
              while($row=mysqli_fetch_array($sql))
                 {

                     ?>  <td rowspan="4" colspan="2">
                        <center><img src = "<?PHP echo $row['picture']; ?>" height="200px" width="300px"></center>
                        </td>
                     <?php
                   }
              ?>



                    
                </div>
                
 <hr>

                 <div class="form-group">

                <label for="name" class="form-group col-md-4 col-sm-4">Upload Signature (JPG/JPEG Format only)<span style="color: red"> *</span> </label>
                 <span class="btn btn-primary btn-files">
               uploaded<input type='file'  name="signature" />
             </span>
              

					      <?PHP
              include 'conn.php';
               $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
              $sql = mysqli_query($conn, $query);
              while($row=mysqli_fetch_array($sql))
                 {

                     ?>  <td rowspan="4" colspan="2">
                        <center><img src = "<?PHP echo $row['signature']; ?>" height="200px" width="300px"></center>
                        </td>
                     <?php
                   }
              ?>

                    
                </div>
 <hr>
                <div class="col-md-8 col-sm-12">
                    <div class="form-group col-md-4 col-sm-4 pull-right" >
                
                <input type="submit" class="btn btn-success nextBtn"  value="Next"/>
              </div>
            </div>
            </div>
        </div>
      </div>
</form>















































 <!---------------------------------------panel 3--------------------------------------------------------------------------------------------------------------------->


 <div class="container" style="width: 90%">

 <div class="panel panel-primary setup-content" id="step-3">

  

            <div class="panel-heading">
                 <center><h3 class="panel-title">PREVIEW</h3></center>
            </div>
            <div class="panel-body">
<input type="button" name="po" style="height: 0px; width:0px; background-color: white; border-color: white" >








  <table class="table table-bordered table-hover" cellspacing="0" width="100%">


      <tbody>
          <tr>
              <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">APPLICATION NO:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  style='font-weight:bold;'> ".$row['application_no']."</div>";
        }
        ?>


              </td>

              <?PHP
              include 'conn.php';
               $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
              $sql = mysqli_query($conn, $query);
              while($row=mysqli_fetch_array($sql))
                 {

                     ?>  <td rowspan="4" colspan="2">
                        <center><img src = "<?PHP echo $row['picture']; ?>" height="200px" width="300px"></center>
                        </td>
                     <?php
                   }
              ?>


              
          </tr>


          <tr>
              <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">AADHAR CARD NO:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div style='font-weight:bold;'> ".$row['aadhar_no']."</div>";
        }
        ?>


              </td>

  



          </tr>


           <tr>
              <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;"> CANDIDATE NAME:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  style='font-weight:bold; color:#265299;'> ".$row['fname']." ".$row['mname']." ".$row['lname']."</div>";
        }
        ?>


              </td>
          </tr>

          <tr>
              <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">POST APPLIED FOR:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div   style='font-weight:bold;'> ".$row['post_applied']."</div>";
        }
        ?>


              </td>
          </tr>

          <tr>
              <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">QUALIFICATION:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  style='font-weight:bold;'> ".$row['qualification']."</div>";
        }
        ?>


              </td>
                             <?PHP
              include 'conn.php';
               $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
              $sql = mysqli_query($conn, $query);
              while($row=mysqli_fetch_array($sql))
                 {

                     ?>  <td rowspan="2" colspan="2">
                       <center><img src = "<?PHP echo $row['signature']; ?>" height="100px" width="300px"></center>
                        </td>
                     <?php
                   }
              ?>
          </tr>

          <tr>
              <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">ARE YOU DOMICILE OF SIKKIM:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div style='font-weight:bold;' > ".$row['domicile']."</div>";
        }
        ?>


              </td>

             

          </tr>

          <tr>
              <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">DISTRICT:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div style='font-weight:bold;'> ".$row['presentcity']."</div>";
        }
        ?>


              </td>
          

               
              <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">STATE:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div style='font-weight:bold;'> ".$row['presentstate']."</div>";
        }
        ?>


              </td>
          </tr>




             <tr>
              <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">SUBJECT APPLIED FOR:</h6></td>
              <td class="col-md4- input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div style='font-weight:bold;'> ".$row['subject']."</div>";
        }
        ?>


              </td>
          </tr>

                <tr>
              <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">DATE OF BIRTH:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div   style='font-weight:bold;'> ".$row['dob']."</div>";
        }
        ?>


              </td>


                <td class="col-md-6 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">AGE:</h6></td>
              <td class="col-md-6 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div   style='font-weight:bold;'> ".$row['age']."</div>";
        }
        ?>


              </td>
          </tr>


           <tr>
              <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">GENDER:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  style='font-weight:bold;'> ".$row['gender']."</div>";
        }
        ?>


              </td>


                <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">CATEGORY:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div style='font-weight:bold;'> ".$row['category']."</div>";
        }
        ?>


              </td>
          </tr>




           <tr>
              <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">ARE YOU A PWD WITH  40% OR MORE PERMANENT DISABLITY?:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div   style='font-weight:bold;'> ".$row['disability']."</div>";
        }
        ?>


              </td>


                <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">MARTIAL:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  style='font-weight:bold;'> ".$row['martial']."</div>";
        }
        ?>


              </td>
          </tr>




        <tr>
              <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">EMAIL ADDRESS:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  style='font-weight:bold;'> ".$row['gmail']."</div>";
        }
        ?>


              </td>


                <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">MOBILE NUMBER:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `initialreg` WHERE `application_no`= '$a'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div style='font-weight:bold;'> ".$row['mobile']."</div>";
        }
        ?>


              </td>
          </tr>


          <tr>
              <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">FATHER NAME:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  style='font-weight:bold;'> ".$row['fathername']."</div>";
        }
        ?>


              </td>


                <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">MOTHER NAME:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div style='font-weight:bold;'> ".$row['mothername']."</div>";
        }
        ?>


              </td>
          </tr>


                          <tr>
              <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">RELIGION:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  style='font-weight:bold;'> ".$row['religion']."</div>";
        }
        ?>


              </td>


                <td class="col-md-4 input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">NATIONALITY:</h6></td>
              <td class="col-md-4 input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div  style='font-weight:bold;'> ".$row['nationality']."</div>";
        }
        ?>


              </td>
          </tr>


       <tr>
              <td class="input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">PRESENT ADDRESS:</h6></td>
              <td colspan="3" class="input-sm input-md">
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
          echo "<div style='font-weight:bold;'> ".$row['presentone']." ,  ".$row['presenttwo']." ,  ".$row['presentthree']."</div>";
        }
        ?>


              </td>
          </tr>


       <tr>
              <td class="input-sm input-md"><h6 style="color:#265299; font-size14px; font-weight: bold;">PERMANENT ADDRESS:</h6></td>
              <td colspan="3" class="input-sm input-md" >
                  <?PHP
          include 'conn.php';
        $query="SELECT * FROM `uploadreg` WHERE `application_no`= '$b'"; 
        $sql = mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($sql)){
         echo "<div  style='font-weight:bold;'> ".$row['perone']." ,  ".$row['pertwo']." ,  ".$row['perthree']."</div>";
        }
        ?>


              </td>
          </tr>






      </tbody>
  </table>
<div class="panel-heading">
    <center><h3 class="panel-title" style="color:white">EDUCATIONAL QUALIFICATIONS</h3></center>
</div>
 <div class="row">
    <div class="col-xs-12">
      <div class="table-responsive">
        <table summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover">
          
          <thead>
            <tr>
              <th style="color: #265299;font-size: 14px; font-weight: bold">Qualification Acquired/Examination Passed </th>
              <th style="color: #265299;font-size: 14px; font-weight: bold">Name of the Institution from which passed</th>
              <th style="color: #265299;font-size: 14px; font-weight: bold">Name of the University to which Institution is affliated</th>
              <th style="color: #265299;font-size: 14px; font-weight: bold">Roll Code</th>
              <th style="color: #265299;font-size: 14px; font-weight: bold">Roll No</th>
              <th style="color: #265299;font-size: 14px; font-weight: bold">Year of Passing</th>
              <th style="color: #265299;font-size: 14px; font-weight: bold">Total Marks</th>
              <th style="color: #265299;font-size: 14px; font-weight: bold">Marks Obtained</th>
              <th style="color: #265299;font-size: 14px; font-weight: bold">Percentage of Marks</th>
              <th style="color: #265299;font-size: 14px; font-weight: bold">Division</th>

            </tr>
          </thead>
          <tbody>
            <tr>
             <td class="input-sm"><div style="color: #265299;font-size: 14px; font-weight: bold">Class X/Matric <span style="color: red"> *</span></div></td>
                <?PHP
                                  include 'conn.php';
                                  $query="SELECT * FROM `educationreg` WHERE `application_no`= '$b'"; 
                                   $sql = mysqli_query($conn, $query);
                                   while($row=mysqli_fetch_array($sql)){
                                   echo "<td class='input-sm' ><div> ".$row['schoolname']."</div>  </td>";
                                  echo "<td class='input-sm' ><div> ".$row['schoolunder']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['schoolrc']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['schoolrn']."</div>  </td>";
                                  echo "<td class='input-sm' ><div> ".$row['schoolpassed']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['schooltmarks']."</div>  </td>";
                                  echo "<td class='input-sm' ><div> ".$row['schoolmarkso']."</div>  </td>";
                                  echo "<td class='input-sm' ><div> ".$row['schoolper']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['schooldiv']."</div>  </td>";
                              }
                              ?>
            </tr>


              <tr>
                <td class="input-sm"><div style="color: #265299;font-size: 14px; font-weight: bold">Class 12th/ Intermediate <span style="color: red"> *</span></div></td>
                 <?PHP
                                  include 'conn.php';
                                  $query="SELECT * FROM `educationreg` WHERE `application_no`= '$b'"; 
                                   $sql = mysqli_query($conn, $query);
                                   while($row=mysqli_fetch_array($sql)){
                                   echo "<td class='input-sm' ><div   > ".$row['clgname']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['clgunder']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['clgrc']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['clgrn']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['clgpassed']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['clgtmarks']."</div>  </td>";
                                  echo "<td class='input-sm' ><div> ".$row['clgmarkso']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['clgper']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['clgdiv']."</div>  </td>";
                              }
                              ?>
            </tr>




                 <tr>
                   <td class="input-sm"><div style="color: #265299;font-size: 14px; font-weight: bold">Graduate or Equivalent <span style="color: red"> *</span></div></td>
              
                  <?PHP
                                  include 'conn.php';
                                  $query="SELECT * FROM `educationreg` WHERE `application_no`= '$b'"; 
                                   $sql = mysqli_query($conn, $query);
                                   while($row=mysqli_fetch_array($sql)){
                                   echo "<td class='input-sm'><div   > ".$row['gradname']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['gradunder']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['gradrc']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['gradrn']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['gradpassed']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['gradtmarks']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['gradmarkso']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['gradper']."</div>  </td>";
                                  echo "<td class='input-sm' ><div> ".$row['graddiv']."</div>  </td>";
                              }
                              ?>
            </tr>


             <tr>
           <td class="input-sm"><div style="color: #265299;font-size: 14px; font-weight: bold">B.ED <span style="color: red"> *</span></div></td>
                   <?PHP
                                  include 'conn.php';
                                  $query="SELECT * FROM `educationreg` WHERE `application_no`= '$b'"; 
                                   $sql = mysqli_query($conn, $query);
                                   while($row=mysqli_fetch_array($sql)){
                                   echo "<td class='input-sm'><div   > ".$row['bedname']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['bedunder']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['bedrc']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['bedrn']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['bedpassed']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['bedtmarks']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['bedmarkso']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['bedper']."</div>  </td>";
                                  echo "<td class='input-sm' ><div> ".$row['beddiv']."</div>  </td>";
                              }
                              ?>
            </tr>

                  <tr>
                      <td class="input-sm"><div style="color: #265299;font-size: 14px; font-weight: bold">Post Graduate</div></td>

                  <?PHP
                                  include 'conn.php';
                                  $query="SELECT * FROM `educationreg` WHERE `application_no`= '$b'"; 
                                   $sql = mysqli_query($conn, $query);
                                   while($row=mysqli_fetch_array($sql)){
                                   echo "<td class='input-sm'><div   > ".$row['postname']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['postunder']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['postrc']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['postrn']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['postpassed']."</div>  </td>";
                                  echo "<td class='input-sm' ><div> ".$row['posttmarks']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['postmarkso']."</div>  </td>";
                                   echo "<td class='input-sm' ><div> ".$row['postper']."</div>  </td>";
                                 echo "<td class='input-sm' ><div> ".$row['postdiv']."</div>  </td>";
                              }
                              ?>
            </tr>



     
          </tbody>
        
        </table>
      </div>
    </div>
  </div>

























              
	
   
         </div>        
          

    <input type="button" name="next"  class="btn btn-primary nextBtn pull-right" value="Next">



       </div>


 
 </div> 

</div>


















        <!------------------------------------------------------------panel4---------------------------------------------------------------------------------------->
 <div class="container" style="width: 90%;">
<div class="panel panel-primary setup-content" id="step-4">
 <form>
            <div class="panel-heading">
                 <h3 class="panel-title">PAYMENTS</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">NAME</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Your Name" required />
                </div>
                <div class="form-group">
                    <label class="control-label">EMAIL ADDRESS</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Email Address" required />
                </div>
                <button class="btn btn-danger nextBtn pull-right" type="submit">Start Payment</button>
            </div>
          </form>
        </div>
      </div>
</div>
<br>><br><br>






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

