
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

<div class="col-md-4">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="price">
  <?php require 'connections/connect.php';?>
  <?php
      $stmt = $con->query("SELECT * FROM article_info");

  while ($row = $stmt->fetch_array()) {
    $id = $row['article_id'];
    
    $intro = $row['abstract'];
     $topic = $row['topic'];
    $image = $row['images'];
    echo '<img src="'.$image.'" alt="HTML5 Icon" style="width:240px;height:240px">';
         echo "<br>".$topic;
        echo "<br>".$intro;    
    
        echo"<br><br>";


  
}
$stmt->free();
$con->close();
?>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
   
