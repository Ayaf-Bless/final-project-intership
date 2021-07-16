<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "tracker_child_db";
$conect = mysqli_connect($host, $user, $password);
$select = mysqli_select_db($conect, $db);
