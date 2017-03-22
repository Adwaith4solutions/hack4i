

<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="style.css">

<title>test</title>


</head>
<body>

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hack4i";
// Create connection
$con = new mysqli($servername, $username, $password,$dbname);

  if(isset($_POST['save']))
{$a=$_POST["username"];
$b=$_POST["password"];
$c=$_POST["email"];

    $sql = "INSERT INTO usertest (name, password, email)
    VALUES ('".$a."','".$b."','".$c."')";
 
    $result = mysqli_query($con,$sql);
if($result==TRUE)
{
	echo "successful";
}
else
{
echo  "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
?>

<form action="" method="post"> 
<label id="first"> First name:</label><br/>
<input type="text" name="username"><br/>

<label id="first">Password</label><br/>
<input type="password" name="password"><br/>

<label id="first">Email</label><br/>
<input type="text" name="email"><br/>

<button type="submit" name="save">save</button>

</form>

</body>
</html>