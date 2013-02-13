<?
// SRC: https://github.com/hamlesh/auto-email-bufferapp

include('config.php');
include('functions.php');

$message = "Are we connected on linkedin? Email address for connecting is in my summary :) - ";
$link = "http://www.linkedin.com/in/hamlesh";

echo emailBuffer($email, $buffer_email, $link, $message);
?>