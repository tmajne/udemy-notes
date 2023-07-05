<?php
// Inicjalizacja sesji
session_start();

// Odczytanie wartości sesji
$username = $_SESSION['username'];

// Wyświetlenie powitania
echo "Witaj, $username!";
