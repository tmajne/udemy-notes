<?php
// Inicjalizacja sesji
session_start();

// Usunięcie wszystkich danych sesji
session_destroy();

// Wyświetlenie komunikatu o wylogowaniu
echo "Zostałeś wylogowany.";
