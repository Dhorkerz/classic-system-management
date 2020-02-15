<?php
//perform data validation
function validateInput($userInput){
	if (isset($_POST["register"])) {
		if (empty($userInput)){
		$input_error= '<font color="red"> User input is empty </font>';
		return $input_error;
		}
	}
}
?>
<?php
//mysql_connect() uses the 3 parameters or server variables declared below, some  new versions of wamp server uses 4 parameters,the 4th parameter  is dbname.
$servername="localhost";
$ftp_Username="root";
$password="";
//creating the connection
$con=mysql_connect($servername,$ftp_Username,$password);
if(!$con){
	echo "there was error in making the connection".mysql_error();
}
else{
	//select the database
	$db=mysql_select_db('classicsystems');
	if(!$db){
		echo mysql_error();
	}
	if(isset($_POST['register'])){

	//perform form processing
	$formno="";
	$passport="";
	$surname="";
	$middle_name="";
	$other_names="";
	$contact_address="";
	$email_address="";
	$parent_address="";
	$phone="";
	$data_processing="";
	$laptop_eng="";
	$video_editing="";
	$networking="";
	$web_design="";
	$web_development="";
	$spss="";
	$hardware_eng="";
	$animation="";
	$peachtree="";
	$autocad="";
	$graphics_design="";
	$oracle="";
	$java="";
	$archicad="";
	$vb_net="";
	$revit="";
	$formno=$_POST['formno'];
	$passport=$_POST["passport"];
	$surname=$_POST['surname'];
	$middle_name=$_POST['middle_name'];
	$other_names=$_POST['other_names'];
	$contact_address=$_POST['address'];
	$email_address=$_POST['email'];
	$parent_address=$_POST['parent_address'];
	$phone=$_POST['phone'];
	$data_processing=$_POST['data_processing'];
	$laptop_eng=$_POST['laptop_eng'];
	$video_editing=$_POST['video_editing'];
	$networking=$_POST['networking'];
	$web_design=$_POST['design'];
	$web_development=$_POST['development'];
	$spss=$_POST['spss'];
	$hardware_eng=$_POST['hardware'];
	$animation=$_POST['animation'];
	$peachtree=$_POST['peachtree'];
	$autocad=$_POST['autocad'];
	$graphics_design=$_POST['graphics'];
	$oracle=$_POST['oracle'];
	$java=$_POST['java'];
	$archicad=$_POST['archicad'];
	$vb_net=$_POST['vb_net'];
	$revit=$_POST['revit'];

	$courses.=$data_processing.$laptop_eng.$video_editing.$networking.$web_design.$web_development.$spss.$hardware_eng.$animation.$peachtree.$autocad.$graphics_design.$oracle.$java.$archicad.$vb_net.$revit;

	//perform query
	$query="INSERT INTO registration(formno,
									passport,
									surname,
									middle_name,
									other_names,
									contact_address,
									email_address,
									parent_address,
									phone_no,
									course_of_study,
									registration_date)
	VALUES('$formno','$passport','$surname','$middle_name','$other_names','$contact_address','$email_address','$parent_address','$phone','$courses',now())";
	/*the now() function is an inbuilt mysql function used to generate the current date*/
	//execute the query
	$query=mysql_query($query);
	if (!$query) {
		die(mysql_error());
	}
	else{
		header('location:csmRegistration.php?msg= Registration Successfully');
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>CSM Registration</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="css/csm.css">
  <link rel="stylesheet" type="text/css" href="css/register.css">
  
</head>
<body>

<nav class="navbar navbar-expand-md">
		<img class="img-fluid" src="images/log.png" alt="logo">
		<button class="navbar-toggler navbar-dark"  type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon" ></span>
		
		</button>
		<div class="collapse navbar-collapse" id="main-navigation">

	 		<ul style="" class="navbar-nav navbar-right">
				<li> <a href="index.php">HOME</a></li>
				<li> <a
				href="csmServices.php">SERVICES</a></li>
				<li> <a class="active"
				href="csmRegistration.php">REGISTRATION</a></li>
				<li> <a href="csmLogin.php">MANAGEMENT</a></li>
				<li> <a href="csmContact.php">CONTACT US</a></li>
				
			</ul>
		</div>
	</nav>


<div class="container-fluid">	
	<div class="row" id="title"><div class="col-12" style=" "><h5 "> STUDENT'S REGISTRATION FORM </h5></div></div><br>
	<form class="img" action="csmRegistration.php" method="POST" enctype="multipart/form-data">
<?php
$servername="localhost";
$ftp_Username="root";
$password="";
//creating the connection
$con=mysql_connect($servername,$ftp_Username,$password);
$db=mysql_select_db('classicsystems');
$query = "SELECT * FROM passport WHERE passportname = '$file_name' AND passportpath = '$file_destination'";

$result = mysql_query($query) or die(mysql_error());

while($row=mysql_fetch_array($result))
{
 $file_name=$row["passportname"];
 $file_destination=$row["passportpath"];
 echo "img src=".$file_destination."/".$file_name." width=150 height=130";
}
?>

	
		<img src="<?php echo 'uploads/'.$file_name; ?>" width="150px" height="150px">
			<div class="form-group"><input class="passport" type="file" name="passport"></div>
			
			<div class="uploaddiv">
			<span class="success">
				<?php
				//connect to db
			$servername="localhost";
			$ftp_Username="root";
			$password="";
			//creating the connection
			$con=mysql_connect($servername,$ftp_Username,$password);
			if(!$con){
				echo "there was error in making the connection".mysql_error();
			}
				else{
					//select the database
					$db=mysql_select_db('classicsystems');
					if(!$db){
						echo mysql_error();
					}
					if (isset($_POST['upload'])) { 
				
				$file=$_FILES['passport'];
				$file_name=$_FILES["passport"]['name'];
				$file_size=$_FILES["passport"]['size'];
				$file_type=$_FILES["passport"]['type'];
				$file_tmpLocation=$_FILES["passport"]['tmp_name'];
				$file_error=$_FILES["passport"]['error'];
				$file_destination='uploads/'.$file_name;
   		  
   		  $query="INSERT INTO passport(passportname,passportpath)
   		  VALUES('$file_name','$file_destination')";
					if(move_uploaded_file($file_tmpLocation,$file_destination)){
					echo 'Successfully Uploaded';
					}
					$query=mysql_query($query);
				}
			}
		
			?>
			</span>
			<input class="btn btn-secondary" id="upload" name="upload" type="Submit" value="Upload">
			</div>
			
	</form><br>

	
<br><br><br><br><br><br><br><br><br>

	<form class="main" method="POST" action="csmRegistration.php">
		<ul class="outer-flex">
			<li>
				<label class="label" >SURNAME:
				</label> 
				<input class="form-control" required="" type="text" name="surname" size="100" value="<?php echo $_POST["surname"]; ?>">
			</li>
			<?php
			echo validateInput($_POST["surname"]);
			?>

			<li>
				<label class="label">MIDDLE NAME:
				</label> 
				<input class="form-control" type="text" required="" name="middle_name" size="100" value="<?php echo $_POST["middle_name"]; ?>">
			</li>
			<?php
			echo validateInput($_POST["middle_name"]);
			?>
			
			<li>
				<label class="label">OTHER NAMES:
				</label>
				<input class="form-control" type="text" required="" name="other_names" size="100" value="<?php echo $_POST["other_names"]; ?>">
			</li>
			<?php
			echo validateInput($_POST["other_names"]);?>

			<li>
				<label class="label">CONTACT ADDRESS:
				</label> 
				<input class="form-control" type="text" required="" name="address" size="100" value="<?php echo $_POST["address"]; ?>">
			</li>
			<?php
			echo validateInput($_POST["address"]);
			?>

			<li>
				<label class="label">E-MAIL ADDRESS: 
				</label>
				<input class="form-control" type="email" required="" name="email" size="100" value="<?php echo $_POST["email"]; ?>"></li>
			<?php
			echo validateInput($_POST["email"]);
			?>

			<li>
				<label class="label" >PARENT ADDRESS:
				</label>
				<input class="form-control" type="text" required="" name="parent_address" size="100" value="<?php echo $_POST["parent_address"]; ?>">
			</li>
			<?php
			echo validateInput($_POST["parent_address"]);
			?>

			<li>
				<label class="label">PHONE NO:
				</label>
				<input class="form-control" type="text" required="" name="phone" size="100" value="<?php echo $_POST["phone"]; ?>">
			</li>
			<?php
			echo validateInput($_POST["phone"]);
			?>

			<li>
				<label class="label">REGISTRATION DATE:
				</label> 
				<input class="form-control" type="date" required="" name="date" size="100" value="<?php echo $_POST["date"]; ?>">
			</li>
		
			<?php
			echo validateInput($_POST["date"]);
			?>
		</ul>
			
		<p class="course" >COURSE OF STUDY:</p>

		<div class="row">
			<div class="col-sm-12">
				<label class="label">SPSS</label>
				<input type="checkbox" name="spss" value="spss"><br>

			
				<label class="label">WEB DESIGN</label>
				<input type="checkbox" name="web_design" value="web_design"><br>
		

				<label class="label">LAPTOP ENG.</label>
				<input type="checkbox" name="laptop_eng" value="laptop_eng"><br>


				<label class="label">NETWORKING</label>
				<input type="checkbox" name="networking" value="networking"><br>

				
				<label class="label">VIDEO EDITING</label>
				<input type="checkbox" name="video_editing" value="video_editing"><br>
			
				<label class="label">WEB DEVELOPMENT</label>
				<input type="checkbox" name="web_development" value="web_development"><br>
			</div>
				
			<div class="col-sm-12">
				<label class="label">REVIT</label>
				<input type="checkbox" name="revit" value="revit"><br>

				<label class="label">AUTOCAD</label>
				<input type="checkbox" name="autocad" value="autocad"><br>

	
				<label class="label">PEACH TREE</label>
				<input type="checkbox" name="peachtree" value="peachtree"><br>
		

				<label class="label">ANIMATION</label>
				<input type="checkbox" name="animation" value="animation"><br>
			

				<label class="label">HARDWARE ENG.</label>
				<input type="checkbox" name="hardware_eng" value="hardware_eng"><br>

		
				<label class="label">GRAPHICS DESIGN</label>
				<input type="checkbox" name="graphics_design" value="graphics_design"><br>
			</div>

			<div class="col-sm-12">
				<label class="label">JAVA</label>
				<input type="checkbox" name="java" value="java"><br>
		

				<label class="label">VB.NET</label>
				<input type="checkbox" name="vb_net" value="vb_net"><br>


				<label class="label">ORACLE</label>
				<input type="checkbox" name="oracle" value="oracle"><br>


				<label class="label">ARCHICAD</label>
				<input type="checkbox" name="archicad" value="archicad"><br>
	

				<label class="label">LAPTOP ENG.</label>
				<input type="checkbox" name="laptop_eng" value="laptop_eng"><br>
					
				<label class="label">DATA PROCESSING</label>
				<input type="checkbox" name="data_processing" value="data_processing">
			</div>
		</div>
				
			
			

		<button class="btn btn-secondary" name="register" id="submit"  type="Submit">REGISTER
		</button><br><br>	
	</form>
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