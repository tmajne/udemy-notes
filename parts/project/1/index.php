<?php

declare(strict_types=1);

namespace App;

error_reporting(E_ALL);
ini_set('display_errors', 1);

dump('Test 1');
dd('Test 2');
echo 'fooo';

function dump($var): void
{
    dd($var, false);
}

function dd($var, $exit = true, $details = false): void
{
    echo '<br/>';
    echo '<div
        style="
            display: inline-block;
            padding: 1px 10px;
            border: 1px solid gray;
            background: lightgray;
        "
    >';
        echo '<pre>';
            echo __FILE__ . ': '. __LINE__ . "\n";
            if ($details) {
                var_dump($var);
            } else {
                print_r($var);
            }
        echo '</pre>';
    echo '</div>';
    echo '<br/>';
    if ($exit) {
        exit;
    }
}