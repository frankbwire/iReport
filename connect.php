<?php
$db = mysqli_connect('localhost', 'root', '', 'ireport');
// Check connection
if (!$db) {
    die("Connection failed: " . $db-> mysqli_connect_error());
}
?>
<!-- Add user session monitoring and termination -->
