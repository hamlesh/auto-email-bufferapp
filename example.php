<?
// SRC: https://github.com/hamlesh/auto-email-bufferapp

include('config.php');
include('functions.php');

// you need to change $message and $link
// if you don't want to share a link, but buffer just test, then leave $link = ""; or $link=" ";

$message = "THE MESSAGE TO BUFFER GOES HERE";
$link = "IF THERES A LINK SPECIFIY IT HERE";


// don't edit below here
echo emailBuffer($email, $buffer_email, $link, $message);
?>