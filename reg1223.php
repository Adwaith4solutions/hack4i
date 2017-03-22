<?php require 'connections/connect.php';?>
<?php
if(isset($_POST['register']))
{
	
		$fname =$_POST["fname"];
		$lname =$_POST["lname"];
		$gender =$_POST["gender"];
    $emailid=$_POST["email"];
        $contactno =$_POST["contactno"];
		$category =$_POST["cat"];
		$organization =$_POST["orgzn"];
		$password =$_POST["password"];
	
		$sql=$con->query("INSERT INTO user_info (first_name,last_name,sex,email_id,contact,designation,password)VALUES('{$fname}','{$lname}','{$gender}','{$emailid}','{$contactno}','{$category}','{$password}')");
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Hack4i @ CE Aranmula</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
 
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.png">
</head><!--/head-->
<div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="images/logo.png" alt="logo" style="height: 45px; width:270px;"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">Services</a></li> 
            <li class="scroll"><a href="#about-us">About Us</a></li>                     
            <li class="scroll"><a href="#portfolio">Portfolio</a></li>
            <li class="scroll"><a href="#team">Team</a></li>
            <li class="scroll"><a href="#blog">Blog</a></li>
            <li class="scroll"><a href="#contact">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><body style="background-image: url(images/reg.jpg); color:black;">
<div class="container-fixed">
   <form class="form-horizontal" method="POST">
    <div class="form-group">
       <label for="fname" class="control-label col-xs-2">First name</label>
       <div class="col-xs-10">
           <input name="fname" type="First name" class="form-control" id="fname" placeholder="Enter first name">
       </div>
    </div>
    <div class="form-group">
        <label for="lname" class="control-label col-xs-2">Last name</label>
        <div class="col-xs-10">
           <input name="lname"  type="Last name" class="form-control" id="lname" placeholder="Enter last name">
        </div>
     </div>
     <div class="form-group">
        <label for="gender" class="control-label col-xs-2">Gender</label>
        <div class="col-xs-10">
           <input name="gender" type="text" class="form-control" id="gender" placeholder="Enter gender">
        </div>
     </div>
     <div class="form-group">
        <label for="inputE-mail" class="control-label col-xs-2">Email</label>
        <div class="col-xs-10">
           <input name="email" type="email" class="form-control" id="email" placeholder="Enter e-mail">
        </div>
     </div>
     <div class="form-group">
        <label for="contactno" class="control-label col-xs-2">Contact number</label>
        <div class="col-xs-10">
          <input name="contactno" type="text" class="form-control" id="contactno" placeholder="Enter contact number">
        </div>
     </div>
     <div class="form-group">
        <label for="desg" class="control-label col-xs-2">Category</label>
        <div class="col-xs-10">
           <input name="cat" type="text" class="form-control" id="cat" placeholder="Enter designation">
        </div>
     </div>
     <div class="form-group">
        <label for="dept" class="control-label col-xs-2">Department</label>
        <div class="col-xs-10">
           <input name="dept" type="text" class="form-control" id="dept" placeholder="Enter department name">
        </div>
     </div>
     <div class="form-group">
        <label for="orgzn" class="control-label col-xs-2">Organization</label>
        <div class="col-xs-10">
           <input name="orgzn" type="text" class="form-control" id="orgzn" placeholder="Enter organization">
        </div>
     </div>
     <div class="form-group">
        <label for="password" class="control-label col-xs-2">Password</label>
        <div class="col-xs-10">
           <input name="password" type="password" class="form-control" id="password" placeholder="Enter password">
        </div>
     </div>
     <div class="form-group">
        <label for="cnfrm" class="control-label col-xs-2">Confirm password</label>
        <div class="col-xs-10">
           <input name="cnfrm" type="password" class="form-control" id="cnfrm" placeholder="Re-enter password">
        </div>
     </div>
    <div class="submit-btn">
        <button name="register" type="submit" class="btn btn-primary" id="register">Register</button>
    </div>
  </form>
 </div>
</body>
 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>

</html>
