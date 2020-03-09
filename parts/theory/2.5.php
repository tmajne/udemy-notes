<?php

// FOREACH

/*
 Na koniec tematu związanego z pętlami pozostawiłem wisienkę na torcie, czyli pętlę FOREACH.
 
 FOREACH działa na trochę na innej zasadzie niż pozostałe pętle.
 Została stworzona po to aby w łatwy sposób przejść (przeiterować) tablicę, dzięki czemu 
 w łatwy sposób dostajemy dostęp do elementów tablicy na której pracujemy.
 Pętla automatycznie się zakończy gdy przejdzie po wszystkich elementach tablicy.
 Nie trzeba dodawać żadnego nowego warunku aby to sprawdzić, wszystko dzieje się automatycznie.
 
 Z czasem dowiemy się, że tej pętli można też używać z obiektami, jednak do tego wrócimy w 
 przyszłości.
 
 Konstrukcja pętli FOREACH jest następująca:
 */

 /*
    foreach ($array as $arrayElement) {
        // kod do wykonania
    }
*/

/*
 $array - jest tablicą na której chcemy pracować i przejść po jej elementach
 $arrayElement - jest zmienna do której zostanie przypisany kolejny element tablicy
 
 Aby to lepiej zobrazować posłużymy się przykładem.
 */

$cinemaMovies = [
    'Joker',
    '1917',
    'Jumanji: The Next Level',
    'Little Women'
];

foreach($cinemaMovies as $movie) {
    echo $movie . "\n";
}

/*
 Do pętli przekazujemy naszą tablicę z filmami.
 Pętla automatycznie sprawdzi czy tablica zawiera jakieś elementy
 Jeśli zawiera to pobierze pierwszy i przypiszę ten element do zmiennej $movie
 Dzięki zmiennej $movie wewnątrz pętli mamy możliwość odwołania się do zawartości danego elementu.
 W naszym przypadku jest tam tylko nazwa filmu czyli STRING jednak równie dobrze w danym elemencie 
 może się znajdować inna tablica/obiekt/liczba itp
 Po skończeniu wykonywania kodu pętli zostanie sprawdzone czy w tablicy znajduje się kolejny element.
 Jeśli się znajduje nastąpi przypisanie nowego elementu do zmiennej $movie i wykonany kod pętli.
 Sytuacja będzie się powtarzać do czasu aż pętla nie przejdzie po wszystkich elementach tablicy,
 po czym automatycznie zakończy swoje działanie.
 
 Skoro mówimy o filmach to mogę zaspojlerować jedną rzecz. 
 W pętli FOREACH wiele rzeczy dzieję się automatycznie, jednak tak naprawdę wszystko 
 dzieje sie za sprawą Iteratorów, dociekliwi znajdą więcej informacji 
 @link https://www.php.net/manual/en/class.iterator.php
 Kwestę iteratorów poruszymy zapewne w przyszłych kursach 
 */

/*
 Jeśli potrzebujemy to możemy też uzyskać dostęp do indeksu - czyli numeru wiersza który przetwarzamy.
 W takim przypadku pętla FOREACH odrobinę zmienia swoją konstrukcję:
 */

 /*
    foreach ($array as $index => $arrayElement) {
        // kod do wykonania
    }
*/

/*
 Sama zasada działania praktycznie się nie zmienia.
 Dochodzi tylko jedna operacja gdy pętla zaczyna przetwarzać nowy element.
 Nadal wartość elementu jest przechowywana w zmiennej $arrayElement, 
 dodatkowo klucz (index) elementu który przetwarzamy jest zapisywany w zmiennej $index
 W trakcie wykonywania kodu pętli możemy się bez problemu odwołać do wartości klucza
 */

// $cinemaMovies = [
//     'Joker',
//     '1917',
//     'Jumanji: The Next Level',
//     'Little Women'
// ];

// foreach($cinemaMovies as $index => $movie) {
//     echo $index . ': ' . $movie . "\n";
// }

/*
 Być może przykład którym się posłużyliśmy  nie jest najlepszy, 
 ponieważ zwykłego użytkownika na ogół nie interesuje indeks pod którym
 przetrzymujemy informacje o filmie.
 
 Posłużmy się trochę innym.
 */

// $movieDetails = [
//     'title' => 'Joker',
//     'director' => 'Todd Phillips',
//     'writers' => 'Todd Phillips, Scott Silver',
//     'cast' => [
//         'Joaquin Phoenix' => 'Arthur Fleck',
//         'Robert De Niro' => 'Murray Franklin',
//         'Zazie Beetz' => 'Sophie Dumond',
//         'Frances Conroy' => 'Penny Fleck'
//     ],
//     'music' => 'Hildur Guðnadóttir'
// ];

// foreach ($movieDetails as $role => $element) {
//     echo "$role: $element\n";
// }

/*
 Hmm ... pojawił się pewien błąd.
 Powodem jest to, że wewnątrz tablicy przetrzymujemy inną tablicę i próbujemy ją wyświetlić jakby była 
 zwykłym łańcuchem tekstowym (STRING).
 Musimy naprawić nasz przykład
 */

// foreach ($movieDetails as $role => $element) {
//     if (is_array($element)) {
//         foreach ($element as $insideKey => $insideValue) {
//             echo "$role: $insideKey -> $insideValue\n";
//         }
//     } else {
//         echo "$role: $element\n";
//     }
// }

/*
 Odrobinę skomplikowaliśmy nasz przykład, ale teraz wszystko działa bardzo fajnie.
 Sprawdziliśmy czy elementem który w danej chwili przetwarzamy nie jest czasem tablica.
 Robimy to za pomocą IF'a i funkcji która sprawdza czy przekazana zmienna jest tablicą
 Tak, tak - kolejna funkcja. Jeszcze troche cierpliwości i za chwilę do nich przejdziemy.
 Jeśli przetwarzany element jest tablicą to również możemy przeglądnąć jej elementy
 za pomocą pętli FOREACH, jeśli nie jest normalnie wyświetlamy wartość klucza i elementu
 */