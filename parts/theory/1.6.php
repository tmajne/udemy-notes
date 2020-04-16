<?php

// Tablice 

/*
   Tablice to takie pojemniki na dane do których możemy wkładać i wyciągać dane.

   Technicznie rzecz ujmując tablice są uporządkowaną listą elementów. 
   Elementy z kolei przechowują dane, które mogą być dowolnego typu np. string, int i nawet inną tablicą, ale o tym wspomnimy później.
  
   Tablice są bardzo użyteczne gdy posiadamy zbiór w jakiś sposób powiązanych ze sobą danych i chcemy je przechować.

   Powiedzmy że mamy pracodawcę zatrudniającego pracowników
   Zamiast definiować n-zmiennych (np. employee1, employee2 itp) możemy wszystkie dane zapisać do tablicy;
 */

$employee1 = 'Jan Kowalski';
$employee2 = 'Zbigniew Nowak';
$employee3 = 'Jadwiga Kaczmarska';

// zapis tablicowy 5.3
//$user = ['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];
//$user = [$employee1, $employee2, $employee3];
//var_dump($user);

/* 
   UWAGA: 
   istnieje jeszcze inny starszy zapis umożliwiający utworzenie nowej tablicy.
   Nie jest on jakoś gorszy od tego co użyliśmy powyżej, dzieła tak samo.
   Po prostu stary zapis nie jest tak zwięzły jak nowy.

   Nowy zapis osobom zaznajomiony z JavaScirpt powinien wydać się znajomy :)
 */

//$user = array(); // $user = [];

//$user = array('Jan Kowalski', 'Zbigniew Nowak', ' Jadwiga Kaczmarska');
// $user = ['Jan Kowalski', 'Zbigniew Nowak', ' Jadwiga Kaczmarska'];


/* 
   Skoro udało nam się utworzyć tablicę to zapewne chcielibyśmy się dowiedzieć jak ona wygląda w środku.
   Oczywiście teraz wiemy co się w niej znajduję ale wiele funkcji, o których będziemy mówić już niedługo
   zwraca dane w tablicy i zapewne chcielibyśmy sprawdzić co w niej się znajduje.
   Z pomocą przychodzą dwie funkcje, które już wcześniej używaliśmy
 */

//$user = ['33', 11, 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];
//var_dump($user);

//nowa
//print_r($user);
//var_dump($user);

/* 
   UWAGA: 
   funkcji tych używamy tylko w trakcie developowania (pisana kodu) aplikacji nie używa się ich do dostarczania informacji użytkownikowi
  
   Pierwsza zwraca informację o zawartości wraz z typem zmiennej, druga nie wyświetla informacji o typie.
  
   Array
    (
        [0] => Jan Kowalski
        [1] => Zbigniew Nowak
        [2] => Jadwiga Kaczmarska
    )
  
   Po wyświetleniu tablicy zauważamy tam dane które do niej wprowadziliśmy.
   Dane te są przypisane do indeksów numerycznych (0, 1, 2, itd.)
   W kolejności wprowadzania danych do tablicy, czyli pod indeksem 0 znajduje się wartość 'Jan' itd.
  
   UWAGA: indeks początkowy dla tablic w php to 0 (zero) - na początku może to być mylące dlaczego nie 1, jednak z czasem zacznie wydawać się to naturalne. Taka sytuacja występuje w większości języków programowania.
  
   OK, mamy już naszą tablicę ale w jaki sposób wydobyć z niej jakiekolwiek dane?
   W sukurs przychodzą nam właśnie indeksy, za ich pomocą możemy odwołać się do danej która znajduje się
   pod danym indeksem np:
 */

//$users = ['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];

// $user1 = $users[0];
// $user2 = $users[1];


/* 
   Proste, prawda?
  
   A co w sytuacji gdy chcemy zmienić wartość w tablicy znajdującej się pod danym kluczem?
 */

// $index = 11;

// $users = ['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];
// print_r($users);
// $users[$index] = 'Anna Miłosz';
// print_r($users);

/* 
   W ten oto sposób w bardzo łatwy sposób indeksowy o numerze 1 przypisaliśmy nową wartość.
   Trzeba zdawać sobie sprawę, że starą wartość tracimy bezpowrotnie.
   Jeśli chcielibyśmy ją zachować to najpierw należy ją odczytać i zapisać do nowej zmiennej np:
 */

//$users = ['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];
// $oldUser = $users[1];
// $users[1] = 'Zofia Tkacz';

// var_dump($oldUser);
// print_r($users);

/* 
   W ten oto sposób zachowaliśmy starą wartość i ustawiliśmy nową.
   Teraz dodamy nową wartość do tablicy.
   Aby to zrobić nie musimy znać wartości najwyższego indeksu pod którym mamy dane.
   PHP zrobi to za nas.
 */

// $users = ['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];
// $users[] = 'Adrian Onyszko';

/* 
   W tej chwil dodaliśmy nowy element do tablicy.
   Skoro możemy dodawać element to pewnie też możemy go usunąć?
   Zgadza się, jednak do tego trzeba już użyć konkretnej funkcji PHP,
   czyli unset (więcej o funkcjach już niebawem)
 */

// print_r($users);
// unset($users[1]);
// $users[1] = null;
// var_dump($users);

/* 
   W przypadku usuwania już musimy podać konkretnie jaką daną chcemy usunąć to znaczy podać konkretny indeks.
 */

/* 
   Teraz pobawimy się trochę tablicami :)
  
   Nie zawsze musimy chcieć aby klucze były automatycznie przydzielone przez język,
   równie dobrze możemy sami nadać klucze przy tworzeniu tablicy:
 */

//$users = [0 => 'Jan Kowalski', 1 => 'Zbigniew Nowak', 2 => 'Jadwiga Kaczmarska'];
//print_r($users);

/* 
   Nic nie stoi na przeszkodzie aby indeksy nie zaczynały sie od zera.
   Tutaj trzeba nadmienić że mimo początkowego indeksu równego 3 to i tak wielkość tabeli
   będzie wynosiła "3".
   Wielkość/rozmiar - czyli liczba elementów znajdujących się w tabeli
 */
//$users = [3 => 'Jan Kowalski', 4 => 'Zbigniew Nowak', 5 => 'Jadwiga Kaczmarska'];
//print_r($users);

/* 
  Indeksy które podajemy nie muszą być w kolejności rosnącej, możemy wybrać dowolną kolejność
 */
//$users = [30 => 'Jan Kowalski', 4 => 'Zbigniew Nowak', 5 => ' Jadwiga Kaczmarska'];
//print_r($users);

/* 
   Podając tylko jeden indeks spowodujemy, że każda kolejna dana dodawana do tablicy będzie się znajdować
   pod kolejnym numerem
 */
//$users = [8 => 'Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];
//print_r($users);

/* 
   Jeszcze inna możliwość uzupełnienia tablicy.
 */
// $users = [];
// $users[] = 'Jan Kowalski';
// $users[] = 'Zbigniew Nowak';
// $users[] = 'Jadwiga Kaczmarska';

// print_r($users);

/* 
   W sumie o tym już mówiliśmy, to nic innego jak utworzenie pustej tablicy, a następnie wypełnienie jej danymi
 */

/* 
   Tablice asocjacyjne.
  
   Tablice są bardzo użyteczne i wiedza o nich jest więdzą którą po prostu trzeba posiąść.
   Powyższe tablice to były tablice o indeksach numerycznych. Jak zauważyliśmy ich indeksami są liczby całkowite (int)
   Sprawdzają się idealnie do przetrzymywania jakiś list na przykład lista pracowników
 */

// $employees = [
//   'Jan Kowalskie',
//   'Zbigniew Nowak',
//   'Jadwiga Kaczmarska'
// ];

// print_r($employees);

/* 
   Zmieńmy trochę nasz przykład i umieśćmy w tablicy dane dotyczące konkretnej osoby
 */
// $user = [
//     'Jan',      // 0
//     'Kowalski', // 1
//     22 // wiek  // 2
// ];
// print_r($user);

/* 
   Aby móc sensownie korzystać z takiej tablicy to musimy zapamiętać, że imię znajduję się pod indeksem 0,
   nazwisko - 1 a wiek - 2. Jak widać nie problem o pomyłkę, gdzie nasz kolega z zespołu pomyli indeksy i nasz misterny plan legnie w gruzach.
   Co byście powiedzieli aby zrobić coś takiego:
 */

// $user = [
//   'firstName' => 'Jan',
//   'lastName' => 'Kowalski',
//   'age' => 22
// ];
// print_r($user);

/* 
   Wygląda o wiele lepiej prawda?
   Taka konstrukcja w PHP jest jak najbardziej możliwa.
   Tablice, której klucze są stringami nazywamy tablicami asocjacyjnymi.
   Dzięki nim budujemy strukturę danych i już nie musimy pamiętać co znajduję się pod danym numerkiem.
   Używamy po prostu nazw kluczy które mają związek z przechowywaną wartością.
  
   A jak dostać sie do wartości znajdującej się pod takim kluczem.
   Nic trudnego :)
 */

// $user = [
//   'firstName' => 'Jan',
//   'lastName' => 'Kowalski',
//   'age' => 22
// ];
// print_r($user);
// $lastName = $user['lastName'];
// var_dump($lastName);

/* 
   Kluczy tekstowych używamy dokładnie tak samo jak kluczy numerycznych.
   Tablice asocjacyjne są bardzo użyteczne i niejednokrotnie będziesz miał okazję ich używać.
  
   Nic nie stoi na przeszkodzie abyśmy jednocześnie używali kluczy tekstowych i numerycznych.
 */

// $temporary = [
//     'firstName' => 'Robert',
//     1 => 'klucz numeryczny',
//     'nick' => 'John',
//     25 => 'Rambo'
// ];
// print_r($temporary);


/* 
   Taka konstrukcja jak najbardziej zadziała, jednak z własnego doświadczenia powiem, że nie pamiętam kiedy
   ostatnio miałem "przyjemność" jej używania. Według mnie wprowadza niepotrzebne zamieszanie i bałagan w
   naszych danych. Jednak warto wiedzieć że MOŻEMY tak zrobić, być może kiedyś przyda się taka wiedza.
  
   Pozostała nam jeszcze jedna ciekawa możliwość do omówienia.
   Mianowice tablice tablic.
   Wyobraźmy sobie że mamy listę pracowników tak jak w naszym pierwszym przykładzie, ale zamiast danych
   w postaci ciągu tekstowego, chcemy przechować dane w konkretnej strukturze.
 */

// $employee1 = [
//     'firstName' => 'Jan',
//     'lastName' => 'Kowalski',
//     'age' => 22
// ];
// $employee2 = [
//     'firstName' => 'Karol',
//     'lastName' => 'Nowak',
//     'age' => 31
// ];

// $employees = [$employee1, $employee2];
// print_r($employees);


/* 
   Ciekawe, prawda?
   Jednocześnie szalenie użyteczne :)
   Powyższą tablicę możemy nazwać tablicą dwuwymiarową, do tej pory używaliśmy tablic jednowymiarowych.
   Nic nie stoi też na przeszkodzie aby użyć zapisu:
 */

// $employees = [
//     [
//         'firstName' => 'Jan',
//         'lastName' => 'Kowalski',
//         'age' => 22
//     ],
//     [
//         'firstName' => 'Karol',
//         'lastName' => 'Nowak',
//         'age' => 31
//     ]
// ];

//print_r($employees);

/* 
   Powyżej widzimy dokładnie że w tablicy przechowujemy listę tablic z danymi.
   W tym przypadku w tablicy numerycznej przechowujemy tablicę asocjacyjną.
   Jednak dozwolone są dowolne kombinacje, nawet mieszane. (numeryczna - numeryczna, asocjacyjna - numeryczna, mix - mix)
   Mają tutaj zastosowanie wszystkie reguły których nauczyliśmy się wcześniej.
  
   Dostanie się do takich danych też nie jest skomplikowane.
   Należy tylko pamiętać że w tablicy przechowujemy nową tablicę więc:
 */

//$employeeFirstName = $employees[0]['firstName'];
//var_dump($employeeFirstName);

/* 
   Dzięki tem dostaniemy się do imienia drugiego pracownika (pamiętajmy, że indeksy tablicy zaczynają się od 0) Aby było czytelniej to rozbijmy to na kroki
 */

// $employee = $employees[0];
// $firstName = $employee['firstName'];

// $employeeFirstName = $employees[0]['firstName'];
// var_dump($employeeFirstName);

/* 
   I oto krok po kroku dostaliśmy się do tego co potrzebowaliśmy.
  
   Warto również wiedzieć że tablice mogą mieć jeszcze więcej poziomów. 
   Możemy utworzyć tablicę tablic tablic
   lub tablicę tablic tablic tablic ... tablic
   Jednak generalnie wystarczają maksymalnie tablice dwuwymiarowe.
  
   Nie przejmujcie się mnogością sposobów definiowania tablic.
   Z czasem każdy wyrabia sobie swój własny styl z którym czuje się najwygodniej.
  
   Musze jednak przyznać, że w kwestii tablic dopiero odkryliśmy wierzchołek góry lodowej.
 */

/* 
   W tej lekcji to już wszystko. Dziękuję bardzo.
 */
