<?php

/* ZMIENNE */

/**
 * Zgodnie z tym co powiedzieliśmy wcześniej, czyli jeśli w pliku wykonujemy tylko kod PHP
 * to nie będziemy używać tagu zamykającego ?>
 * To jest jedna z tak zwanych "dobrych regół programowania PHP" i będziemy się jej już trzymać do końca kursu.
 */

/** 
 * Często będziemy potrzebowac zachować pewną informację na "później". Jesteśmy to w stanie zrobić używając zmiennych PHP
 * Jak sama nazwa wskazuje są to takie elementny języka, które mogą sie zmieniać a dokładniej przypisana do nich
 * wartość może się zmieniać
 * @link https://www.php.net/manual/en/language.variables.basics.php
 *
 * @todo pytanie - czy poruszać tu (a raczej później, że to ma związek nie z wartością a referencjami?)
 */

/**
 * Każda nazwa zmiennej musi być poprzedzona znaczkem amerykańskiej waluty czyli dolarem "$".
 * Nazwa zmiennej może składać się ze znaków (dużych i małych) od A do Z, liczby 0 - 9 oraz znaku podłogi "_".
 * Po znaku dolara znajduje się nazwa naszej zmienne na przykład: wiek
 * Po nazwie znajdue się znak równości a po jego prawej stronie wartość którą chcemy przypsać do zmiennej.
 * W tym przypadku utwożylismy zmienną liczbową (integer)
 *
 * UWAGA: nazwa zmiennej nie może zaczynać sie od cyfny, np:
 * $3bar = 23;
 * UWAGA: wielność znaków ma znaczenia
 * $tom i $TOM - to dwie rózńe zmienne
 */
$wiek = 11;

/**
 * Typy zmiennych w PHP
 */
// integer - liczby całkowite (dodatnie i ujemne)
$age = 23;
$negative = -14;

// float - liczby rzeczytiwste  (dodatnie i ujemne)
$price = 12.4;

// string - łańcuch tekstowy
$text = 'Ala ma kota, kot ma Alę';
$charset = 'utf8';
$digitsAsText = '51';

// boolean (bool) - przyjmuje wartość true - czyli prawda oraz false - czyli fałsz
$fileExist = true;
$isSomething = false;

// array - tablica - wrócimy do tematu w przyszłości
$exampleArray = [];
$otherExample = array();

// object - obiekt
$exampleObject = new stdClass();

// null - zachodzi w przypadku gdy zmiennej nie przypiszemy wartości
$nullVariable;

// resorurce - przechowuje odwoałanie do zasobu zewnętrznego, np bazy danych
// do tematu wrócimy w następnych częsciach kursu

/**
 * Wiemy już o tym, że mamy różne typy zmiennych, a dokładniej rózne typy warotości które kryją się pod nazwami zmiennych.
 * Można się zastanowic w jaki sposób sprawdzić co dokładnie i jakiego typu kryje się pod daną zmienną
 * Tutaj przychodzi nam z pomocą funkcja "var_dump", szerzej o funkcjach będziemy jeszcze mówić tutat pokażę tylko
 * przykład jak szybko i bezboleśnie dowiedzieć się więcej o zmiennej
 */
var_dump($text);
var_dump($price);
var_dump($exampleObject);

/**
 * DOBRE PRAKTYKI
 * - staramy się wybierać opisowe nazwy zmiennych, to znaczy gdy wybieramy nazwę decydujemy się na taką która
 *   powie nam co znajduje się w tej zmiennyj, przykładowo:
 *      $liczba = 23; - mówi nam że mamy do czynienia z jakąś liczbą, ale nie znamy co ta liczba oznacza
 *      $wiek = 23; - mówi nam wprost że pod tą zmienną przetrzymujemy informację o wieku
 * - nazwy zmeinnych tworzymy w języku angielskich
 * - do nazw wieloczłonowych stosujemy notacji wielbłądziej "camelCase" np. $firstName = 'Tom';
 *   Notacja wilbłądzie generalnie stała sie pewnego rodzaju standardem, są oczywiście pewne wyjątki, ale gdzie ich nie ma?
 */
