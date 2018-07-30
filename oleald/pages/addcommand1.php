<?php

$type=$_POST['type'];
$portnos=$_POST['Portno'];

$IP=$_POST['IP'];

$message ="scanpbnj"." ".$type." ".$portnos." ".$IP ."\n";

  if ( file_exists("addcommand.sh")) {
      $fp = fopen ("addcommand.sh", "a");
      fwrite($fp, $message);
      fclose($fp);

header("Location:addcommand.php");

  }

else {
     echo'<script type="text/javascript">alert("file does not exist")</script>';
  }

?>
