<?php

// WHILE - DO - WHILE

/**
 * Zaczniemy od najproszczej i najbardziej uniwersalnej czyli pętli for.
 * Jej konstrukcja jest następująca
 */

/**
    for ( inicjalizacja ; warunek ; aktualizacja ) {
        // kod do wykonania
    }
**/

/**
 * Sama konstrukcja nie wydaje się skomplikowana, jednak co oznaczają:
 * - inicjalizacja
 * - warunek
 * - aktualizacja
 *
 * Najprościej będzie to pokazać na rzeczywistym przykładzie
 */

var_dump('zaraz wykonamy pętlę');

for ($i = 0; $i < 5; $i++) {
    // kod do wykonania
    var_dump($i);
}

var_dump('pętla się zakończyła');








/**
 * Inicjalizacja: $i = 0
 * Warunek: $i < 5
 * Aktualizacja: $i++
 *
 * W naszym przypadku zmienna $i to tak zwana zmienna sterująca.
 * W sekcji 'inicjalizacja' powołujemy ją do życia i przypisujemy jej wartość startową zero 0.
 * Sekcja ta jest wywołana tylko raz na samym początku działania pętli.
 *
 * Zaraz po inicjalizacji zmiennej sterującej sprawdzany jest 'warunek'. Jeśli warunek zwróci wartość true - czyli
 * będzie spełniony to pętla wykona sie jeden raz. Pojedyńcze wykonanie pętli nazywamy "iteracją". Jeśli warunek
 * nie zostanie spełniony, czyli zwróci wartość false, pętla zostanie przerwana i przejdziemy do kodu
 * znajdującego się pod pętlą
 *
 * Po każdej iteracji (wykonaniu pętli) następuje "aktualizacja" wartości sterującej, czyli w naszym przykładzie
 * zwiększamy tą wartość dokładnie o jeden.
 *
 * Wewnątrz pętli mamy bezpośredni dostęp do wartości zmiennej sterującej i możemy się nia posługiwać, jak również
 * możemy też ją modyfikować.
 *
 *
 * Pętle for na początku przeważnie przysparzają problemów, dlatego warto chwilę czasu im poświęcić aby dobrze
 * zrozumieć w jaki sposób działają. Spróbuję jeszcze raz je omówić używając trochę innego podejścia i posiłkując
 * się naszym przykładem i tym co chwilę temu powiedzieliśmy.
 *
 *
 * Na samym początku wykonania pętli ustawiana jest wartość sterująca czyli $i = 0.
 *
 * W następnym kroku sprawdzany jest warunek, jeśli jest prawdziwy przechodzimy do wykonania kodo wewnątrz pętli,
 * czyli w naszym przypadku wyświetlamy zmienną sterującą.
 * Można się zastanowić czy za pierwszym razem jest sens sprawdzania warunku ponieważ ręcznie przypisujemy wartość
 * zmiennej $i tak więc od razu przypiszemy wartość, która spełnia warunek. Owszem tak to wygląda w naszym przykładzie,
 * jednak w przyszłości jak będziesz programował wielokrotnie okaże się że przypisanie wartości do zmiennej
 * sterującej nie będzie takie oczywiste, to znaczy wartość którą przypisujemy może znajdować się w innej zmiennej lub
 * być zwracana przez funkcję (o funkcjach będziemy mówić już w następnej lekcji)
 *
 * Po wykonaniu kodu z wnętrza pętli aktualizujemy naszą zmienną systemową, czyli w naszym przykładzie
 * zwiększamy jej wartość o 1.
 *
 * W ten oto sposób zakończyła się pierwsza iteracja naszej pętli.
 * W drugiej iteracji pomijamy już część inicjalizacji.
 * Dlaczego tak się dzieje? Pamiętamy że na końcu poprzedniej iteracji (czyli wykonania pętli) zwiększyliśmy
 * wartość $i. Gdybyśmy teraz znowu wykonali część inicjalizacyją to ustawiliśmy ją ponownie na zero, co nie byłoby
 * wskazanie.
 * Tak wiec pomijamy już część inicjalizacji i od razu przechodzimy do sprawdzania warunku, z uwzględnieniem faktu, że
 * wartość zmiennej sterującej $i została zwiększona na zakończenie poprzedniej iteracji. W naszym przypadku warunek
 * nadal będzie spełniony $i < 5 ponieważ wartość $i wynosi 1
 * Przechodzimy do wykonania kodu z wnętrze pętli
 * Zwiększamy wartość $i o 1
 * W ten oto sposób zakończyliśmy kolejną iteracją.
 *
 * W następnym kroku znowu wracamy do samego początku, czyli
 * - sprawdzamy warunek (tym razem zmienna $i = 2)
 * - wykonujemy kod
 * - zwiększamy zmienną sterująćą (3)
 *
 * Operacje powtarzamy do czasu gdy warunek nie zostanie spęłniony, czyli gdy zmienna $i osiągnie wartość 5
 * W takim przypadku przejdziemy do kodu znajdującego się pod pętlą.
 *
 * Podam jeszcze parę kombinacji w jaki sposób możemy definiować pętlę for
 */
for ($i = 10; $i > 0; $i--) {
}

$startFoo = 45;
$endFoo = 100;
for ($foo = $startFoo; $foo < $endFoo; $foo += 10) {
}

for ($k = 0; $k < naszaFunkcja(); ++$k) {
}

// możemy pominąć część 'aktualizacyjną' jednak wewnątrz pętli musimy zadbać o to aby zmienna sterująca była modyfikowana
for ($k = 0; $k < 20; ) {
    var_dump($k);
    $k++;
}

/**
 * Warto też wiedzieć, że czasami świadomie lub nie dobierzemy w taki sposób warunek, że mimo faktu modyfikowania
 * zmiennej sterującej uzyskamy efekt pętli nieskończonej, czyli takiej która będzie się wykonywać zawsze.
 * Jeśli taki był nasz cel to bravo MY :)
 * Jeśli jednak stało się tak, ponieważ gdzieś popełniliśmy błąd to warto wiedzieć, że PHP ma pewien mechanizm
 * obronny przed takimi sytuacjami i potrafi wykryć tego rodzaju pętle i domyślnie po 30 sekundach przerwie
 * jej działanie i zgłosi błąd. Oczywiści czas ten możemy modyfikować poprzez odpowiednią konfigurację, jak również
 * możemy to całkowicie wyłączyć, jednak trzeba to ustawić świadomie.
 *
 * OK, sporo sobie już opowiedzieliśmy o samej pętli for.
 * Przejdźmy do odrobinę bardziej realnego przykładu do którego moglibyśmy ją zastosować.
 * 
 * Częstą pętli używa się do przejścia (przeiterowania) po elementach znajdujących się w tablicy.
 * Pozostańmy w świecie filmowym.
 * W tablicy przechowujemy listę filmów, które w danej chwili możemy zobaczyć:
 */

$cinemaMovies = [
    'Joker',
    '1917',
    'Jumanji: The Next Level',
    'Little Women'
];

/**
 * Chcielibyśmy wyświetlić potencjalnemu klientowi listę filmów, którą możemy zobaczyć
 * Aby uzyskać liczbę elementów, które znajdują się w tablicy należy użyć funkcji count()
 * Na razie pokaże tylko samo jej użycie
 */

for ($index = 0; $index < count($cinemaMovies); $index++) {
    echo $cinemaMovies[$index] . "\n";
}

/**
 * Wyświetliliśmy właśnie repertuar naszego kina.
 * 
 * Wiemy już, że indeksy w tablicy zaczynają się od zera oraz aby dostać się do elementu 
 * tablicy posługujemy się jego indeksem, tak więc możemy spokojnie dobrać się do każdego 
 * elementu tablicy z filmami.
 * 
 * W sekcji inicjalizacyjnę ustawiamy wartość początkową indexu na zero tak aby można było 
 * 
 * W warunku sprawdzamy czy wartość indexu jest mniejsza od wielkości tablicy na które operujemy.
 * Dlaczego sprawdzamy czy jest mniejsza a nie równa?
 * Właśnie z powodu tego, że pierwszy element ma index = 0 a nie 1.
 * 
 * Można by powiedzieć, że już klasycznie w sekcji aktualizacji zwiększamy wartość indeksu o 1
 * 
 * A co się dzieje w ciele naszej pętli?
 * Posługując się wartością $index odwołujemy się do danego klucza w tabeli i wyświetlamy 
 * jego zawartość. 
 * Gwoli uzupełniania "\n" powoduje przejście do nowej lini w konsoli.
 * 
 * Proste i przyjemne, prawda?
 * 
 * Nasz przykład ma jedną wadę. 
 * Mianowicie w sekcji warunkowej wykonywana jest funkcja w celu pobrania informacji o wielkości tablicy.
 * Dlaczego to nie jest najlepszy pomysł mimo, że działa?
 * Pamiętamy że sekcja warunkowa jest odpytywana przy każdej iteracji.
 * Możemy wyobrazić sobie, że gdyby nasza tablica miała 100 elementów to zostałaby wywołana 100 razy.
 * Akurat w naszym przykładzie funkcja count nie jest bardzo obciążająca, jednak już wiemy, że 
 * w zależności od potrzeb możemy użyć dowolnej funkcji.
 * 
 * Jak poprawić nasz przykład?
 */

$moviesCount = count($cinemaMovies);
for ($index = 0; $index < $moviesCount; $index++) {
    echo $cinemaMovies[$index] . "\n";
}

/**
 * Wystarczy funkcje którą wywołujemy w sekcji warunkowej wywołać wcześniej i jej zwracaną wartość 
 * zapisać do zmiennej, a później zamiast odwoływać się do funkcji użyjemy w sekcji warunkowej 
 * zmiennej.
 * Warto o tym pamiętać, aby unikać wywoływania funkcji w sekcji warunkowej.
 * 
 * Uff ... za nami już jedna z pętli teraz możemy przejść do kolejnej.
 */



/*
* W tej chwil możemy odrobinę rozbudować nasz przykład posługując się wiedzą którą już nabyliśmy
*/

// tablica z filmamy ....
$cinemaMowies = [
['name' => 'Joker', 'MPAA' => 'R'],
['name' => '1917', 'MPAA' => 'R'],
['name' => 'Jumanji: The Next Level', 'MPAA' => 'PG-13'],
['name' => 'Little Women', 'MPAA' => 'PG']
];

$visitor1 = ['name' => 'Jan Kowalski', 'age' => 41];
$visitor2 = ['name' => 'Zbysiu Kręcina', 'age' => 12];
