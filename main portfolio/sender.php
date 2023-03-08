<?php

    $token = "5602439964:AAERlwAz6IwxWZGDdArA8ZZ6nLblgKZLIBc";

    $chat_id = "-955137119";

    $name = $_POST["name"];
    $mail = $_POST["email"];
    $idea = $_POST["idea"];
    $message = $_POST["message"];

    $arr = array (
        'Имя: ' => $name,
        'Почта: ' => $mail,
        'Тема: ' => $idea,
        'Сообщение: ' => $message
    );

    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

    if ($sendToTelegram) {
        alert('Спасибо, скоро свяжусь с вами!');
    } else {
        alert('Что-то пошло не так, попробуйте еще раз отправить форму');
    }
?>