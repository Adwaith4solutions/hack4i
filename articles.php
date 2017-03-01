<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <title>Bootstrap</title>
</head>
<body>

<div class="services container">
  <h2>Tutorials</h2>
  <div class="row">

        <?php require 'connections/connect.php';?>
  <?php
      $stmt = $con->query("SELECT * FROM article_info");

  while ($row = $stmt->fetch_array()) {
    $id = $row['article_id'];
    
    $intro = $row['abstract'];
     $topic = $row['topic'];
    $image = $row['images'];
    echo ' <section class="col-sm-6 col-md-4 col-lg-2">';
    echo '<img src="'.$image.'" alt="HTML5 Icon" style=" align:center;width:240px;height:200px">';
         echo "<h3>".$topic."</h3>";
        echo "<p>".$intro."</p>";    
          echo'</section>';

  
}
$stmt->free();
$con->close();
?>
    

  </div><!-- row -->   
</div><!-- content container -->


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>