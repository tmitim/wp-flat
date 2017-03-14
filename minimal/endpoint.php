<?php
/**
 * Template Name: blink
 */
?>

Hi There

<?php 
$message = str_replace(" ", "", $_GET['title']);
$message = str_replace(array("\'", "\\\"", "&quot;"), "", htmlspecialchars($message));
$message = str_replace("\\", "", $message);
$url = "http://9ebc8607.ngrok.io/blink1/morse?message=" . $message . "&time=.2&log=1&rgb=%23009933";
$json = wp_remote_fopen($url);
?>