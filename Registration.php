<html>
	<head>
	<link rel="stylesheet" href ="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="registration.css" type="text/css"> -->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page	</title>
 <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
	</head>
	<body background="pics\one.jpg">
		<nav class="navbar navbar-light">
		 <div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-fixed-top" id="navigation" role="navigation" padding-bottom="17px">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Back</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">features</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Support<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">General Support</a>
								</li>
								<li>
									<a href="#">Forums</a>
								</li>
								<li>
									<a href="#">FAQ</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Contact Us</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Bug issues</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" />
						</div> 
						<button type="submit" class="btn btn-default">
							Submit
						</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Products</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Electronics</a>
								</li>
								<li>
									<a href="#">Sationaries</a>
								</li>
								<li>
									<a href="#">Clothes</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Furniture</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
<br>
<br>

<div cl=""



<div class="row" background-image="pics\blg.jpg">
<div class="col-sm-12">
<div class="well well-lg" style="
    padding: 0px 38px 0px 0px;">
<div class="row">



<div class="col-sm-5">
<!--  margin="20px" -->

<!-- <div class="page-header"> -->
  <h1>OpenCart <small>Account Registration</small></h1>

<!-- </div>
 --></div>

<!-- </div> -->
<div class="col-sm-2"><h3>
<a href="mainpageopencart.html">Sign up</a></h3><small>Become a member of opencart</small>
</div>


<div class="col-sm-2"><h3>
<a href="opencartLogin.html">Login</a></h3><small>access your account</small>
</div>


<div class="col-sm-2"><h3>
<a href="#">Users Online</a></h3><small>Currently 2910 users online</small>
</div>


<div class="col-sm-1"><h3>
<a href="opencartContact.html">Contact</a></h3>
<small>Need  some help?</small>
</div>

</div>
</div>

</div>
<div class="row">
<div class="col-sm-8">
<h3>Register for an opencart account</h3>
<div class="well well-lg">



<?php




$name =$Fname=$Lname=$Ename=$email=$password=$cpassword=$Captcha = "";
$nameERR =$FnameERR=$LnameERR=$EnameERR=$emailERR=$passwordERR=$cpasswordERR=$CaptchaERR = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	 {

	 	if (empty($_POST["name"])) 
	 		{$nameERR="Name is required";}
	  else {$name = test_input($_POST["name"]);}
	  


	 
	 	if (empty($_POST["Fname"])) 
	 		{$FnameERR="First Name is required";}
	  else {$Fname = test_input($_POST["Fname"]);}
	  

	 
	 	if (empty($_POST["Lname"])) 
	 		{$LnameERR="Last Name is required";}
	  else {$Lname = test_input($_POST["Lname"]);}


	 	if (empty($_POST["email"])) 
	 		{$emailERR="Email is required";}
	  else {$email = test_input($_POST["email"]);}


  
	 	if (empty($_POST["password"])) 
	 		{$passwordERR="password is required";}
	  else {$password = test_input($_POST["password"]);}


 
	 	if ($_POST["password"]==$_POST["cpassword"])
	 		{$cpasswordERR="password does not match";}
	  else {$cpassword = test_input($_POST["cpassword"]);}


 
	 	if (empty($_POST["Captcha"])) 
	 		{$CaptchaERR="Captcha is required";}
	 	else if($_POST["Captcha"]=="F5aW87")
	 		{$CaptchaERR="Wrong Captcha entered";}
	  else {$Captcha = test_input($_POST["Captcha"]);}


	

}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  // for security purpose it does cryptography
  return $data;
}





?>



<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  <!-- here comes php connection -->


<div class="form-group">
<label for="name">
*Username:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
<input type="text" name="name"/><?php echo $nameERR;?>
</div>
<div class="form-group">
<label for="Fname">
*First Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
<input type="text" name="Fname"/><?php echo $FnameERR;?>
</div>
<div class="form-group">
<label for="Lname">
*Last Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
<input type="text" name="Lname"/><?php echo $LnameERR;?>
</div>
<div class="form-group">
<label for="email">
*E-mail: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
<input type="email" name="email"/><?php echo $emailERR;?>
</div>
<div class="form-group">
<label for="website">
Website: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
<input type="text" name="website"/><!-- <?php echo $website;?> -->
</div>
</div>

<h3>Password</h3>
<div class="well well-lg">
<div class="form-group">
<label for="password">
Password: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
<input type="text" name="password"/><?php echo $passwordERR;?>
</div>
<div class="form-group">
<label for="cpassword">
*password confirm:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
<input type="text" name="cpassword"/><?php echo $cpasswordERR;?>
</div>
</div>
<h3>Captcha</h3>
<div class="well well-lg">
<div class="form-group">
<label for="Captcha">
Captcha:</label>:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="Captcha"/><?php echo $Captcha;?><br>
<SUB>ENTER THE CODE IN THE BOX BELOW</SUB>:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i>F5</i>a<b>W</b>87
</div></div>

<br><button type="submit" value="submit" class="btn btn-info" id="But">Submit</button>
</form>
</div>
<div class="col-sm-4">

<h4>Already have an account?</h4>
<p>Already have an account?<a href="opencartLogin.html">click here</a>
</p></div>
</div>
</div></div></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<!-- <script type="text/javascript">
	$("#But").on("click",function()
	{
	// 	$('#Log').attr('src','PartialLog.html');

	// });

	$.ajax(
	{
		url:"PartialLog.html",
	}).done(function(response){
		console.log(response);
		$('div#Log').html(response);
	});
});
$("#forgot").on("click",function()
	{
	// 	$('#Log').attr('src','PartialLog.html');

	// });

	$.ajax(
	{
		url:"PartialForgot.html",
	}).done(function(response){
		console.log(response);
		$('div#Log').html(response);
	});
});


</script> -->




	</body>
	</html>




