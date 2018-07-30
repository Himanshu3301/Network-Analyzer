<?php

$ipname=$_POST['ipname'];

$message ="" . $ipname ."\n";

  if ( file_exists("zamp.txt")) {
      $file = "zamp.txt";
	$content = file_get_contents($file);
	$content = str_replace($ipname,'', $content);
	$fh = fopen($file, 'w');
	fwrite($fh, $content);
	fclose($fh);

header("Location:deleteip1.php");

  }

else {
     echo'<script type="text/javascript">alert("file does not exist")</script>';
  }

?>
