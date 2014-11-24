<?php

$values = [];
var_dump($values);

$values[] = 'first';
var_dump($values);

$values['qwer'] = 'second';
var_dump($values);


echo $values[0];

echo $values['qwer'];

$values[] = 'third';
var_dump($values);


var_dump(array_keys($values));
echo '<a href="http://vk.com/' . $friends[2]['vk_id'] . '">Vk</a>';