<?php

$recepient = "ukraine@ua";
$sitename = "Адапт сайт1";

$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);

$pagetitle = "Заказ з сайту \"$sitename\"";
$message = "Імя: $name \nТелефон: $phone";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");