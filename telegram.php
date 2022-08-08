<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$text = $_POST['text'];
$token = "5315207825:AAHy7pYEqXSuD54MFSB6uqAmjhJbWhnJu2A";
$chat_id = "-71884902";
$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Сообщение:' => $text
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  modal('Location: index.html');
} else {
  echo "Error";
}
?>
