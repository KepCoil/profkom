<?php

$frm_name  = "Вопрос с сайта ФДФП";
$recepient = "perekonwork@yadex.ru";
$sitename  = "Вопрос с сайта ФДФП";
$subject   = "Новая заявка с сайта \"$sitename\"";

$name     = trim($_POST["name"]);
$email    = trim($_POST["email"]);
$question = trim($_POST["question"]);

$message = "
E-mail: $email <br>
Имя: $name <br>
Вопрос: $question
";

mail($recepient, $subject, $message, "From: $frm_name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
