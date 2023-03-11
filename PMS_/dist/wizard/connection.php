<?php

$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'pms';

//create connection

$connection = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname) or die("connection to database was not established".mysqli_error());

?>