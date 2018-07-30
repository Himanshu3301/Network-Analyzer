<?php

$ipname=$_POST['ipname'];

$message ="" . $ipname ."\n";

  if ( file_exists("addcommand.sh")) {
      $file = "addcommand.sh";
	$content = file_get_contents($file);
	$content = str_replace($ipname,'', $content);
	$fh = fopen($file, 'w');
	fwrite($fh, $content);
	fclose($fh);

header("Location:deletecommand1.php");

  }

else {
     echo'<script type="text/javascript">alert("file does not exist")</script>';
  }

?>
