<?php

function dd($var)
{
    echo '<pre style="background-color:black;color:lightgreen;padding:20px;">';
    var_dump($var);
    echo '</pre>';
    die();
}
