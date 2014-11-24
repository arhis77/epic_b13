<?php

$words = [
    ' asdf   ',
    'qфывфывБТЛДqwer ',
    ' aASd ',
    'zxcvzxcvASDFYWERT',
];

var_dump($words);
foreach ($words as $key => $value) {
    // убрать пробелы
    // привести к нижнему регистру
    $words[$key] = strtolower(trim($value));
}
var_dump($words);
// объединить в одну строку
// implode
