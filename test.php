<?php require 'connections/connect.php';?>
  <?php
      $stmt = $con->query("SELECT * FROM articles");

while ($row = $stmt->fetch_array()) {
    $id = $row['article_id'];
    
    $body = $row['body'];
    $image = $row['images'];
    $userid = $row['user_info_user_id'];
    echo '<img src="'.$image.'" alt="HTML5 Icon" style="width:240px;height:240px">';
    
        echo "<br>Article id=".$id;
         echo "<br>Body=".$body;
        echo "<br> User id=".$userid;    
    
        echo"<br><br>";


  
}

   
$stmt->free();
$con->close();
?>