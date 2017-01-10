<?php

ini_set('display_errors', 'On');

session_start();
	
$host="localhost";
$username="root";
$password="";
$db_name="login";
$tbl_name="UserName";

$con=mysqli_connect("$host", "$username", "$password") or die("Failed to connect to MySQL: " . mysqli_error());
$db=mysqli_select_db($con, "$db_name") or die("Failed to connect to MySQL1: " . mysqli_error());

function SignIn() {
	
	global $tbl_name, $con;
	$_SESSION['login']="0";
	
	if(!empty($_POST['user'])) {
		
		$sql="SELECT * FROM $tbl_name WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'";
		$query = mysqli_query($con, $sql) or die("Failed to authenticate" . mysqli_error($con));
		$row = mysqli_fetch_array($query);
		if(!empty($row['userName']) AND !empty($row['pass'])) {
			
			$_SESSION['userName'] = $_POST['user'];
			$_SESSION['login']="1";
			$_SESSION['message'] = "";
			Header("Location:home.php");
			
		} else {
			
			$_SESSION['message'] = "Incorrect Username/Password";
			Header("Location:index.php");
			
		}
		
	} else {
		
		$_SESSION['message'] = "No Username entered";
		Header("Location:index.php");
		
	}
}

if(isset($_POST['submit'])) {
	
	SignIn();
	
}

?>
