<?php
    $a = htmlspecialchars($_GET['a']);
    $b = htmlspecialchars($_GET['b']);

    $c = $a * $b;

    echo 'a умножить на b: ' . $c;

    $c = abs($c);

    if ($c < 10) {
        echo ' , это Однозначное ';
    } else if ($c < 100) {
        echo ' , это Двухзначное ';
    } else if ($c <= 999) {
        echo ' , это Трехзначное ';
    } else if ($c > 1000) {
        echo ' , это больше чем три знака ';
}
