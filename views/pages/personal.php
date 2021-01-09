<?php
session_start();
include("connection.php");
include("functions.php");
include("isLogged.php");

$user_data = check_login($con);

?>
<h1>Personal page</h1>
<p>Hello, <?php echo $user_data['user_name']?></p>