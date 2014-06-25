<!DOCTYPE html>
<html>
<head>
	<link href="./css/submit.css" rel="stylesheet" type="text/css">
	<link href="./css/avgrund.css" rel="stylesheet" type="text/css">
	<link href="./css/pure-min.css" rel="stylesheet" type="text/css">
	<link href="./css/font-awesome.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include ('database_connection.php');

session_start();

$now = date("Y-m-d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];

if (isset($_SESSION['username'])) {

	echo '<div class="success message">You are succesfully logged out</div>';
	$username = $_SESSION['username'];
	$query_logout = "INSERT INTO `visit` (`Username`, `Type`, `Timestamp`, `Ipaddress`, `Browser`) VALUES ('$username', 'Logout', '$now', '$ip', '$browser')";
	$result_query_logout = mysqli_query($dbc, $query_logout);
	
	session_destroy();
	header("Refresh: 5; url= page.php");
	die();

} else {

	$query_unregulated_visit = "INSERT INTO `visit` (`Username`, `Type`, `Timestamp`, `Ipaddress`, `Browser`) VALUES ('Unknown', 'Unregulated', '$now', '$ip', '$browser')";
	$result_query_unregulated_visit = mysqli_query($dbc, $query_unregulated_visit);
	
	header("Location: index.php");
	die();
}
?>
</body>
</html>