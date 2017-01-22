<?php
error_reporting(E_ALL); ini_set('display_errors', 1); 
require_once 'includes/db.php'; // The mysql database connection script

$unshortenedurl = $_REQUEST['url'];

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO urldepo (unshortenedurl, shortenedurl) VALUES ('".$unshortenedurl."','world')";

if ($mysqli->query($sql) === TRUE) {
    $last_id = $mysqli->insert_id;
    echo dechex($last_id);
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}


?>