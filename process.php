<?php
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$ipAddress = $_POST['ipAddress'];
$userAgent = $_POST['userAgent'];

$fileContent = "Latitude: $latitude\nLongitude: $longitude\nIP Address: $ipAddress\nUser Agent: $userAgent\n\n";

file_put_contents('location.txt', $fileContent, FILE_APPEND);
?>
