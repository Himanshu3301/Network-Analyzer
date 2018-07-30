<?php
$db=mysqli_connect('127.0.0.1','bob','toor');
if(!$db)
{
echo "could not connect";	
}
if(!mysqli_select_db($db,'logindb'))
{
	echo "database not selected";
}

	$user=$_POST['username1'];
	$pass=$_POST['password1'];
	
	


$query="INSERT INTO records (Username,Password) VALUES ('$user','$pass')";


if(!mysqli_query($db,$query))
{
echo "signup failed";
}
else
{

echo "signup successful";

header("Location: welcome.php");
}
?>
