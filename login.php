<?php
session_start();
session_set_cookie_params(3600 * 24 * 7);
include ('database_connection.php');

$now = date("Y-m-d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];

if (isset($_POST['login'])) {
	$error = array();
		
	if (empty($_POST['username'])) {
		$error[] = 'No username provided';
	} else {
		$username = $_POST['username'];
	}
	
	if (empty($_POST['password'])) {
		$error[] = 'No password provided';
	} else {
		$password = $_POST['password'];
	}
}

$query_check_credentials = "SELECT * FROM `members` WHERE `Username`='$username' AND `Password`='$password' AND `Activation` IS NULL";
$result_check_credentials = mysqli_query($dbc, $query_check_credentials);

if(!$result_check_credentials)	{ 
	echo 'Username or Password is incorrect';
}

if (empty($error)) { 

	if (@mysqli_num_rows($result_check_credentials) == 1) {
	
	$_SESSION['username'] = $_POST['username'];
	
	/* Log all visits */
	$query_login = "INSERT INTO `visit` (`Username`, `Type`, `Timestamp`, `Ipaddress`, `Browser`) VALUES ('$username', 'Login', '$now', '$ip', '$browser')";
	$result_query_login = mysqli_query($dbc, $query_login);
		
	echo '<div class="success message">Welcome '.$_SESSION['username'].', you are succesfully logged in. Redirecting in progress.</p></div>';
	
	/* Send user to Member's area */
	header("Refresh: 5; url= page.php");
	die();
	} else {
		echo '<div class="warning message">Username or Password is incorrect. Redirecting to the main page.</p></div>';
		header("Refresh: 5; url= index.php");
	}
} else {
	echo '<div class="warning message"><ol>';
	foreach ($error as $key => $values) { 
	echo '<li>'.$values.'</li>';
	}
	echo '</ol></div>';
	header("Refresh: 5; url= index.php");
	die();
}
?>