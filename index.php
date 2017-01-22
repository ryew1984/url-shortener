<?php
error_reporting(E_ALL); ini_set('display_errors', 1); 
require_once 'includes/db.php'; // The mysql database connection script


$shortenedUrl = $_REQUEST['url'];

$convertedUrl = hexdec($shortenedUrl);
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM urldepo where id=".$convertedUrl;
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        header('Location: '.$row["unshortenedurl"]);
    }
} else {
    echo "no url found";
}

?>