<!DOCTYPE html>
<html>
<head>
	<title>CSM Home</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css/csm.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">

  <!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv min.j></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  -->
</head>
<body> 
 	
		<nav class="navbar navbar-expand-md">
		<img class="img-fluid" src="images/log.png" alt="logo">
		<button class="navbar-toggler navbar-dark"  type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon" ></span>
		
		</button>
		<div class="collapse navbar-collapse" id="main-navigation">

	 		<ul style="" class="navbar-nav navbar-right">
				<li> <a class="active" href="index.php">HOME</a></li>
				<li> <a
				href="csmServices.php">SERVICES</a></li>
				<li> <a
				href="csmRegistration.php">REGISTRATION</a></li>
				<li> <a href="csmLogin.php">MANAGEMENT</a></li>
				<li> <a href="csmContact.php">CONTACT US</a></li>
			</ul>
		</div>
		</nav>

		<div class="description" style="">
			<h1>Welcome to Classic Systems Infotech Limited!</h1>
			<p>Classic is an indigenous ICT firm that provides world class ICT and managerial trainings with a vision to empower Nigerians with the skills needed to succeed in this Information age.<span id="dots">...</span><span id="more">Classic is affiliated to the Federal University of Technology, Akure.Therefore, the certificate of training will be awarded by the Federal University of Technology, Akure.<br>Register with us today! </span></p>
			<button onclick="myFunction()" id="myBtn" class="btn btn-secondary btn-lg">Read More...</button>
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

<!--script for the readmore button-->
<script type="text/javascript">
	function myFunction(){
		var dots=document.getElementById('dots');
		var moreText=document.getElementById('more');
		var btnText=document.getElementById('myBtn');

		if(dots.style.display ==="none"){
			dots.style.display ==="inline";
			btnText.innerHTML = "Read more";
			moreText.style.display = "none";
		}
		else{
			dots.style.display = "none";
			btnText.innerHTML = "Read less";
			moreText.style.display = "inline";
		}
	}
</script>
<script type="text/javascript">
	<script type="text/javascript">
	$(document).ready(function(){
	$('.body').height($(window).height());
})
</script>
</script>
</body>
</html>