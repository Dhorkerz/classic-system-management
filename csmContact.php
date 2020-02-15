<?php
$subject="From:".$_POST['name'];
$headers=$_POST['email'];
$to="info@classics.com";
$msg=$_POST['message'];
mail($to, $subject, $message,$headers);

if (!mail($to, $subject, $message,$headers)) {
	echo "There was an error in sending your mail";}
else{
	echo "Your mail was sent successfully";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CSM Contact</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css/csm.css">

  <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body >
<nav class="navbar navbar-expand-md">
		<img class="img-fluid" src="images/log.png" alt="logo">
		<button  class="navbar-toggler navbar-dark"  type="button" data-toggle="collapse" data-target="#main-navigation">
			<span  class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="main-navigation">

	 		<ul class="navbar-nav navbar-right">
				<li><a href="index.php">HOME</a></li>
				<li> <a href="csmServices.php">SERVICES</a></li>
				<li> <a href="csmRegistration.php">REGISTRATION</a></li>
				<li> <a href="csmLogin.php">MANAGEMENT</a></li>
				<li><a class="active" href="csmContact.php">CONTACT US</a></li>
			</ul>
		</div>
	</nav>

	<div >	
	<div class="row">
		<div class="col-12 heading">
			<h5> CONTACT FORM </h5>
		</div>
	</div><br>

	<form class="form">
		<fieldset class="row" style="">
			<div class="col-sm-12 form-group">
				<input type="name" class="form-control" name="name" required="" placeholder="Name (required)">
			</div ><br>
				
			<div class="col-sm-12 form-group">
				<input type="email" required="" name="email" class="form-control" placeholder="E-Mail (required)">
			</div ><br>
			
			<div class="col-12">
				<textarea class="form-control" name="message" rows="5" cols="20" required="" placeholder="Enter your message..."></textarea><br><br>
			</div>
			<br/>
		</fieldset >
		<br/>
		<button class="btn btn-primary">Send Message
		</button>
	</form>

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