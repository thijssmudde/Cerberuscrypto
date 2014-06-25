<?php
/* Define constant to connect to database */
DEFINE('DATABASE_USER', 'cerberuscrypto.c');
DEFINE('DATABASE_PASSWORD', '4gik6PG85yEMoMEf');
DEFINE('DATABASE_HOST', 'http://do1.pcmerc.net:10000');
DEFINE('DATABASE_NAME', 'cerberuscrypto_com');

/* Default time zone, to be able to send mail */
date_default_timezone_set('America/Los_Angeles');

/* This is the address that will appear coming from ( Sender ) */
DEFINE('EMAIL', 'support@cerberuscrypto.com');

/* Root url where the script will be found */
DEFINE('WEBSITE_URL', 'https://cerberuscrypto.com');

// Make the connection:
$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);

if (!$dbc) {
	trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}
?>