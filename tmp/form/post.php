<?php

require_once "./form-post.html";

$guest = null;
if (!empty($_POST['name'])) {
    $guest = $_POST['name'];
}

if ($guest) {
    echo "Witaj: $guest";
} else {
    $guest = 'anonymous';
    echo "Witaj po raz pierwszy, kim jesteś?";
}