<?php

function dd(...$vars)
{
    $backtrace = debug_backtrace()[0];

    echo '<pre style="background-color:black;color:lightgreen;padding:20px;">';
    echo '<strong> Arquivo: </strong>:' . $backtrace['file'] . '<br>';
    echo '<strong> Linha: </strong>:' . $backtrace['line'] . '<br><br>';
    foreach ($vars as $var) {
        var_dump($var);
    }
    echo '</pre>';
    die();
}
