<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "Admin@123"; /* Password */
$dbname = "TUTORIALS"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>
