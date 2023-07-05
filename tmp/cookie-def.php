<?php

/*

Ciastka w PHP są mechanizmem, który umożliwia przechowywanie danych po stronie klienta (przeglądarki) i przekazywanie ich z powrotem do serwera przy każdym żądaniu HTTP.
Ciastka mogą być używane do różnych celów, takich jak:

- Zapamiętywanie preferencji użytkownika, takich jak język, motyw, rozmiar czcionki itp.
- Śledzenie sesji logowania, aby zidentyfikować użytkownika po zalogowaniu.
- Przechowywanie koszyka zakupowego w sklepie internetowym.
- Personalizacja zawartości strony na podstawie preferencji użytkownika.
- Analiza ruchu na stronie internetowej i dostosowywanie treści do preferencji użytkowników.


Działanie:

Kiedy użytkownik odwiedza stronę internetową, serwer wysyła ciastko do przeglądarki wraz z odpowiedzią HTTP.
Przeglądarka przechowuje ciastko na dysku użytkownika.
Następnie, przy każdym kolejnym żądaniu HTTP wysyłanym do serwera, przeglądarka automatycznie dołącza ciastka do żądania,
umożliwiając serwerowi odczytanie i przetworzenie danych w ciastkach.






Obsługa ciastek (cookies) w PHP jest prosta i polega na użyciu wbudowanych funkcji dostępnych w języku PHP.
Oto kilka podstawowych operacji związanych z obsługą ciastek w PHP:

Ustawianie ciastek: Aby ustawić ciastko, możesz użyć funkcji setcookie().
Przyjmuje ona trzy główne parametry: nazwę ciastka, wartość ciastka i opcjonalne parametry, takie jak czas wygaśnięcia, ścieżka, domena itp.
Na przykład:
*/

setcookie("cookie_name", "some value", time() + 3600, "/");

/*
W powyższym przykładzie ciastko o nazwie "nazwa_ciastka" zostanie ustawione na wartość "wartosc_ciastka" i wygaśnie po 1 godzinie. Ścieżka "/" oznacza,
że ciastko będzie dostępne na całej witrynie.

Odczytywanie ciastek: Aby odczytać wartość ciastka, możesz użyć zmiennej superglobalnej $_COOKIE. Przechowuje ona tablicę z wszystkimi ciastkami dostępnymi w bieżącej sesji.
Na przykład:
*/

if(isset($_COOKIE['cookie_name'])){
    $value = $_COOKIE['cookie_name'];
    echo "Wartość ciastka: " . $value;
} else {
    echo "Ciastko o podanej nazwie nie istnieje.";
}

// Usuwanie ciastek: Aby usunąć ciastko, możesz użyć funkcji setcookie() z ustawionym czasem wygaśnięcia w przeszłości. Na przykład:

setcookie("nazwa_ciastka", "", time() - 3600, "/");

/*
W powyższym przykładzie ciastko o nazwie "nazwa_ciastka" zostanie usunięte poprzez ustawienie czasu wygaśnięcia w przeszłości.

Ważne jest, aby pamiętać, że ciastka są przechowywane po stronie klienta i są wysyłane na serwer wraz z każdym żądaniem HTTP.
Dlatego należy zachować ostrożność przy przechowywaniu wrażliwych danych w ciastkach i odpowiednio zabezpieczyć je.

*/


