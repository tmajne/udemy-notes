<?php

// FOR - FOREACH

/**
 * Kolejnym etapem naszej przygody są petle.
 *
 * Pętle wykożystujemy do wielokrotnego wykonania zdefiniowanych przez nas operacji.
 *
 * Być może w tej chwili przedstawiony opis nie jest zbyt jasny, jednak w trakcie odcinka wszystko się wyjaśni.
 *
 * W PHP mamy cztery rodzeje pętli
 * - for
 * - foreach
 * - while
 * - do-while
 *
 * Zaczniemy od najproszczej i najbardzij uniwersalnej czyli pętli for.
 * Jej konstrukcja jest następująca
 */

/**
    for ( inicjalizacja ; warunek ; aktualizacj ) {
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

for ($i = 0, $i < 5, $i++) {
    // kod do wykonania
    var_dump($i);;
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
 * Pętle for na początku przeważnie przyspażają problemów, dlatego warto chwilę czasu im poświęcić aby dobrze
 * zrozumieć w jaki sposób działaja. Spróubję jeszcze raz je omówić używając trochę innego podejścia i posiłkując
 * się naszym przykładem i tym co chwilę temu powiedzieliśmy.
 *
 *
 * Na samym początu wykonania pętli ustawiana jest wartość sterująca czyli $i = 0.
 *
 * W następnym kroku sprawdzany jest warunek, jesśli jest prawdziwy przechodzimy do wykonania kodo wewnątrz pętli,
 * czyli w naszym przypadku wyświetlamy zmienną sterującą.
 * Można się zastanowić czy za pierwszym razem jest sens sprawdzania warunku ponieważ ręcznie przypisujemy wartość
 * zmiennej $i tak więc od razu przypiszemy wartość, która spełnia warunek. Owszem tak to wygląda w naszym przykładzie,
 * jednak w przyszłości jak będziesz programował wielokrotenie okaże się że przypisanie wartości do zmiennej
 * sterującej nie będzie takie oczywiste, to znaczy wartość którą przypisujemy może znajdować się w innej zmiennej lub
 * być zwracana przez funkcję (o funkcjach będziemy mówić już w następnej leksji)
 *
 * Po wykonaniu kodu z wnętrza pętli aktualizujemy naszą zmienną systemową, czyli w naszym przykładzie
 * zwiększamy jej wartość o 1.
 *
 * W ten oto sposób zakończyła się pierwsza iteracja naszej pętli.
 * W drugiej iterazji pomijamy już część inicjalizacji.
 * Dlaczego tak się dzieje? Pamiętamy że na końcu poprzedniej iteracji (czyli wykonania pętli) zwiększyliśmy
 * wartość $i. Gdybyśmy teraz znowu wykonali część inicjalizacyją to ustawiliśmy ją ponownie na zero, co nie byłoby
 * wskazanie.
 * Tak wiec pomijamy już część inicjalizacji i od razu przechodzimy do sprawdzania warunku, z uwzględnieniem faktu, że
 * wartość zmiennej steującej $i została zwiększona na zakończenie poprzedniej iteracji. W naszym przypadku warunek
 * nadal będzie spełniony $i < 5 ponieważ wartość $i wynosi 1
 * Przechodzimy do wykonania kodu z wnętrze pęteli
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
 * zmiennej sterującej uzyskamy efekt pętli nieskończonej, czyli takiej któa będzie się wykonywac zawsze.
 * Jeśli taki był nasz cel to bravo MY :)
 * Jeśli jednak stało się tak, ponieważ gdzieś popełniliśmy błęd to warto wiedzieć, że PHP ma pewien mechanizm
 * obbronny przed takimy sytauacjami i potrafi wykryć tego rodzaju pętle i domyślnie po 30 sekundach przerwie
 * jej działanie i zgłosi błąd. Oczywiści czas ten możemy modyfikować poprzez odpowiednią konfigurację, jak również
 * możemy to całkowicie wyłączyć, jednak trzeba to ustawić świadomie.
 *
 * OK, sporo sobie już opowiedzieliśy o samej pętli for.
 * Przejdzy do odrobinę bardziej realnego przykładu do którego moglibyśmy ją zastosować.
 * Częstą pętli używa się do przejścia (przeiterowania) po elementach znajdujących się w tablicy.
 * Pozostańmy w świecie filmowym.
 * Zaużmy że w tablicy przechowujemy listę filmów, które w danej chchili możemy zobaczyć:
 */
$cinemaMowies = [
    'Joker',
    '1917',
    'Jumanji: The Next Level',
    'Little Women', 'MPAA'
];


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
