<?php

//$con = mysqli_connect("localhost", "root", "", "citizenparticipation");
$con = mysqli_connect("127.0.0.1:49905", "azure", "6#vWHD_$", "citizenparticipation");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

define('DB_DRIVER', 'mysql');
define('DB_PREFIX', '');
define("DB_HOST", "127.0.0.1:49905");
define("DB_USER", "azure");
define("DB_PASSWORD", "6#vWHD_$");
define("DB_DATABASE", "citizenparticipation");

try {
    $DB = new PDO(DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_USER, DB_PASSWORD);
} catch (Exception $ex) {
    echo $ex->getMessage();
    die;
}
 
/*
if (!$con) {
die("Connection failed: " . mysqli_connect_error());
}

define('DB_DRIVER', 'mysql');
define('DB_PREFIX', '');
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "citizenparticipation");

try {
$DB = new PDO(DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_USER, DB_PASSWORD);
} catch (Exception $ex) {
echo $ex->getMessage();
die;
} */

define('TIMEZONE', 'America/Chicago');
date_default_timezone_set(TIMEZONE);
