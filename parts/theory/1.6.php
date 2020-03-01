<?php

// Tablice

/**
 * Tablice to takie pojemniki na dane do którch możemy wkładać i wyciągać dane.
 * Technicznie rzecz ujmując tablice są uporządkowaną listą elementów. Elementy z kolei przechowują dane, które mogą
 * być dowolnego typu np. string, int i nawet inną tablicą, ale o tym wspomnimy później.
 *
 * Teblice są bardzo użyteczne gdy posiadamy zbiór w jakiś sposób powiązanych ze sobą danych i chcemy je przechować.
 * Powiedzmy że mamy pracodwacę zatrudniającego pracowników
 * Zamiast definiować n-zmiennych (np. employee1, employee2 itp) możemy wszystkie dane zapisać do tablicy;
 */

#employee1 = 'Jan Kowalski';
#employee2 = 'Zbigniew Nowak';
#employee2 = 'Jadwika Kaczmarska';

// zapis tablicowy
$user = ['Jan Kowalski', 'Zbigniew Nowak', 'Jadwika Kaczmarska'];

/**
 * UWAGA: istenieje jeszcze inny starszy zapis umożliwiający utworzenie nowje tablicy.
 * Nie jest on jakoś gorszy od tego co użyliśmy powyżej, dzieła tak samo.
 * Po prostu stary zapis nie jest tak zwięzły jak nowy.
 * Nowy zapis osobom zaznajomiony z JavaScirpt powinien wydać się znajomy :)
 */
$user = array('Jan Kowalski', 'Zbigniew Nowak', 'Jadwika Kaczmarska');

/**
 * Skoro udało nam się utworzyć tablicę to zapewn chcielibyśmy się dowiedziec jak ona wygląda w środku.
 * Oczywiście teraz wiemy co się w niej znajduję ale wiele funkcu, o których będziemy mówić już niedługo
 * zwraca dane w tablicy i zapewne chcielibyśmy sprawdzić co w niej się znajduje.
 * Z pomocą przychodzą dwie funkcje, które już wcześniej używaliśmy
 */

var_dump($user);
print_r($user);

/**
 * UWAGA: funkcji tych używamy tylko w trakcie developowania (pisana kodu) aplikacjie, czyli do tak zwanego debagowania,
 * nie używa się ich do dostarczania inforamacji użytkownikowi
 *
 * Pierwsza zwraca informację o zawartości wraz z typem zmiennej, druga nie wyświetla informacji o typie.
 *
 * Array
    (
        [0] => Jan Kowalski
        [1] => Zbigniew Nowak
        [2] => Jadwika Kaczmarska
    )
 *
 * Po wyświetleniu tablicy zauważamy tam dane które do niej wprowadziliśmy.
 * Dane te są przypisane do indeksów numerycznych (0, 1, 2, itd.)
 * W kolejności wprowadzania danych do tablicy, czyli pod indeksem 0 znajduje się wartość 'Jan' itd.
 *
 * UWAGA: indeks początkowy dla tablic w php to 0 (zero) - na poczatku może to być mylące dlaczego nie 1, jednak z
 * czasem zacznie wydawać się to naturalne. Taka sytuacja występuje w większości języków programowania.
 *
 * OK, mamy już naszą tablicę ale w jaki sposób wydobyć z niej jakiekolwiek dane?
 * W sukurs przychodzą nam właśnie indeksy, za ich pomocą możemy odwołac się do danej która znajduje się
 * pod danym indeksem np:
 */

$firstName = $user[0];
$lastName = $user[1];

/**
 * Proste, prawda?
 *
 * A co w sytuacj gdy chcemy zmienić wartość w tablicy znajdującej się pod danym kluczem?
 */

$user[1] = 'Anna Miłosz';

/**
 * W ten oto sposób w bardzo łatwy sposób indeksowy o numerze 1 przypisaliśmy nową wartość.
 * Trzeba zdawać sobie sprawę, że starą wartość tracimy bezpowrotnie.
 * Jeśli chcielibyśmy ją zachować to najpierw należy ją odczytać i zapisać do nowej zmiennej np:
 */

$oldLastName = $user[1];
$user[1] = 'Zofia Tkacz';

var_dump($oldLastName);
print_r($user);

/**
 * W ten oto sposób zachowaliśmy starą wartość i ustawiliśmy nową.
 * Teraz dodamy nową wartość do tablicy.
 * Aby to zrobić nie musimy znać wartości najwyższego indeksu pod którym mamy dane.
 * PHP zrobi to za nas.
 */

$user[] = 'Adrian Onyszko';
print_r($user);

/**
 * W tej chwil dodaliśmy nowy element do tablicy.
 * Skorot możemy dodanć element to pewnie też mozemy go usunąć?
 * Zgadza się, jednak do tego trzeba już użyc konkretnej funkcji PHP, czyli unset (więcej o funkcjach już niebawem)
 */

unset($user[3]);
print_r($user);

/**
 * W przpadku usuwnia już musimy podać konkretenie jaką daną chcemy usunąć to znaczy podać konkretny indeks.
 */

/**
 * Teraz pobawimy się trochę tablicami :)
 *
 * Nie zawsze musimy chcieć aby klucze były automatycznie przydzielone przez język,
 * równie dobrze możemy sami nadać klucze przy tworzeniu tablicy:
 */
$user = [0 => 'Jan Kowalski', 1 => 'Zbigniew Nowak', 2 => 'Jadwika Kaczmarska'];
print_r($user);

/**
 * Nic nie stoi na przeszkodzie aby indeksy nie zaczynały sie od zera.
 * Tutaj trzeba nadminienić że mimo początkowego indeksu równego 3 to i tak wielnkość tabeli
 * będzie wynosiła "3".
 * Wielkość/rozmiar - czyli liczba elementów znajdujących się w tabeli
 */
$user = [3 => 'Jan Kowalski', 4 => 'Zbigniew Nowak', 5 => 'Jadwika Kaczmarska'];
print_r($user);

/**
 * Indeksy które podajemy nie muszą być w kolejności rosnącej, możemy wybrać dowolną kolejność
 */
$user = [30 => 'Jan Kowalski', 4 => 'Zbigniew Nowak', 5 => 'Jadwika Kaczmarska'];
print_r($user);

/**
 * Podając tylko jeden indeks spowodujemy, że każda kolejna dana dodawan do tablicy będzie się znajdować
 * pod kolejnym numerem
 */
$user = [8 => 'Jan Kowalski', 'Zbigniew Nowak', 'Jadwika Kaczmarska'];
print_r($user);

/**
 * Jeszcze inna możliwość uzupełnienia tablicy.
 */
$user = [];
$user[] = 'Jan Kowalski';
$user[] = 'Zbigniew Nowak';
$user[] = 'Jadwika Kaczmarska';

/**
 * W sumie o tym już mówiliśmy, to nic innego jak utworzenie pustej tablici, a następnie wypełninie jej danymi
 */

/**
 * Tablice asocjacyjne.
 *
 * Tabliece są bardzo użyteczne i wiedza o nich jest więdzą którą po prostu trzeba posiąść.
 * Powyższe tablice to były tablice o indeksach numerycznych. Jak zauważyliśmy ich indeksami są liczby całkowite (int)
 * Sprawdzają się idealnie do przetrzymywania jakiś list na przykład lista pracowników
 */

$employes = [
    'Jan Kowalskie',
    'Zbigniew Nowak',
    'Jadwiga Kaczmarska'
];

/**
 * Zmieńmy trochę nasz przykład i umieścmi w tablicy dane dotyczące konkretnej osoby
 */
$user = [
    'Jan',
    'Kowalski',
    22 // wiek
];
print_r($user);

/**
 * Aby móc sensownie kożystać z takiej tablicy to musimy zapamiętać, że imię znajduję się pod indeksem 0,
 * nazwisko - 1 a wiek - 2. Jak widać nie problem o pomyłkę, gdzie nasz kolega z zespołu pomyli indeksy i nasz
 * misterny plan legnie w gruzach.
 * Co byście powiedzieli aby zrobić coś takiego:
 */
$user = [
    'firstName' => 'Jan',
    'lastName' => 'Kowalski',
    'age' => 22
];
print_r($user);
/**
 * Wygląda o wiele lepiej prawda?
 * Taka konstrukacja w PHP jest jak najbardziej możliwa.
 * Tablice, której klucze są stringami nazwywamy tablicami asocjacyjnymi.
 * Dzięki nim mamy mocno ustrukryryzowane nasze dane i już nie musimy pamiętać co znajduję się pod danym numerkiem.
 * Używamy po prostu nazw kluczy które mają związek z przechowywaną wartością.
 *
 * A jak dostać sie do wartości znajdującej się pod takim kluczem.
 * Nic proszczego :)
 */

$lastName = $user['lastName'];
var_dump($lastName);

/**
 * Kluczy tekstowych używamy dokładnie tak samo jak kluczy numerycznych.
 * Tablice asocjacyjne są bardzo użyteczne i niejednokrotnie będziesz miał okazję ich uzywać.
 *
 * Nic nie stoi na przeszkodzie abyśmy jednocześnie używali kluczy tekstowych i numerycznych.
 */
$temporary = [
    'firstName' => 'Robert',
    1 => 'klucz numeryczny',
    'nick' => 'John',
    25 => 'Rambo'
];
print_r($temporary);

/**
 * Taka konstrukcja jak najbardziej zadziała, jednak z własnego doświadczenia powiem, że nie pamiętam kiedy
 * ostatnio miałem "przyjemność" jej używania. Według mnie wprowadza niepotrzebne zamieszanie i bałagan w
 * naszych danych. Jednak warto wiedzieć że MOŻEMY tak zrorbić, być może kiedyś przyda się taka wiedza.
 *
 * Pozostala nam jeszcze jedna ciekawa możliwość do omówienia.
 * Mianowcie tablice tablic.
 * Wyobraźmy sobie że mamy listę pracowników tak jak w naszym pierwszym przykładzie, ale zamiast danych
 * w postaci ciągu tekstowego, chcemy przechować dane w konkretnej strukturze.
 */
$employee1 = [
    'firstName' => 'Jan',
    'lastName' => 'Kowalski',
    'age' => 22
];
$employee2 = [
    'firstName' => 'Karol',
    'lastName' => 'Nowak',
    'age' => 31
];

$employes = [$employee1, $employee2];
print_r($employes);

/**
 * Ciekawe, prawda?
 * Jednocześnie szalenie użyteczne :)
 * Powyższą tablicę możemy nazwać tablicą dwuwymiarową, do tej pory używaliśmy tablic jednowymiarowych.
 * Nic nie stoi też na przeszkodzie aby użyć zapisu:
 */
$employes = [
    [
        'firstName' => 'Jan',
        'lastName' => 'Kowalski',
        'age' => 22
    ],
    [
        'firstName' => 'Karol',
        'lastName' => 'Nowak',
        'age' => 31
    ]
];

/**
 * Powyżej widzimy dokładnie że w tablicy przechowujemy listę tablic z danymi.
 * W tym przypadku w tablicy numerycznej przechowujemy tablicę asocjacyjną.
 * Jednak dozwolone są dowolne kombinacje, nawet meszane. (numeryczna - numeryczna, asocjacyjan - numeryczna, mix - mix)
 * Mają tutaj zastosowanie wszystkie regóły których nauczyliśmy się wcześniej.
 *
 * Dostanie się do tak zagniezdrzonych danych też nie jest skomplikowane.
 * Należy tylko pamietać że w tablicy przechowujemy nową tablicę więc:
 */

$employeeFirstName = $employes[1]['firstName'];
var_dump($employeeFirstName);

/**
 * Dzięki tem dostaniemy się do imienia drugiego pracownika (pamiętajmy, że indeksy tablicy zaczynają się od 0)
 * Aby było czytelniej to rozbijmy to na kroki
 */
$employee = $employes[1];
print_r($employee);
$firstName = $employee['firstName'];
var_dump($firstName);

/**
 * I oto krok po kroku dostaliśmy się do tego co potrzebowaliśmy.
 *
 * Warto również wiedzieć że tablice mogą mieć jeszcze więcej zadniżdzreń.
 * Możemy utworzyć tablicę tablic tablic
 * lub tablicę tablic tablic tabclic ... tablic
 * Jednak generalie wystarczają maksymalnie tablice dwuwimiarowe.
 *
 * Nie przejmujcie się mnogością sposóbów definiowania tablic.
 * Z czasem każdy wyrabia sobie swój własny styl z którym czuje się najwygodniej.
 *
 * Musze jednak przyznać, że w kwesti tablic dopiero odkryliśmy wierzchołek góry lodowej.
 */

/**
 * W tej lekci to już wszystko. Dziękuję bardzo.
 */