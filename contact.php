<?php

if($isset($_POST['submit']))
{
$name = $_POST['name'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo = "shicheng1030@gmail.com";
$headers =  "From: ".$mailFrom;

mail($mailTo, $name, $message, $headers);

header("Location: index.html");
}
?>
