<?php

// Struktury kontrole

/**
 * TRZEBA USPRAWNIĆ WSTĘP
 *
 * W tym rozdziale zrobimy spory króka w przód i zdynamizujemy nasz kod.
 * Do tej pory poznaliśmy dużo rzeczy jednak to co można o nich powiedzieć oprócz tego że to bardzo ważna wiedza
 * to to, że generalnie była to wiedza teoretyczna. Definiowaliśmy zmienne, poznaliśmy operatory ale nic tak
 * naprawdę z nimi nie robiliśmy.
 *
 * Teraz przyszł pora na poznanie nowych konstrukcji takich jak instrukcjie warunkowę, pętle i termaty z nimi powiązane.
 *
 * Na samym początku zaczniemy od instrukcji warunkowych, czyl popularnych if'ów.
 * Niektórzy nawet twierdzą że wzorzec ifolec to jeden ze wzorców programowania ;)
 *
 * Wyrażenia warunkowe umożliwiają nam wykonanie kodu gdy zostaną spełniene określone warunki. Jeśli warunki
 * nie zostaną spełnione to kod nie zostanie wykonany
 *
 * Jednak zanim przejdziemy do samego kodu wymyślmy sobie jakiś rzeczywisty przypadek który musimy rozpatrzyć.
 * Mój wybór padł na problem kategorii wiekowych w amerykańskich filmach.
 *
 * W USA kategorie wiekowe fimom ustala MPAA (Motion Picture Association of America). Dzięki temu rodzice wiedzą
 * jaki film może oglądać ich pociecha.
 * Nie wchodząc w szczegóły film może dostać następujace oznaczenie:
 *
 * G (general audiences) – film przeznaczony dla wszystkich widzów
 * PG (parental guidance suggested) – niektóre materiały w filmie mogą być nieodpowiednie dla dzieci (za zgodą rodziców)
 * PG-13 (parents strongly cautioned) – niektóre materiały mogą być nieodpowiednie dla osób poniżej 13. roku życia (za zgodą rodziców)
 * R (restricted) – osoby poniżej 17. roku życia mogą oglądać film jedynie z rodzicem lub pełnoletnim opiekunem
 * NC-17 (no one 17 and under admitted) - film nie jest przeznaczony dla osób 17 i poniżej (poniżej 18)
 * (powyższe to: żródło Wikipedia)
 *
 * W USA wbrew pozoromo pilnuje się tych ograniczeń w przeciwieństwie do Polski.
 * Wrócmy jednak do programowania.
 *
 * Musimy teraz napisać aplikację do sprzedaży biletów online,
 * w związku z tym aby kupić bilet na film Deadpool który ma kategorię R musimy sprawdzić wiek kupującego
 */

$age = 20;
if ($age >= 17) {
    echo 'Kupiłeś bilet !!!';
}

/**
 * Oczywiście sam przykład jest strasznie naiwny i uproszczony ale dobrze oddaje to jak działa wyrażenie warunkowe.
 * Mianowicie: używające "operatora porównania >=" który poznaliśmy we wcześniejszych lekcjach sprawdzamy, czu
 * osoba kupująca bilet ma co najmniej 17 lat. Jeśli tak to może bez problemu kupić bilet.
 *
 * Sama konstrukcja wyrażenia waruniowego wygląda następująco:
 *
 * if (wyrażenieDoSprawdzenia) {
 *   // kod do wykonania jeśli wyrażenie jest prawdziwe
 * }
 *
 * Możemy sobie to przetłumaczyć na jeżyk polski i powstanie na taka sentencja:
 * Jeśli wyrażenieDoSprawdzenia jest prawdę to wykonajmy kod znajdujący się pomiędzy nawiasami.
 *
 * Proste, prawda?
 * Warto się jednak zastanowić co znaczy "jeśli wyrażenieDoSprawdzenia jest prawdę"
 * W rzeczywistym przykładzie sprawdzaliśmy czy osoba kupująca ma co najmniej 17 lat - $age >= 17
 * Jeśli to wyrażenie jest prawdziwe (w naszy przypadku jest) to zwraca wartość 'true' - czyli prawda
 * Jeśli wyrażenie nie byłoby prawdziwe to zwróciło by wartość 'false' - czyli nie prawda i kod by się nie wykonał.
 * Do konstrułwania wyrażeń bardzo użyteczne są jak już wspomniałem operatory porównania ale nie koniecznie musimy
 * ich używać.
 * Przykładowo:
 */

$integer = 2;
if ($integer) {
    // każda liczba rózna od 0 zawsze będzie uznana za prawdę
}

/**
 * Dlaczego tak to działa.
 * Tajemnicą jest fakt że tak naprawdę wyrażenie które jest sprawdzana jest rzutowane do typu bool.
 * O rzutowaniu wcześniej nie mówiliśmy, ale to jest nic innejo jak konwersja danych z jednego formatu na inny format.
 * czyli w przypadku powyżej mamy niejawną (ponieważ dzieje się w tle) konwersję wartości int (2) na wartość bool
 * co daje w rezultacie 'true'.
 *
 * Istnieje też jawny zapis rzutowania:
 */
$boolValue  = (bool) 2;
var_dump($boolValue);

$integer = 32;
$boolValue  = (bool) $integer;
var_dump($boolValue);

/**
 * W nawiasach przed wartością/zmienną podajęmy typ do którego chcemy daną przekształcić.
 * Jeśli chcielibyśmy być bardzo dokładni to moglibyśmy zapisać wyrażenie warunkowe
 */
$value = 42;
if ((bool) $value) {
    // każda liczba rózna od 0 zawsze będzie uznana za prawdę
}

/**
 * Jednak w wyrażeniach warunkowych możemy pominąć zapis (bool) poniważ kompilator sam za nas to robi.
 * Dzięki temu sam zapis staje się bardziej czytelny i nie będzie sytuacji, że o tym zapomnimy.
 * Warto poznać wartości ktore w rzutowaniu na bool dają zawsze false. Jest ich skończona i w miarę krótka lista
 * więc pokuszę się o wymienienie ich
 *
 * false - rzutowanie false na typ bool samo w sobie jest bez sensu ale aby mieć pełen komplte możliwości - wymieniam
 * 0 i -0 - integer
 * 0.0 i -0.0 - float
 * "" i "0" - pusty string oraz string z cyfrą zero
 * [] - pusta tablica
 * null
 */

var_dump((bool) "");        // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3);       // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)

/**
 * Kolejną rzeczą którą możemy zastosować jako wyrażenie jest wynik zwracany przez funkcję.
 * Teraz tylko zaznaczam taką możliwość, z czasem powiemy na ten temat więcej.
 *
 * Jednak najczęściej przy sprawdzaniu wyrażenia czy jest prawdziwe używamy operatorów porówniania.
 * Dla przypomnienia:
 * ==
 * ===
 * !=
 * !==
 * >
 * >=
 * <
 * <=
 *
 * Tak jak to zrobiliśmy w naszym pierwszym przykładnie.
 */

/**
 * IF - ELSE
 * Skoro poznalismy już if'a trzeba teraz poznać jego bardziej rozbudowaną wersję czyli if-else
 *
 * Pamiętamy definicję if'a:
 * Wyrażenia warunkowe umożliwiają wykonanie kodu gdy zostaną spełniene określone warunki. Jeśli warunki
 * nie zostaną spełnione to kod nie zostanie wykonany
 *
 * Konstrukcję if-else możemy opisać:
 * Wyrażenia if-else umożliwiają wykonanie określonego kodu gdy zadane warunki zostaną spełnione. Natomiast jeśli warunki
 * nie zostaną spełnione to zostanie wykonany kod przewidziany na taką sytuację.
 *
 * Wracając do naszego przykładu, dla przypomnienia:
 * Piszemy aplikację do sprzedaży biletów online,
 * w związku z tym aby kupić bilet na film Deadpool który ma kategorię R musimy sprawdzić wiek kupującego.
 * Chcielibyśmy też poinformować kupującego dlaczego nie może kupić biletu.
 *
 * Możemy to osiągnąć w następujący sposób:
 */
$age = 20;
if ($age >= 17) {
    echo 'Kupiłeś bilet !!!';
}
if ($age < 17) {
    echo 'Jesteś za młody, nie możesz kupić biletu na ten film';
}
/**
 * Używamy dwóch wyrażeń warunkowych.
 * Zauważmy że wyrażenie które sprawdzamy w drugim if'ie jest negacją (odwórceniem) pierwszego wyrażenia.
 * W związku z tym ten sam efekt otrzymamy używając konstrukcji if-else
 */
$age = 20;
if ($age >= 17) {
    echo 'Kupiłeś bilet !!!';
} else {
    echo 'Jesteś za młody, nie możesz kupić biletu na ten film';
}
/**
 * Widziemy że konstrukcja if-else jest bardziej zwięzła i czytelna. Nie musimy twożyć kolejnego if'a z przeciwnym
 * warunkiem.
 * Mówiąc w taki prosty sposób działa to w tens spośób:
 * Jeśli warunek jest spełniony to wykonaj pierwy blok kodu, a jeśli nie to wykonaj drugi blok kodu.
 *
 * IF - ELSEIF
 * A co jeśli byśmy chcieli zaproponować inny film np Jumanji: The Next Level z ktegorii wiekowej PG-13?
 * Używając poznanej do tej pory wiedzy możemy napisać:
 */

$age = 20;
if ($age >= 17) {
    echo 'Kupiłeś bilet !!!';
} else {
    if ($age >= 13) {
        echo 'Może jesteś zainteresowany innym filmem z naszej oferty ';
        echo 'Polecamy film: Jumanji: The Next Level';
    } else {
        echo 'Jesteś za młody, nie możesz kupić biletu na ten film';
    }
}

/**
 * Możemy również użyć konstrukcji if-elseif, dzięki której uzyskujemy możliwość dodawania kolejnych warunków do
 * sprawdzenia
 */

$age = 20;
if ($age >= 17) { // wyrażenie1
    // kod się wykona jeśli wyrażenie1 jest prawdziwe
    echo 'Kupiłeś bilet !!!';
} elseif ($age >= 13) { // wyrażenie2
    // kod się wykona jeśli wyrażenie1 nie jest spełnione natomiast wyrażenie2 jest spełnione
    echo 'Może jesteś zainteresowany innym filmem z naszej oferty ';
    echo 'Polecamy film: Jumanji: The Next Level';
} else {
    // kod się wykona jeśli żadne z powyższych wyrażeń nie zostanie spełnione
    echo 'Jesteś za młody, nie możesz kupić biletu na ten film';
}

/**
 * CIEKAWOSTKA:
 * Istnieje możliwość użycia skróconego zapisu if-else
 * Używamy do tego tak zwany "Ternary operator" czyli zapisu "?:"
 */
$grade = 6;
if ($grade > 4) {
    $mood = 'happy';
} else {
    $mood = 'unhappy';
}
echo $mood;

$mood = $grade > 4 ? 'happy' : 'unhappy';
echo $mood;

/**
 * Finalnie oba przykłady zadziałają tak samo, jednak drugi charakteryzuje się krótszym zapisem.
 * Warto zaznaczyć, że nie poleca się używania "krótkiego zapisu" do tworzenia bardzo rozbudowanych warunków
 */

/**
 * Oparatory logiczne
 * W lekcji o operatorach specjalnie omineliśmy jeden rodzaj operatorów aby móc do niego wrócić dokładnie w tym miejscu.
 * Mowa o operatorach logicznych.
 *
 * Dlaczego wracamy do nich tu i teraz.
 * Wyobraźmy sobie że w jednej chwili chcemy sprawdzić więcej niż jedno wyrażenie regularne.
 *
 * Przykładowo aby zakupić bilet trzeba mieć jeszcze wystarczającą ilość gotówki.
 */

$age = 24;
$myWallet = 200;
$ticketPrice = 10;
if ($age >= 17) {
    if ($myWallet > $ticketPrice) {
        echo 'Bilet kupiony';
    }
}

/**
 * Możemy to osiągnąć poprzeż zagnieżdżanie kolejnych if'ów.
 * Fakt możemy robić to dowolną ilość razy, ale czy to najlepsze rozwiązanie, otóż nie.
 * Z pomocą przychodzą nam właśnie operatory logicznie, w tym przypadku && (AND)
 * Dzięki niemu powyższy przykład możemy zapisać następująco;
 */
$age = 24;
$myWallet = 200;
$ticketPrice = 10;
if ($age >= 17 && $myWallet > $ticketPrice) {
    echo 'Bilet kupiony';
}
/**
 * Zapis nam się mocno uprościł.
 * Możemy go odczytać w następujący sposób.
 *
 * Wyrażenie jest spełnione wtedy i tylko wtedy kiedy oba warunki są spełnione jednocześnie (wiekowy i kwotowy)
 *
 * Podstawowe aperatory loticznie to:
 * && - AND - prawda wtdy gdy OBA wyrażenie są prawdziwe (wyrażenie po lewej i prawej stronie musi być prawdziwe)
 * || - OR - prawda gdy JEDNO wyrażenie jest prawdziwe (po lewej lub prawej stronie, lub oba prawdziwe)
 * xor - prawda gdy TYLKO JEDNO wyrażenie jest prawdziwe (po lewej lub prawej stronie)
 * ! - negacja - sprawdza czy wyrazenie nie jest prawdziwe
 *
 * Wynikiem działania operatora logicznego jest zawsze wartość bool, czyli jak pamiętamy true lub false
 * Operatorów logicznych nie używamy tylko i wyłącznie w konstrukcjach warunkowych.
 * Mozemy ich używać tak samo jak innych operatorów i zwracaną wartość przypisywać do zmiennej
 */

$a = 1 && 2;
var_dump($a);

var_dump(1 && 0); // false
var_dump(1 && false); // false

var_dump(0 || 1); // true
var_dump(true || false); // true
var_dump(0 || ''); // false

var_dump(!false); // true
var_dump(!0); // true
var_dump(!1); // false

// poniższe sprawdzić - ewentualnie użyć nawiasów
var_dump(2 xor 3); // fasle
var_dump(0 xor 3); // true

/**
 * Wszystkich operatorów można używać w wyrażeniach warunkowych w dowolnej ilości i kombinacji
 * Ogranicza nasz tylko zdrowy rozsądek i czytelność kodu
 */

if ($age > 20 && $myWallet > 300 && ($localization = 'Poznań' || $localization = 'Kraków')) {
    echo 'Wszystko ok';
} else {
    echo 'Coś poszło nie tak';
}

/**
 * Zastosowanie nawiasów pozwala nam grupować warunki w logiczną całość.
 * Przed chwilą zapisaliśmy warunek, który wymaga aby był prawdziwy:
 *  - wiek musi byćwiększy od 20
 *  - I muszę mieć więcej niż 300 gotówki
 *  - I muszę się znajdować w Poznańiu LUB w Krakowie
 */