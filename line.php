 <?php
  

function send_LINE($msg, $replyToken){
 $access_token = '2FFGevLRjlbzKli1poBDxAVNXrShXytLrBw4sTpG9lGFqQi8ObAqr2gdiMjs99Am8OLFZIYvn/ytIzZoifgk+6HWshJKVgNVg4JlifaklIChp0ENVaMRClEM6KzgkZuwfh+GS0t2kZdu2IJbo1bzmwdB04t89/1O/w1cDnyilFU='; 
  $messages = [
        'type' => 'text',
        'text' => $msg
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U7ba141551c8bb428e585159a0b0484ce',
        'messages' => [$replyToken],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
