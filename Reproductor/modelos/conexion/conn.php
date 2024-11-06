<?php
$conn = mysqli_connect('localhost' , 'root', '', 'videos');

if (!$conn) {
	die("Error: Failed to connect to database!");
}
