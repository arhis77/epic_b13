<?php

$text = 'Когда происходит отправка данных формы PHP-скрипту, информация из этой формы автоматически становится доступной ему. Существует много способов получения этой информации, например';
var_dump($text);

$words = explode(' ', $text);
var_dump($words);


$email = 'roma@evercodelab.com';
$words = explode('@', $email);

$domain = $words[1];
echo $domain;
