
<?php
include 'host.php';


$db=mysqli_connect('127.0.0.1','bob','toor');
mysqli_select_db($db,'logindb');

if (isset($_POST['username']) && isset($_POST['pass']))
   {
	$user=$_POST['username'];
	$pass=$_POST['pass'];
   }
if (!empty($user) && !empty($pass))
 {

	$query="SELECT 'id' FROM records WHERE Username='".mysqli_real_escape_string($db,$user)."' AND Password='".mysqli_real_escape_string($db,$pass)."' ";	
	$q=mysqli_query($db,$query);

	if(mysqli_num_rows($q)>=1)
		{
		echo "Login Successful";
		header("Location:/oleald/loginnew.php");
		}
	else
		{
			echo "Invalid username/password combination";
			header("Location: index.php");
		}
}
?>
<h3>bhak sahi username password daal</h3>
<input type="button" value="try again" onclick="window.location.href='index.php'" />
