<?php

$to = "nva073@yandex.ru";
$from = "support@els-energo.ru";
$subject = "Новый вопрос с сайта от " . $_REQUEST["email"];
$message = "Имя: ". $_REQUEST["name"] . "\n";
$message .= "Телефон: ". $_REQUEST["phone"] . "\n";
$message .= "Электронная почта: ". $_REQUEST["email"] . "\n";
$message .= "Вопрос:\n". $_REQUEST["question"];

$result = mail($to, $subject, $message, "From: " . $from);