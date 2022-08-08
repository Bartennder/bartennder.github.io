<?php


if (isset($_POST['form']))

$name = $_POST['name'];// это что ловим с формы 
$phone = $_POST['phone']; // это что ловим с формы
$email = $_POST['text']; // это что ловим с формы
// Можно приписывать так если ловить не надо 
// $zakaz = "Заказ с сайты XXX";

$token = "5315207825:AAHy7pYEqXSuD54MFSB6uqAmjhJbWhnJu2A"; // Это ТОКЕН
$chat_id = "-718849026"; // Это ИД группы

$arr = array(

// 'Заказ с сайты: ' => $zakaz,
  'Телефон: ' => $phone,
  'Имя: ' => $name,
  'Сообщение' => $text
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

// Это условие Если отправлено редирект если нет  ошибка Можно убрать!
if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}

?>
