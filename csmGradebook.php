<?php 
session_start();
if (!isset($_COOKIE['user'])) {
	header('location:csmLogin.php?msg=You have not logged in');
}
?>
<?php
//form input validation
	function validateInput($userInput){
		if (isset($_POST["Grade"])) {
			if (empty($userInput)){
			$input_error= '<font color="red"> User input is empty </font>';
			return $input_error;
			}
		}
	}
?>
<?php
//db connection
	$servername="localhost";
	$ftp_Username="root";
	$password="";
	$con=mysql_connect($servername,$ftp_Username,$password);
	if(!$con){
		echo"there was error in making the connection".mysql_error();
	}
	//select db
	else{
		$db=mysql_select_db('classicsystems');
		if(!$db){
			echo mysql_error();
		}
		if(isset($_POST['Grade'])){
			//form processing
			$coursecode="";
			$assignment="";
			$test="";
			$practical="";
			$exam="";
			$total="";
			$average="";
			$remark="";
			$reviewedby="";
			$coursecode=$_POST['coursecode'];
			$assignment=$_POST['assignment'];
			$test=$_POST['test'];
			$practical=$_POST['practical'];
			$exam=$_POST['exam'];
			$total=$_POST['total'];
			$average=$_POST['average'];
			$remark=$_POST['remark'];
			$reviewedby=$_POST['reviewedby'];
			//perform query
			$query="INSERT INTO gradebook(coursecode,assignment,test,practicals,exams,total,average,remark,reviewed_by)
			VALUES('$coursecode','$assignment','$test','$practical','$exam','$total','$average','$remark','$reviewedby')";
			$query=mysql_query($query);
			if (!$query) {
				die(mysql_error());
			}
			else{
				/*query result which redirects user to the gradebook dashboard*/
				header('location:csmGradebookDashboard.php?msg= Grades Added Successfully');
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CSM Gradebook</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css/csmxtension.css">

  <link rel="stylesheet" type="text/css" href="css/gradebook.css">
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

			<a href="csmLogin.php" class="col-12" id="link"> Home</a>
				
			<a href="csmProspect.php" class="col-12" id="link"> Receive Prospect</a>

			<a href="csmStudent.php" class="col-12" id="link">Enroll Student</a>

			<a href="csmCourses.php" class="col-12" id="link">Add Courses</a> 

			<a href="csmClasses.php" class="col-12" id="link">Add Classes</a>

			<a href="csmGradebook.php" class="col-12 active" id="link">Gradebook</a>

			<a href="csmPayment.php" class="col-12" id="link">Payment History</a>

			<a href="csmCertification.php" class="col-12" id="link">Certification</a>
		</div>
		
		<div id="main">	
			<header>
				<h5>CLASSIC'S STUDENT MANAGEMENT</h5>
			</header>
			<div id="content">
				<a class="btn btn-primary" id="logout" href="logout.php">LOGOUT</a>  </button><br><br><br><br>

						
				<form method="POST" action="csmGradebook.php">

					<div class="form-group">
						<label >COURSECODE:</label>
						<input class="form-control" type="text" name="coursecode" value="<?php
							echo $_POST["coursecode"]; ?>"><br>
							<?php
							echo validateInput($_POST["coursecode"]);
							?>
					</div>

					<div class="form-group">
						<label >ASSIGNMENT:</label>
						<input class="form-control" type="text" name="assignment" value="<?php
							echo $_POST["assignment"]; ?>"><br>
							<?php
							echo validateInput($_POST["assignment"]);
							?>
					</div>
					
					<div class="form-group">
						<label>TEST:</label>
						<input class="form-control" type="text" name="test" value="<?php
							echo $_POST["test"]; ?>">
							<br>
							<?php
							//echo the input validation
							echo validateInput($_POST["test"]);
							?>
					</div>

					<div class="form-group">
						<label>PRACTICAL:</label>
						<input class="form-control" type="text" name="practical" value="<?php
							echo $_POST["practical"]; ?>">
						<?php
						echo validateInput($_POST["practical"]);
						?>
					</div>

					<div class="form-group">
						<label>EXAM:</label>
						<input class="form-control" type="text" name="exam" value="<?php
							echo $_POST["exam"]; ?>">
							<?php
							echo validateInput($_POST["exam"]);?>
					</div>

					<div class="form-group">
						<label>TOTAL:</label>
						<input class="form-control" type="text" name="total" value="<?php
							echo $_POST["total"]; ?>">
							<?php
							echo validateInput($_POST["total"]);?>
					</div>

					<div class="form-group">
						<label>AVERAGE:</label>
						<input class="form-control" type="text" name="average" value="<?php
							echo $_POST["average"]; ?>">
							<?php
							echo validateInput($_POST["average"]);?>
					</div>

					<div class="form-group">
						<label>REMARK:</label>
						<input class="form-control" type="text" name="remark" value="<?php
							echo $_POST["remark"]; ?>">
							<?php
							echo validateInput($_POST["remark"]);?>
					</div>

					<div class="form-group">
						<label>REVIEWED BY:</label>
						<input class="form-control" type="text" name="reviewedby" value="<?php
							echo $_POST["reviewedby"]; ?>">
							<?php
							echo validateInput($_POST["reviewedby"]);?>
					</div>

					<input class="btn btn-primary" type="submit" name="Grade" value="ADD GRADES">
					</form>
					</div>
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