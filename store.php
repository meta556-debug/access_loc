<?php
// Check if lat and long are set in the URL
if (isset($_GET['lat']) && isset($_GET['long'])) {
    $lat = $_GET['lat'];
    $long = $_GET['long'];

    // Prepare the data to be saved, including the current timestamp
    $data = "Latitude: $lat, Longitude: $long - " . date('Y-m-d H:i:s') . "\n";

    // Specify the path to the .txt file
    $file = 'locations.txt';

    // Open the file and append the data
    file_put_contents($file, $data, FILE_APPEND);
}
?>
