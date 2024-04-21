<?php
namespace App\Controllers;

use Laminas\Diactoros\ServerRequest;

class FormsController
{
    public function sendToTg(ServerRequest $r)
    {
		 $data = $r->getParsedBody();
		 
		 $resp = self::sendTgMessage('Новое сообщение о консультации'.PHP_EOL.PHP_EOL.'Имя: '.$data['name'].PHP_EOL.'Телефон: '.$data['tel'].PHP_EOL.PHP_EOL.$data['message']);
		
		 if (json_decode($resp, true)['ok']){
			return ["success" => true];
		 }
		 return ["success" => false];
    }
	
	private function sendTgMessage($message) {
     $data = [
            'chat_id' => $_ENV['CHAT_ID'],
            'text' => $message,
        ];

    $url = 'https://api.telegram.org/bot'.$_ENV['BOT_TOKEN'].'/sendMessage';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
	return $result;
}
	
}