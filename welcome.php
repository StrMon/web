  
<?php
  $say = htmlspecialchars($_POST['name']);
  $to  = htmlspecialchars($_POST['email']);

  echo  $say, ' ', $to;
?>
