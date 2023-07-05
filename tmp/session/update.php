<?php
// Inicjalizacja sesji
session_start();

// Modyfikacja wartości sesji
$_SESSION['username'] = 'Alice';

// Wyświetlenie komunikatu potwierdzającego zmianę
echo "Twoje dane zostały zaktualizowane!";
