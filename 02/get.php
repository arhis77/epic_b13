<?php

$input = isset($_GET['name']) ? $_GET['name'] : 'World';

if ($isset($_GET['name'])) {
    $input = $_GET['name'];
} else {
    $input = 'World';
}