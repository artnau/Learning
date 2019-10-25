<?php

    $visit = 0;
    if (isset($_COOKIE['counter'])){
    $visit = $_COOKIE['counter'];
    $visit++;
    }
    setcookie('counter', $visit);
    echo 'Ты тут наклацал ' . $visit . ' раз';

