

<!DOCTYPE html>
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

	.ReloadBtn { 
  background:url('https://cdn3.iconfinder.com/data/icons/basic-interface/100/update-64.png');   
  background-size : 100%;
  width: 22px; 
  height: 22px;
  border: 0px; outline none;
  position: absolute; 
  bottom: 10px;
  left : 290px;
  outline: none;
  cursor: pointer; /**/
}


.error { 
  color: red; 
  font-size: 12px; 
  display: none; 
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
    	<div class="container" style="width: 50%">

    	<div class="panel panel-primary" style="margin:20px;">
	<div class="panel-heading">
        	<h3 class="panel-title">CANDIDATE LOGIN</h3>
        
	</div>
<div class="panel-body " style="margin: 0 auto;">
    <form method="POST" action="login.php" onsubmit="return CheckCaptcha()" >


<div class="col-md-12 col-sm-12 ">
	<div class="form-group col-md-2 col-sm-2"></div>
	<div class="form-group col-md-8 col-sm-8">
	            <label for="name">Application Number<span style="color: red"> *</span></label>
            <input type="text" class="form-control input-sm" name="application_no" required>
     </div>
 </div>

 <div class="col-md-12 col-sm-12">
 	<div class="form-group col-md-2 col-sm-2"></div>
        <div class="form-group col-md-8 col-sm-8">
        	 <label for="dob">Date Of Birth <span style="color: red"> *</span></label>
        <div class="input-group date " id='datepicker'>
           
            <input id="dob" class="form-control input-sm input-group-addon" id="dob" name="dob" style="background-color: white;" autocomplete="off">
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>

		    </div>
        </div>

	


</div>

<div class="col-md-12 col-sm-12">
<div class="form-group col-md-2 col-sm-2"></div>
   <div class="form-group col-md-1 col-sm-1">
    
    <span id="WrongCaptchaError" class="error"></span>
    <div class="CaptchaWrap ">
      <div id="CaptchaImageCode">
        <canvas id="CapCode" class="capcode "></canvas>
      </div> 
      <input type="button" class="ReloadBtn" onclick='CreateCaptcha();'>
  </div></div></div>


  <div class="col-md-12 col-sm-12">
<div class="form-group col-md-2 col-sm-2"></div>
   <div class="form-group col-md-8 col-sm-8">

    <input type="text" id="UserCaptchaCode" class="CaptchaTxtField form-control input-sm" placeholder='Enter Captcha - Case Sensitive'></div>
  </div>
  <script type="text/javascript">
  	var cd;

$(function() {
  CreateCaptcha();
});

// Create Captcha
function CreateCaptcha() {
  //$('#InvalidCapthcaError').hide();
  var alpha = new Array(
    "A",
    "B",
    "C",
    "D",
    "E",
    "F",
    "G",
    "H",
    "I",
    "J",
    "K",
    "L",
    "M",
    "N",
    "O",
    "P",
    "Q",
    "R",
    "S",
    "T",
    "U",
    "V",
    "W",
    "X",
    "Y",
    "Z",
    "a",
    "b",
    "c",
    "d",
    "e",
    "f",
    "g",
    "h",
    "i",
    "j",
    "k",
    "l",
    "m",
    "n",
    "o",
    "p",
    "q",
    "r",
    "s",
    "t",
    "u",
    "v",
    "w",
    "x",
    "y",
    "z",
    "0",
    "1",
    "2",
    "3",
    "4",
    "5",
    "6",
    "7",
    "8",
    "9"
  );

  var i;
  for (i = 0; i < 6; i++) {
    var a = alpha[Math.floor(Math.random() * alpha.length)];
    var b = alpha[Math.floor(Math.random() * alpha.length)];
    var c = alpha[Math.floor(Math.random() * alpha.length)];
    var d = alpha[Math.floor(Math.random() * alpha.length)];
    var e = alpha[Math.floor(Math.random() * alpha.length)];
    var f = alpha[Math.floor(Math.random() * alpha.length)];
  }
  cd = a + " " + b + " " + c + " " + d + " " + e + " " + f;
  $("#CaptchaImageCode")
    .empty()
    .append(
      '<canvas id="CapCode" class="capcode" width="250" height="80"></canvas>'
    );

  var c = document.getElementById("CapCode"),
    ctx = c.getContext("2d"),
    x = c.width /2,
    img = new Image();

  img.src =
    "images/blu.png";
  img.onload = function() {
    var pattern = ctx.createPattern(img, "repeat");
    ctx.fillStyle = pattern;
    ctx.fillRect(0, 0, c.width, c.height);
    ctx.font = "46px Roboto Slab";
    ctx.fillStyle = "#ccc";
    ctx.textAlign = "center";
    ctx.setTransform(1, -0.12, 0, 1, 0, 15);
    ctx.fillText(cd, x, 55);
  };
}

// Validate Captcha
function ValidateCaptcha() {
  var string1 = removeSpaces(cd);
  var string2 = removeSpaces($("#UserCaptchaCode").val());
  if (string1 == string2) {
    return true;
  } else {
    return false;
  }
}

// Remove Spaces
function removeSpaces(string) {
  return string.split(" ").join("");
}

// Check Captcha
function CheckCaptcha() {
  var result = ValidateCaptcha();
  if (
    $("#UserCaptchaCode").val() == "" ||
    $("#UserCaptchaCode").val() == null ||
    $("#UserCaptchaCode").val() == "undefined"
  ) {
    $("#WrongCaptchaError")
      .text("Please enter code given below in a picture.")
      .show();
    $("#UserCaptchaCode").focus();
    return false;
   
  } else {
    if (result == false) {
      $("#WrongCaptchaError")
        .text("Invalid ")
        .show();
      CreateCaptcha();
      $("#UserCaptchaCode")
        .focus()
        .select();
        return false;
    } else {
      $("#UserCaptchaCode")
        .val("")
        .attr("place-holder", "Enter Captcha - Case Sensitive");
      CreateCaptcha();
      $("#WrongCaptchaError").fadeOut(100);
      $("#SuccessMessage")
        .fadeIn(500)
        .css("display", "block")
        .delay(5000)
        .fadeOut(250);
    }
  }
}

  </script>

<center>
<div class="col-md-7 col-sm-12">
	<div class="form-group col-md-3 col-sm-3 pull-right" >
			<input type="submit" class="btn btn-primary" value="Submit"/>
	</div>
</div>
</center>
</form>
</div>

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









</div>




    </section>

	
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