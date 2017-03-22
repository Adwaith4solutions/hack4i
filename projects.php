
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
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="services container">
  <h2>Tutorials</h2>
  <div class="row">

        <?php require 'connections/connect.php';?>
  <?php
      $stmt = $con->query("SELECT * FROM project_info");

  while ($row = $stmt->fetch_array()) {
    $id = $row['id'];
    
    $intro = $row['abstract'];
     $topic = $row['topic'];
    $image = $row['images'];
     $likes = $row['likes'];
     $views = $row['views'];
    echo ' <section class="col-sm-6 col-md-3 col-lg-3">';
      echo'<a href="topic.php">';
    echo '<img src="'.$image.'"alt="HTML5 Icon" style=" align:center;width:240px;height:200px"></a>';
      echo'<div><span><i class="fa fa-heart"></i>'.$likes.'  Likes </span>'; 
      echo '<span>  <i class="fa fa-eye"></i>'.$views.' Views</span></div>';   
      echo "<h3>".$topic."</h3>";

        echo "<p>".$intro."</p>";   


?>

<form action="tutorial_topic.php" method="GET">
<input type=hidden name='id_no' value=<?= $id?>>
<input type = "submit" name='view' id="view" value="View more">
</form><?php echo'</section>';
}
      
?>
    

  </div><!-- row -->   
</div><!-- content container -->

<script src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">



</script>

<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>