<?php

/*
W kontekście programowania internetowego, sesje w PHP są mechanizmem, który umożliwia przechowywanie danych na serwerze między kolejnymi żądaniami użytkownika.
Sesje są często wykorzystywane do śledzenia stanu logowania, przechowywania koszyka zakupowego, zapamiętywania preferencji użytkownika i innych danych,
które muszą być dostępne przez cały czas trwania sesji użytkownika.

Sesje w PHP działają w następujący sposób:



Inicjalizacja sesji:

 Aby rozpocząć sesję, musisz najpierw wywołać funkcję
session_start().
Ta funkcja tworzy unikalny identyfikator sesji i ustawia go w ciastku na komputerze użytkownika lub przekazuje go przez URL, jeśli ciastka są wyłączone.
Identyfikator sesji jest używany do identyfikacji sesji przy każdym kolejnym żądaniu.

*/

session_start();

/*

Przechowywanie danych sesji:
Po rozpoczęciu sesji możesz przechowywać dane sesji w zmiennej superglobalnej $_SESSION.
Jest to tablica asocjacyjna, która może przechowywać różne typy danych, takie jak liczby, tekst, tablice itp. Na przykład:

*/

$_SESSION['username'] = 'John';
$_SESSION['cart'] = ['item1', 'item2', 'item3'];




// Odczytywanie danych sesji: Aby odczytać dane sesji, możesz po prostu odwołać się do nich przez zmienną $_SESSION. Na przykład:

echo $_SESSION['username']; // Wyświetli "John"

// Modyfikowanie danych sesji: Możesz dowolnie modyfikować dane sesji, dodając, usuwając lub zmieniając wartości w tablicy $_SESSION. Na przykład:

$_SESSION['username'] = 'Alice'; // Zmiana wartości
unset($_SESSION['cart']); // Usunięcie elementu z sesji

/*
Zakończenie sesji: Aby zakończyć sesję, możesz wywołać funkcję session_destroy().
Powoduje to usunięcie wszystkich danych związanych z sesją.
W praktyce rzadko jest to konieczne, ponieważ sesje zwykle kończą się automatycznie po zamykaniu przeglądarki lub po określonym czasie nieaktywności.


POKAZAĆ GDZIE ZAPISUJE SIĘ IDENTYFIKATOR SESJI

*/
