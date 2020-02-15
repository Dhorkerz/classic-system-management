<?php
session_start();
//connect to db
$servername="localhost";
$ftp_Username="root";
$password="";
$msg='';
$con=mysql_connect($servername,$ftp_Username,$password);
if(!$con){
	echo "there was error in making the connection".mysql_error();
}
else{
	$db=mysql_select_db('classicsystems');
	if(!$db){
		echo mysql_error();
	}
if(isset($_POST['Login'])){
//form processing
$username="";
$password="";
$username=$_POST['Username'];
$password=$_POST['Password'];
$query= "SELECT username from AdminUsers WHERE username = '$username'  AND password ='$password'";
$query=mysql_query($query);
	if (!$query) {
		die(mysql_error());
	}
	else{
		if(mysql_num_rows($query)!=1){
			$msg ='Username or Password Incorrect';
		}
		else {
			// start a session to maintain user login
			

			//store the user details in the session
			$_SESSION['user'] = $username;

			//set a cookie to regulate the activity of the user,a cookie takes 3 parameters:cookie name value and time of expiration

			setcookie('user',$_SESSION['user'],time()+60+60);
				//echo $_COOKIE['user'];
			//redirect user to the Homepage
			header('location:csmLoginDashboard.php?msg=WELCOME '. $username);
		}
	}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CSM Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	
  <link rel="stylesheet" type="text/css" href="css/csmxtension.css">

  <link rel="stylesheet" type="text/css" href="css/login.css">
	
</head>
<body>

<nav class="navbar navbar-expand-md">
		
		<img class="img-fluid" src="images/log.png" alt="logo">
		<button  class="navbar-toggler navbar-dark"  type="button" data-toggle="collapse" data-target="#main-navigation">
			<span  class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="main-navigation">

	 		<ul  class="navbar-nav navbar-right">
				<li><a href="index.php">HOME</a>
				</li>
				<li> <a href="csmServices.php">SERVICES</a></li>
				<li> <a href="csmRegistration.php">REGISTRATION</a></li>
				<li><a class="active" href="csmLogin.php">MANAGEMENT</a></li>
				<li> <a href="csmContact.php">CONTACT US</a></li>
			</ul>
		</div>
	</nav>

 
	<div class="container-fluid" id="wrapper">
		<div id="aside"> 

			<a href="csmLogin.php" class="col-12 active" id="link"> Home</a>
				
			<a href="csmProspect.php" class="col-12" id="link"> Receive Prospect</a>

			<a href="csmStudent.php" class="col-12" id="link">Enroll Student</a>

			<a href="csmCourses.php" class="col-12" id="link">Add Courses</a> 

			<a href="csmClasses.php" class="col-12" id="link">Add Classes</a>

			<a href="csmGradebook.php" class="col-12" id="link">Gradebook</a>

			<a href="csmPayment.php" class="col-12" id="link">Payment History</a>

			<a href="csmCertification.php" class="col-12" id="link">Certification</a>
		</div>
		
		<div id="main">	
			<header>
				<h5>CLASSIC'S STUDENT MANAGEMENT</h5>
			</header>
			<div id="content">
				<form method="POST" action="csmLogin.php">
					<span class="firstspan" >
							<?php
						if(isset($_GET['msg'])){
						echo  $_GET['msg'];
						}
						?>
					</span>

					<fieldset>
						<!--display error msg 'username or password incorrect-->
						<span class="secondspan"><?php if(isset($msg)){echo $msg; } ?>
						</span><br>
							
						<div class="form-group" id="usergroup">
							<label class="username">USERNAME: 
							</label>

							<input class="form-control" id="usercontrol" type="text" name="Username" >
						</div><br>

						<div class="form-group" id="passwordgroup">
							<label class="password"> PASSWORD:
							</label>

							<input class="form-control" id="passwordcontrol" type="Password" name="Password" required="">
						</div><br>

						<button class="btn btn-primary" type="submit" name="Login" value="Login"> LOGIN</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	

	<footer class="footer">
		<div class="container-fluid">
			<div id="below">
				<div class="footerbox below">
					<h6 class="text-uppercase font-weight-bold">ADO-EKITI</h6>
					<p>Olaoluwa House, opp. Adamolekun Estate, Adebayo, Ado-Ekiti, Ekiti State.
					<br>+234 806 441 1101</p>
				</div>

				<div class="footerbox below">
					<h6 class="text-uppercase font-weight-bold">ONDO</h6>
					<p>7a, Mode str. opp. Holy Trinity Ang. Church, Yaba, Ondo Town, Ondo State.
					<br>+234 806 441 1101</p>
				</div>

				<div class="footerbox below">
					<h6 class="text-uppercase font-weight-bold">OSHOGBO</h6>
					<p>Beside Eco Bank, Onward Junction, Gbn Road, Oshogbo, Osun State.
					<br>+234 806 441 1101</p>
				</div>

				<div class="below">
					<h6 class="text-uppercase font-weight-bold">IBADAN</h6>
					<p>20, Oyo Road, opp. UI Post Office, Ibadan, Oyo State.
					<br>+234 806 441 1101</p>
				</div>
			</div>
		</div>
		<div  class="copyright text-center">© 2020 Copyright. All Rights Reserved.</div>
	</footer>

<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
	$('.body').height($(window).height());
})
</script>
</body>
</html>