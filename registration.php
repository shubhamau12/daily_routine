<!DOCTYPE html>
<html>
<head>
<title>Daily Routine APP</title>
<!-- Meta tag Keywords -->
<style>
#btn_sign_up
{
	background:#FF00BF;
	color:white;
	font-size:25px;
	width:200px;
	height:60px;
	border-color:black;
	border-radius:20px;
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Sign Up Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/styler.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>

<script>
function regist()
{
	alert("hello");
	$.ajax(
	{
        
		type:'POST',
		url:'sign_up_process.php',
		data:$("#frm").serialize(),
		success:function(response)
		            {
						alert(response);
				if(response=="success")
					{
                     //alert("SignUp successfully Completed");
	            			// $("#frm1").slideUp(2000);
							  // $("#frm1").slideDown(2000);
							   // $("#frm1").load('index.php');
						window.location.href='index.php';
					}	
					else
					{
						alert("The email is already registered");
					}
					},
		error:function(response)
		         {
					 alert("error");
				 },
    	});
	  
	
	
}
</script>


</head>
<body>
<!--header-->
	
<!--//header-->
<!--main-->
<div class="main-agileits">
	<h2 class="sub-head">Sign Up</h2>
		<div class="sub-main">	
			<form method="post" id="frm">
				<input placeholder="First Name" name="name" class="name" type="text" required="">
				<input placeholder="Phone Number" name="number" class="number" type="text" required="">
					
				<input placeholder="Email" name="email" class="mail" type="text" required="">
				<input  placeholder="Password" name="Password" class="pass" type="password" required="">
				<input  placeholder="Confirm Password" name="password" class="pass" type="password" required="">
				
				<br><input type="button" value="SIGN UP" onclick="regist()" id="btn_sign_up"><br><br>
			</form>
		</div>
		<div class="clear"></div>
</div>
<!--//main-->

<!--footer-->

<!--//footer-->

</body>
</html>