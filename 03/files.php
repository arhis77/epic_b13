<?php

// прочитать текст из файл hipster.txt
$text = file_get_contents('hipster.txt');
// сделать преобразование
// разделяем факту текст из строки в массив абзацев
$paragraphs = explode("\n\n", $text);
var_dump($paragraphs);

krsort(array)


// сохранить текст в файл result.txt