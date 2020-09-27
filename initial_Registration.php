
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>INITIAL | REGISTRATION</title>

 <link rel="icon" type="image/png" href="images/STETlogo.png"/>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>



	<script >
	    $(function () {
	        $('#datepicker').datepicker({
	            format: "dd/mm/yyyy",
	            autoclose: true,
	            todayHighlight: true,
		        showOtherMonths: true,
		        selectOtherMonths: true,
		        autoclose: true,
		        changeMonth: true,
		        changeYear: true,
		        orientation: "button",



	        });
	    });
	</script>

	<script type="text/javascript">
		$(document).ready(function () {
  handleDOBChanged();
});

//listener on date of birth field
function handleDOBChanged() {
    $('#dob').on('change', function () {
      if (isDate($('#dob').val())) {
        var age = calculateAge(parseDate($('#dob').val()), new Date());
        document.getElementById('agess').value = age;
      	$("#age1").text(age);   
      } else {
        $("#age1").text('');   
      }      
    });
}

//convert the date string in the format of dd/mm/yyyy into a JS date object
function parseDate(dateStr) {
  var dateParts = dateStr.split("/");
  return new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
}

//is valid date format
function calculateAge (dateOfBirth, dateToCalculate) {
    var calculateYear = dateToCalculate.getFullYear();
    var calculateMonth = dateToCalculate.getMonth();
    var calculateDay = dateToCalculate.getDate();

    var birthYear = dateOfBirth.getFullYear();
    var birthMonth = dateOfBirth.getMonth();
    var birthDay = dateOfBirth.getDate();

    var age = calculateYear - birthYear;
    var ageMonth = calculateMonth - birthMonth;
    var ageDay = calculateDay - birthDay;

    if (ageMonth < 0 || (ageMonth == 0 && ageDay < 0)) {
        age = parseInt(age) - 1;
    }
    return age;
}

function isDate(txtDate) {
  var currVal = txtDate;
  if (currVal == '')
    return true;

  //Declare Regex
  var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
  var dtArray = currVal.match(rxDatePattern); // is format OK?

  if (dtArray == null)
    return false;

  //Checks for dd/mm/yyyy format.
  var dtDay = dtArray[1];
  var dtMonth = dtArray[3];
  var dtYear = dtArray[5];

  if (dtMonth < 1 || dtMonth > 12)
    return false;
  else if (dtDay < 1 || dtDay > 31)
    return false;
  else if ((dtMonth == 4 || dtMonth == 6 || dtMonth == 9 || dtMonth == 11) && dtDay == 31)
    return false;
  else if (dtMonth == 2) {
    var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
    if (dtDay > 29 || (dtDay == 29 && !isleap))
      return false;
  }

  return true;
}


	</script>



	<script type="text/javascript">
	
$(document).ready(function(){
    $('.cpost_applied').click(function() {
        $('.cpost_applied').not(this).prop('checked', false);
    });
});

</script>

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



  <style type="text/css">

  	@import url(https://fonts.googleapis.com/css?family=Roboto+Slab);


  	body{
  	font-family: 'Roboto Slab';
  	}

.obscure {
  width: 100%;
  height: 100%;
  display: none;
  position: absolute;
  top: 0px;
  left: 0px;
  content: '';
  background: rgba(9, 9, 9, 0.67);
  z-index: 1;
}

.popup {
width: 30%;
padding: 10px 75px;
transform: translate(-50%, -50%) scale(0.5);
position: absolute;
top: 50%;
left: 50%;
box-shadow: 0px 2px 16px rgba(0, 0, 0, 0.5);
border-radius: 5px;
background: #fff;
text-align: center;
z-index: 3;
}
.popup .closeBtn {
display: inline-block;
position: absolute;
bottom: 20px;
right: 20px;
font-weight: bold;
text-decoration: none;
color: #333;
line-height: 10px;
}

.animationOpen, .animationClose {
  display: block;
  -webkit-transition: all ease .2s;
  transition: all ease .2s;
}

.animationOpen {
  -webkit-transform: translate(-50%, -50%) scale(1);
  opacity: 1;
  transform: translate(-50%, -50%) scale(1);
}

.animationClose {
	opacity: 0;
  -webkit-transform: translate(-50%, -50%) scale(.5);
  transform: translate(-50%, -50%) scale(.5);
}

@media screen and (max-width: 600px ) {
h1 {
margin-bottom: 10px;
font-size: 22px;
}


.popup{width: 80%;
padding: 10px 5%;}
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


    </header>


<?PHP

if(isset($_POST['submit']))
{
	$dob = $_POST["dob"];
}


?>




    <section>

<div class="container" style="width: 80%">
<div class="panel panel-primary" style="margin:20px; ">
	<div class="panel-heading" >
        	<h3 class="panel-title">INITIAL REGISTRATION</h3>
	</div>
<div class="panel-body">
    <form method="POST" onsubmit="return validation()"  action="initial.php" >

    	<div class="col-md-12 col-sm-12">
    		<label for="name">Post(s) Applied For <span style="color: red"> *</span></label><span id="postspan" class="text-danger font-weight-bold"> </span><br>
	<div class="form-group col-md-4 col-sm-4">

       
       <input type="checkbox" class="cpost_applied"  data-toggle="toggle" name="post_applied" value="Primary Teacher" id="post_applied"> <label>Primary Teacher</label>

    </div>

    <div class="form-group col-md-4 col-sm-4">

       
       <input type="checkbox" class="cpost_applied"  data-toggle="toggle" name="post_applied" value="Secondary Teacher" id="post_applied"> <label>Secondary Teacher </label>

    </div>

      <div class="form-group col-md-4 col-sm-4">

       
       <input type="checkbox" class="cpost_applied"  data-toggle="toggle" name="post_applied" value="Senior Secondary Teacher" id="post_applied"> <label>Senior Secondary Teacher </label>

    </div>


    </div>

<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-4 col-sm-4">
            <label for="name">Candidate's First Name <span style="color: red"> *</span></label>

            <input type="text" class="form-control input-sm" id="fname" name="fname" autocomplete="off">
            <span id="firstname" class="text-danger font-weight-bold"> </span>
            
        </div>
        <div class="form-group col-md-4 col-sm-4">
            <label for="name">Candidate's Middle Name</label>
            <input type="text" class="form-control input-sm" id="mname" name="mname" autocomplete="off">
        </div>

        <div class="form-group col-md-4 col-sm-4">
            <label for="name">Candidate's Last Name <span style="color: red"> *</span></label>
            <input type="text" class="form-control input-sm" id="lname" name="lname" autocomplete="off">
            <span id="lastname" class="text-danger font-weight-bold"> </span>
        </div>
</div>

<div class="col-md-12 col-sm-12">
        <div class="form-group col-md-4 col-sm-4">
            <label for="email">Email Address <span style="color: red"> *</span></label>
            <input type="email" class="form-control input-sm" id="gmail"name="gmail" autocomplete="off">
            <span id="gmailspan" class="text-danger font-weight-bold"> </span>
        </div>
        <div class="form-group col-md-4 col-sm-4">
            <label for="email">Confirm Email Address <span style="color: red"> *</span></label>
            <input type="email" class="form-control input-sm" id="cgmail" name="cgmail" autocomplete="off">
            <span id="cgmailspan" class="text-danger font-weight-bold"> </span>
        </div>

        <div class="form-group col-md-4 col-sm-4">
            <label for="mobile">Mobile Number <i style="font-size: 10px">(Enter a valid 10 digit mobile number) </i><span style="color: red"> *</span></label>
            <input type="text" class="form-control input-sm" id="mobile" name="mobile" autocomplete="off">
            <span id="mobilespan" class="text-danger font-weight-bold"> </span>
        </div>
    </div>

<div class="col-md-12 col-sm-12">
        <div class="form-group col-md-4 col-sm-4">
        	 <label for="dob">Date Of Birth  <i style="font-size: 10px">(Enter DOB as per AADHAR) </i><span style="color: red"> *</span></label>
        	<div class="input-group date " id='datepicker'>
           
            <input id="dob" class="form-control input-sm input-group-addon" id="dob" name="dob" style="background-color: white;" autocomplete="off">
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>

		    </div>
		    <span id="dobspan" class="text-danger font-weight-bold"> </span>

		    
        </div>

           <div class="form-group col-md-4 col-sm-4">
            <label for="age">Age<span style="color: red"> *</span></label>
              <input type="text" class="form-control input-sm" id="agess" name="agess" value="" autocomplete="off" readonly>

        </div>
       
 




       <div class = "form-group col-md-4 col-sm-4">

			 <label for="gender">Gender <span style="color: red"> *</span></label>     
	      <select class="form-control input-sm"  name="gender" required>
		<option value="">-- Select --</option>
		<option value="Male">Male</option>
		<option value="Female">Female</option>
	      </select>
	         <span id="genderspan" class="text-danger font-weight-bold"> </span>
	</div>
</div>
<div class="col-md-12 col-sm-12">
		<div class = "form-group col-md-6 col-sm-6">
	      <label for="category">Category<span style="color: red"> *</span></label>	 
	      <select class="form-control input-sm" name ="category" required>
		<option value="">-- Select --</option>
		<option value="UR (Un reserved)-General">UR (Un reserved)-General</option>
			<option value="EWS (Economically Weaker Section<">EWS (Economically Weaker Section)</option>
				<option value="EBS (Extremely Backward Class">EBS (Extremely Backward Class)</option>
					<option value="BC BC (Backward Class)">BC (Backward Class)</option>
		<option value="SC (Scheduled Caste)">SC (Scheduled Caste)</option>
		<option value="ST (Scheduled Tribe)">ST (Scheduled Tribe)</option>
	      </select>
	         <span id="categoryspan" class="text-danger font-weight-bold"> </span>
	</div>


		<div class = "form-group col-md-6 col-sm-6">

			 <label for="domicile">Are you Domicile of sikkim <span style="color: red"> *</span></label>     
	      <select class="form-control input-sm" id="domicile" name="domicile" required>
		<option value="">-- Select  --</option>
		<option value="yes">Yes</option>
		<option value="no">No</option>
	      </select>
	         <span id="domicilespan" class="text-danger font-weight-bold"> </span>
	</div>
</div>

	<div class = "form-group col-md-12 col-sm-12">
	      <label for="subject">Subject Applied For <span style="color: red"> *</span></label>	 
	      <select class="form-control input-sm" id="subject" name="subject" required>
		<option value="">-- Select --</option>
		<option value="Language-I">Language-I</option>
			<option value="Language-II">Language-II</option>
				<option value="Hindi">Hindi</option>
					<option value="Maths">Maths</option>
		
	      </select>
	         <span id="subjectspan" class="text-danger font-weight-bold"> </span>
	</div>

		<div class = "form-group col-md-12 col-sm-12">
	      <label for="qualification">Qualification <span style="color: red"> *</span></label>	 
	      <select class="form-control input-sm" name="qualification" required>
		<option value="">-- Select --</option>
		<option value="Graduate and B.Ed">Graduate and B.Ed</option>
			<option value="Graduate and B.Sc.Ed">Graduate and B.Sc.Ed</option>
				<option value="Graduate">Graduate</option>
					<option value="Secondary  Teacher">Secondary  Teacher</option>
		
	      </select>
	</div>


<div class="col-md-12 col-sm-12">



	<div class = "form-group col-md-6 col-sm-6">
	      <label for="service">Whether Ex-serviceman ?<span style="color: red"> *</span></label>	 
	      <select class="form-control input-sm" name="exservice" required>
		<option value="">-- Select --</option>
		<option value="yes">Yes</option>
			<option value="no">No</option>
	
		
	      </select>
	</div>
		<div class = "form-group col-md-6 col-sm-6">
	      <label for="service">Are you a Differently Abled Person-Divyang with 40% or more disability ?<span style="color: red"> *</span></label>	 
	      <select class="form-control input-sm" name="disability" required>
		<option value="">-- Select --</option>
		<option value="yes">Yes</option>
			<option value="no">No</option>
	
		
	      </select>
	</div>
</div>


<div class="form-group col-md-12 col-sm-12">

       
       <input type="checkbox" class="termssa" data-toggle="toggle" value="yes" name="termsa"> <label><b>I accept all terms and conditions mentioned in the advertisment.</b></label>
       <span id="termsaspan" class="text-danger font-weight-bold"> </span>
    </div>

<div class="col-md-12 col-sm-12">
	<div class="form-group" >
			<input type="button" onclick="res();" class="btn btn-danger  col-md-1 col-sm-1 pull-right" value="Reset" name="reset" />
			<span class="col-md-4 col-sm-4 pull-right"></span>
			<input name="submit"  type="submit" class="btn btn-success  col-md-2 col-sm-2 pull-right"  value="Save To Continue" />
			
</div>




			

</div>

</div>
</form>
</div>
</div>
</div>

</section>


<script>
	$(document).ready(function(){
        $('.termssa').click(function(){
            if($(this).prop("checked") == true){
                sweetAlert("YOU ACCEPTED OUR TERMS AND CONDITIONS");
            }
            else if($(this).prop("checked") == false){
                sweetAlert("YOUR NOT ACCEPTED OUR TERMS AND CONDITIONS SO READ OUR CONDITIONS.");
            }
        });
    });


</script>

	<script type="text/javascript">
		

		function validation(){

			var fname = document.getElementById('fname').value;
			var lname = document.getElementById('lname').value;
			var gmail = document.getElementById('gmail').value;
			var cgmail = document.getElementById('cgmail').value;
			var mobile = document.getElementById('mobile').value;
			var post_applied = document.getElementById('post_applied').value;
			var dob = document.getElementById('dob').value;
		

			if(dob == ""){
				document.getElementById('dobspan').innerHTML =" ** Please Enter your Date Of Birth";
				return false;
			}


			if(!$('input[name=post_applied]:checked').length>0){
				document.getElementById('postspan').innerHTML =" ** Please fill the  field";
				return false;
			}

			if(fname == ""){
				document.getElementById('firstname').innerHTML =" ** Enter your name";
				return false;
			}

			if((fname.length <= 2) || (fname.length > 20)) {
				document.getElementById('firstname').innerHTML =" ** Name lenght must be between 2 and 20";
				return false;	
			}

			if(!isNaN(fname)){
				document.getElementById('firstname').innerHTML =" ** Only characters are allowed";
				return false;
			}

			if(lname == ""){
				document.getElementById('lastname').innerHTML =" ** Eneter Your Surname";
				return false;
			}
			if((lname.length <= 2) || (lname.length > 20)) {
				document.getElementById('lastname').innerHTML =" ** Surname lenght must be between 2 and 20";
				return false;	
			}
			if(!isNaN(lname)){
				document.getElementById('lastname').innerHTML =" ** Only characters are allowed";
				return false;
			}


			if(gmail == ""){
				document.getElementById('gmailspan').innerHTML =" ** Enter your mail ID";
				return false;
			}
			if(gmail.indexOf('@') <= 0 ){
				document.getElementById('gmailspan').innerHTML =" ** @ Invalid Position";
				return false;
			}

			if(cgmail == ""){
				document.getElementById('cgmailspan').innerHTML =" ** Enter your mail ID again";
				return false;
			}

			if(gmail!=cgmail){
				document.getElementById('cgmailspan').innerHTML =" ** mail ID does not match the confirm Mail Id";
				return false;
			}
			
			if(mobile == ""){
				document.getElementById('mobilespan').innerHTML =" ** Enter your valid Mobile number";
				return false;
			}

			if(isNaN(mobile)){
				document.getElementById('mobilespan').innerHTML =" ** Characters are not allowed";
				return false;
			}
			if(mobile.length!=10){
				document.getElementById('mobilespan').innerHTML =" ** Mobile Number must be 10 digits only";
				return false;
			}


			if(!$('input[name=termsa]:checked').length>0){
				document.getElementById('termsaspan').innerHTML =" ** <a href='#' >**TERMS & CONDITIONS**</a><br> ** Check The condition its required";
				return false;
			}

	

			
		}
	

		function res()
		{

		swal({
 				 title: "Are you sure?",
 				 text: "Once deleted, you will not be able to recover this imaginary file!",
 				 icon: "warning",
 				 buttons: true,
 				 dangerMode: true,

			})
		.then((willDelete) => {
  						if (willDelete) {				 
   							 window.location="initial_Registration.php";

  } else {
    swal("Your data is safe!");
  }
});
		}


	</script>




<script type="text/javascript">
    $(document).ready(function() {
        var age = "";
        $('#dob').datepicker({
            onSelect: function(value, ui) {
                var today = new Date();
                age = today.getFullYear() - ui.selectedYear;
                $('#age').val(age);
            },
            changeMonth: true,
            changeYear: true
        })
    })
</script>

 
</body>

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