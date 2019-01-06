<?php
  // name of the file that we store data to
  // we want to use this information in different files 
  $filename = "test.txt";
?>
<?php
// DB configuration
  $db_host = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name = "i218_phrases";
  $link = mysqli_connect($db_host, $db_user, $db_password, $db_name); 

$mailfun = false;
?>