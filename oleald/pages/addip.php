<?php

$ipname=$_POST['ipname'];

$message ="" . $ipname ."\n";

  if ( file_exists("zamp.txt")) {
      $fp = fopen ("zamp.txt", "a");
      fwrite($fp, $message);
      fclose($fp);
header("Location:addip1.php");
 
  }

else {
     echo'<script type="text/javascript">alert("file does not exist")</script>';
  }

?>
