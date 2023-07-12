<?php

require_once "./form.html";

$guest = null;
if (!empty($_GET['name'])) {
    $guest = $_GET['name'];
}

if ($guest) {
    echo "Witaj: $guest";
} else {
    $guest = 'anonymous';
    echo "Witaj po raz pierwszy, kim jesteś?";
}