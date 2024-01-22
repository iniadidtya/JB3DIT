<?php
// Display data from POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'process_post.php';
}

// Display data from GET method
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    include 'process_get.php';
}
?>
