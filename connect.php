<?php
$connection = mysqli_connect('sql11.freemysqlhosting.net', 'sql11215321', '1utQGWtGwi'); // Host, DB user, Password 

if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}

$select_db = mysqli_select_db($connection, 'sql11215321'); // Database Name

if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
