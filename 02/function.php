<?php
$test = 'text';

function textByAge($age = 99) {
    global $test;
    echo $test;
    if ($age < 20) {
        return "too young";
    } elseif ($age > 30) {
        return "wisdom";
    } else {
        return "sex, drugs, rock'n'roll";
    }
}


echo $age;
for ($i = 1; $i <= 100; $i++) {
    $value = textByAge($i);
    echo $value . "<br />";
}