<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$mysqli = new mysqli("localhost","root","","my_db");



// Check connection
if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}

INSERT INTO student (S.no, Name, Birthdate, Mobile, Email)
VALUES (value1, value2, value3, value3, );
?>