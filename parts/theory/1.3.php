<?php

/* STAŁE */
 
/*
 Przed chwilą dowiedzieliśmy się co to są zmienne.
 Teraz poznamy co to są STAŁE.
 Stałe również przechowują pewne istotne dla nas informacje i jak sama nazwa wskazuje w przeciwieństwie
 do zmiennych STALE są STALE - to znaczy że jak raz przypiszemy do nich wartość już nie jesteśmy w stanie zmienić
 tej wartości. Dodatkowo stałej musimy już przypisać wartość przy jej deklarowaniu.
 
 Nazwy stałej nie poprzedza się znakiem dolara, pozostałe wytyczne przy nazywaniu stałych są takie same jak
 przy zmiennych.
 Jednak z biegiem czasu społeczność PHP'owa wykształciła pewną własną zasadę nazewnictwa stałych.
 W przeciwieństwie do zmiennych używamy tylko i wyłącznie dużych liter oraz stosujemy notację "snake_case",
 czyli poszczególne słowa łączymy ze sobą znakiem podłogi.
 Powyższa reguła nie jest wymagana przez język PHP, jednak przestrzeganie jej uznawane jest za jedną z
 dobrych praktykach programowania i nie tylko w kontekście samego PHP
 
 PHP dostarcza nam dwie możliwości w jaki możemy stworzyć stałe.
*/

// define();
define('PHP_COURSE_SIZE', 10);
echo PHP_COURSE_SIZE;

// za pomocą słowa kluczowego 'const'
const BEST_COURSE_PART = 3;
echo BEST_COURSE_PART;
