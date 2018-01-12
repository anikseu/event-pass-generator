<?php
$connection = mysqli_connect('localhost', 'root', ''); // Host, DB user, Password 

if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}

$select_db = mysqli_select_db($connection, 'event'); // Database Name

if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}