<?php
// Get the URL from the form
$url = $_GET['url'];

// Validate the URL
if (filter_var($url, FILTER_VALIDATE_URL)) {
    // Get the contents of the page
    $content = file_get_contents($url);
    
    // Set headers to display the content as a website
    header("Content-Type: text/html; charset=UTF-8");

    // Output the content of the website
    echo $content;
} else {
    echo "Invalid URL. Please try again.";
}
?>
