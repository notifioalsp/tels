<?php

function telegram_send($message) {
    $curl = curl_init();
    $api_key  = '7112576393:AAEE651qcm01mMhZ3oqVL6utGoxCq0KI8JA';
    $chat_id  = '-4213384415';
    $format   = 'HTML';
    curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $api_key .'/sendMessage?chat_id='. $chat_id .'&text='. $message .'&parse_mode=' . $format);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    $result = curl_exec($curl);
    curl_close($curl);
    return true;
}

?>
