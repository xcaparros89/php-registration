<?php

namespace app;

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("failed to connect!"); //it's the same as exit
}
?>