<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data sent via POST request
    $latitude = isset($_POST['lat']) ? $_POST['lat'] : 'Unknown';
    $longitude = isset($_POST['lon']) ? $_POST['lon'] : 'Unknown';
    $userAgent = isset($_POST['userAgent']) ? $_POST['userAgent'] : 'Unknown';
    $ipAddress = isset($_POST['ip']) ? $_POST['ip'] : 'Unknown';

    // Format the data to write to the file
    $log = "IP Address: $ipAddress\n";
    $log .= "Latitude: $latitude\n";
    $log .= "Longitude: $longitude\n";
    $log .= "User Agent: $userAgent\n";
    $log .= "--------------------------\n";

    // Define the path to the log file
    $file = 'location.txt';

    // Write data to the file
    $myfile = fopen($file, "a") or die("Unable to open file!");
    fwrite($myfile, $log);
    fclose($myfile);

    // Send a response back to the client
    echo "Data saved successfully!";
} else {
    echo "Invalid request method.";
}
?>
