<?php

define('DESTROY', 'No, please, no');
$test = 'Ой, всё';

echo DESTROY;
echo $test;
unset($test);
echo $test;

unset(DESTROY);
echo DESTROY;
