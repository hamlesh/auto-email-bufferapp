<?
// SRC: https://github.com/hamlesh/auto-email-bufferapp

function emailBuffer($F, $T, $L, $M)
{
	require_once "Mail.php";
	include('config.php');
	$headers = array('From'=>$F, 'To'=>$T, 'Subject'=>$M);
	$smtp = Mail::factory('smtp', array('host'=>$smtp_server, 'auth'=>true, 'username'=> $smtp_username, 'password'=>$smtp_password) );
	$mail = $smtp->send($buffer_email, $headers, $L);
	return $mail;
}
?>