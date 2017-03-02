 <?php require 'connections/connect.php';?>
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
       
  <?php
      $stmt = $con->query("SELECT * FROM article_info where article_id=1");

  while ($row = $stmt->fetch_array()) {
    $id = $row['article_id'];
    
    $intro = $row['abstract'];
     $topic = $row['topic'];
    $image = $row['images'];
    $content=$row['desc'];
  
    echo '<img src="'.$image.'" alt="HTML5 Icon" style="width:50%;
  height:50%; 
   display: block;
    margin-left: auto;
    margin-right: auto ">';
  
    echo'<section class="container-fixed">';
       echo'<div class="page" style="margin-left:20px; margin-right:20px;">';
      echo'<div class="topic" style="text-align:center;">';
         echo "<h3>".$topic."</h3>";
      echo '</div>';
        echo "<p>".$content."</p>";  
      echo'</div>';
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