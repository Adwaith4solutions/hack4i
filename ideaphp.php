<?php require 'connections/connect.php';?>
<?php
if(isset($_POST['Report']))
{
	
		session_start();
		$topic =$_POST['topic'];
		$abstract =$_POST['abstract'];
		$descp =$_POST['descp'];
  
        
		$sql=$con->query("INSERT INTO idea_info (topic,abstract,desc) values('{$topic}','{$abstract}','{$descp}');");
}
?>
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
<link href="css/Master.css" rel="stylesheet" type="text/css" />
 <link href="css/Menu.css" rel="stylesheet" type="text/css" />   

<h2> Report Shivaji Squads</h2>
<div id="tabs">
  <ul>
    <li><a href="index.html"><span>HOME</span></a></li>
    <li><a href="reg.php"><span>REGISTER</span></a></li>
    <li><a href="#"><span>ABOUT US</span></a></li>
    <li><a href="#"><span>CONTACT US</span></a></li>
     </ul>
</div>
<div>
&nbsp;
&nbsp;    
<form action=""  method="post">
<div class="FormElement">
<input name="topic" type="text" required="required" class="TField" id="topic" placeholder="Topic">
</div>    
<div class="FormElement">
  <input name="abstract" type="text" required="required" class="TField" id="abstract" placeholder="Location">
</div>
<div class="FormElement">
  <input name="descp" type="text" required="required" class="TField" id="descp" placeholder="Details of activity">
</div>
<div class="FormElement">    
<input name="Report" type="submit" class="button" id="Report" value="Report">    
    </div>    
</form> 
</div>    



