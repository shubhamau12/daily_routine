<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<title>DAILY ROUTINE APP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script>
			function signup()
			{
				$.ajax(
				{
					type:'POST' ,
					url:'loginprocess.php',
					data:$('#frm1').serialize(),
					success:function(response)
					{
						
						if(response=="success")
						{
							alert("login successful");
							window.location.href='user_routine.php';
						}
						else
						{
							alert("Wrong user name and password");
						}
					},
					
				});
			}
			
			</script>		
		
	</head>
	<body>
	
	   <div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg.jpg');">
			<div class="wrap-login100">
	     <form class="login100-form validate-form" id="frm1">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						DAILY ROUTINE APP
					</span>
		
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="email" id="email" placeholder="Enter Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
		            <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pwd" id="pwd" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					
					
					  <center><button type="button" class="login100-form-btn" id="btn" onclick="signup()">Submit</button>
					  <div class="" style="text-align:center">
						<a class="txt1" href="#">
							Forgot Password?
						<span>||</span>
						<a class="txt1" href="registration.php">
							Register here
						</a>
					</div>
					
					  
				</form>
				</div>
				</div>
			
		</div>
	</body>
</html>
