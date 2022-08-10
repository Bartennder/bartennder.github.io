<?php


$token = "5315207825:AAHy7pYEqXSuD54MFSB6uqAmjhJbWhnJu2A";

$chat_id = "-718849026";

if ($_post['act'] == 'order') {
    $name = ($_post['name']);
    $phone = ($_post['phone']);
    $text = ($_post['text']);


    $arr = array(
        'Имя:' => $name,
        'Телефон:' => $phone,
        'Сообщение' => $text
    );

    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}");

    if ($sendToTelegram) {
        alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
    }

    else {
        alert('Что-то пошло не так. ПОпробуйте отправить форму ещё раз.');
    }
}


?>
