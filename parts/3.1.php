<?php

/**
 * Przyszła pora zabrać się za poważne rzeczy ;)
 * 
 * W poprzednich częściach kursu przewijały już się funkcję, jednak za każdym razem
 * nie zagłębialiśmy się w temat mówiąc że przyjdzie na to odpowiednia chwila.
 * Ta chwila nadeszła właśnie teraz.
 * 
 * Funkcje możemy podzielić na te które dostarcza nam język PHP, 
 * oraz na te które sami stworzymy (tak możemy to zrobić).
 * 
 * Zanim zagłębimy się w temat warto powiedzieć czym tak naprawdę funkcja jest.
 * 
 * Funkcja umożliwia nam stworzenie własnego kodu i go nazwanie.
 * Za pomocą tej nazwy będziemy się do niej mogli później odwołać i ponownie wywołać 
 * kod który wcześniej stworzyliśmy.
 * 
 * Do tej pory parokrotnie mieliśmy już okazję użyć funkcji np:
 * count($tablica) = dzięki której poznaliśmy liczbę elementów znajdujących się w tablicy.
 * 
 * W PHP mamy ogromną ilość funkcji które możemy użyć, przykładowo wchodząc pod link:
 * @link https://www.php.net/manual/en/ref.array.php znajdziemy listę funkcji powiązanych z operacjach
 * na tablicach. Widzimy że lista jest bardzo długa. Osobiście nie polecam uczenia się ich na pamięć.
 * Warto je jednak przeglądnąć i mieć świadomość, że jeśli będziemy chcieli dokonać jakiś operacji 
 * na tablicy to najpierw sprawdźmy czy czasem twórcy języka nie zaimplementowali już funkcji która 
 * to za nas zrobi. Takie podejście zaoszczędza dużo pracy :)
 * 
 * Na stronie: @link https://www.php.net/manual znajduje się dokumentacja do PHP, zalecam częste 
 * odwiedziny tej strony jak będziemy chcieli coś zrobić. Natomiast jak wspomniałem nie ma sensu
 * podchodzić do niej jak do książki i wertować strona po stronie.
 * 
 * Teraz jednak zajmiemy się funkcjami które możemy napisać sami.
 * 
 * Do definiowana nowej funkcji używamy słowa kluczowego "function"
 * Sama konstrukcja wygląda następująco
 */

/**
    // definicja
    function nazwaFunkcji(argumenty): typWartościZwracanej
    {
        ciałoFunkcji
    }
*/
/**
 * nazwaFunkcji - jest po prostu nazwą, którą nadajemy funkcji, dzięki temu w przyszłości
 * będziemy w stanie funkcji użyć posługując się jej nazwą. Tutaj wygląda to analogicznie 
 * jak przy zmiennych. Zmiennej również nadajemy nazwę po to aby móc jej później użyć.
 * Istotną różnicą jest to, że przy nazwach funkcji NIE MOŻEMY użyć znaku dolara.
 * Przy wybieraniu nazwy dla funkcji podobnie jak przy nazwach zmiennych bardzo ważne jest
 * oby już sama nazwa funkcji opisywała to co sama funkcja robi. Tak aby po jej przeczytaniu
 * wiedzielibyśmy za co odpowiada. 
 * Wierzcie mi to bardzo pomaga, szczególnie gdy nad projektem pracuje więcej niż jedna osoba
 * lub sami wracamy do kodu, który stworzyliśmy po jakimś czasie.
 * Przykładowo nazwa funkcji, którą już użyliśmy w naszym kursie czyli "count" od razu 
 * naprowadza nas na to co on robi.
 * 
 * argumenty - są to argumenty, które przekazujemy do wnętrza funkcji. Argumenty czyli tak
 * naprawdę jakieś parametry (zmienne) z poza funkcji, na podstawie których funkcja coś zrobi.
 * Do funkcji "count" przekazywaliśmy tablicę, której chcieliśmy zliczyć elementy.
 * Podawanie argumentów nie jest obowiązkowe, możemy stworzyć (zdefiniować) funkcję, która 
 * nie wymaga żadnych parametrów.
 * 
 * typWartościZwracanej - tutaj określamy jakiego typu będą dane, które nasza funkcja zwrócić po skończonej pracy.
 * Warto zaznaczyć, że funkcja nie musi nic zwracać, wtedy posługujemy się zapisem z użyciem słowa "void"
 * Przy definicji funkcja ta część jest opcjonalna i nie musimy jej pisać, jednak zalecam robienie tego, 
 * ze względów na spójność i czytelność kodu, jak również z faktu że traktuje się to jako dobrą praktykę programowania
 * 
 * ciałoFunkcji - wiadomo, tutaj implementujemy to co funkcja ma robić.
 * Możemy do tego użyć już całej naszej wiedzy, którą poznaliśmy na tym kursie.
 */

/**
    // uruchomienie
    nazwaFunkcji(argumenty);

    // uruchomienie i przypisanie zwracanej wartości
    $result = nazwaFunkcji(argumenty);
*/

/**
 * Aby użyć funkcji wystarczy użyć jej nazwę i przekazać do niej argument, oczywiście jeśli są wymagane.
 * 
 * Teraz przedstawię trochę dokładnie to o czym powiedzieliśmy chwilę wcześniej, posługując się mniej lub 
 * bardziej wydumanymi przykładami
 */

/**
 * Argumenty funkcji.
 * 
 * Funkcja może być bezargumentowa, czyli aby ją wywołać nie potrzebujemy przekazać do niej żadnych danych.
 */

function sayHello()
{
    echo "HELLO\n";
}

sayHello();

/**
 * Utworzyliśmy nową funkcję 'sayHello' która nie wymaga żadnych argumentów i ją wywołaliśmy.
 * Mam nadzieję, że tutaj jest wszystko jasne i możemy przejść do funkcji z argumentami
 */

function sayHello($name)
{
    echo "Hello $name\n";
}

sayHello('Ann');
sayHello('Tom');

/**
 * Stworzyliśmy nową funkcję 'sayHello', która wymaga parametru $name.
 * Po prostu odrobinę spersonalizowaliśmy naszą poprzednią funkcję.
 * 
 * W nawiasach umieszczamy nazwę zmiennej, do której będziemy mogli się później odwołać z wnętrza
 * naszej funkcji i jej użyć. 
 * Podczas wywołania funkcji pomiędzy nawiasy wpisujemy wartość która zostanie automatycznie 
 * przypisana do argumentu, który zdefiniowaliśmy przy tworzeniu funkcji, czyli w naszym przypadku $name.
 * 
 * Kiedy wywołamy naszą funkcję nie przekazując do niej żadnej wartości to zostanie zgłoszony błąd 
 * przez PHP, który poinformuje nas, że funkcja wymaga przekazania parametru.
 * 
 * No dobrze a dlaczego by nie zrobić czegoś takiego:
 */

$name = 'Ann';

function sayHello()
{
    echo "Hello $name\n";
}

sayHello();

/**
 * Taki kod nam nie zadziała, ponieważ zostanie zgłoszony błąd, że wewnątrz funkcji próbujemy
 * użyć zmiennej która nie istnieje (nie została zadeklarowana).
 * No ale jak to? Przecież przed definicją funkcji mamy ją zadeklarowaną.
 * 
 * Tutaj teraz pierwszy raz poruszymy temat zakresu widoczności zmiennych (eng. scope).
 * Prawda jest taka, że wewnątrz funkcji nie widzimy i nie mamy dostępu do tego co się znajduje na zewnątrz funkcji,
 * czyli odnosząc się do naszego przypadku nie możemy użyć zmiennej $name, ponieważ jesteśmy wewnątrz funkcji
 * i w zakresie funkcji ona nie istnieje. 
 * Już wyjaśniam co to jest zakres funkcji. To jest wszystko to co się znajduję pomiędzy nawiasami { }, oraz
 * argumenty które zostały przekazane do funkcji. 
 * 
 * Podobnie ma się sprawa w przypadku
 */

function sayHello($name)
{
    echo "Hello $name\n";
}

sayHello('John');

echo 'Name: ' . $name;

/**
 * Również dostaniemy informację o błędzie, mówiącą nam, że próbujemy użyć zmiennej która nie istnieje - i śłusznie.
 * Tak właśnie jest.
 * 
 * Wszystko to co stworzyliśmy we wnętrzu funkcji, nie jest widoczne poza funkcją. 
 * Przypisanie wartości 'John' do zmiennej $name również odbywa się w trakcie wykonywania funkcji na samym początku
 * i możemy w uproszczeniu potraktować to tak jakby się odbywało we wnętrzu funkcji. 
 * Nówię w uproszczeniu, ponieważ sprawa jest trochę bardziej skomplikowana, jednak na to chwilę wystarczy to co sobie 
 * już powiedzieliśmy.
 * 
 * Rozważmy jeszcze jeden przykład.
 */

$name = 'John';

function sayHello($name)
{
    $name = $name . ' Rambo';
    echo "IN FUNCTION: Hello $name\n";
}

sayHello($name);

echo "OUTER: Hello $name\n";

//IN FUNCTION: Hello John Rambo
//OUTER: Hello John

/**
 * Sam przykład może nie jest jakiś wybitny, ale dobrze obrazuje to co chcę przedstawić.
 * 
 * Na samym początku definiujemy sobie zmienną $name i przypisujemy do niej nazwę użytkownika.
 * Definiujemy następnie funkcję, której argument również nazywa się $name
 * Wewnątrz funkcji modyfikujemy zmienną $name zmieniając jej wartość i wyświetlamy
 * Następnie wywołujemy funkcję sayHello przekazując do niej zmienną $name, którą zdefiniowaliśmy
 * na samym początku.
 * Na koniec wyświetlamy zmienną $name;
 * 
 * Spodziewaliście się takiego rezultatu?
 * Dzieje się tak ponieważ w naszym przykładzie tak jak już wspominaliśmy mamy dwa zakresy widoczności 
 * Pierwszy to zakres zewnętrzny, drugi to zakres wewnątrz funkcji.
 * W zakresie zewnętrznym cały czas odwołujemy się do zmiennej zdefiniowanej na początku skryptu, 
 * czyli zmiennej z wartością 'John'.
 * Natomiast w zakresie funkcyjnym tworzona jest całkiem nowa zmienna $name, która jest widoczna tylko i 
 * wyłącznie wewnątrz funkcji sayHello. Modyfikacje tej zmiennej nie wpływają w jakikolwiek sposób
 * na zmienną $name, która znajduje się na zewnątrz funkcji. Co zaobserwowaliśmy modyfikując $name 
 * wewnątrz funkcji.
 * 
 * Warto jeszcze powiedzieć jak działa przekazywanie danych jako argumentów do wnętrze funkcji.
 * Można to robić na dwa sposoby przez kopię oraz referencję (a ściślej kopię referencji).
 * Do referencji jeszcze powrócimy w przyszłości. W naszym przypadku zachodzi mechanizm przekazywania
 * przez kopię dlatego teraz na nim się skupimy.
 * 
 * Co to znaczy przekazywanie przez kopię?
 * W momencie gdy wywołujemy funkcję i przekazujemy do niej dane przy użyciu zmiennych, czyli:
 * $name = 'John';
 * sayHellFor($name)
 * PHP odczytuje wartość przypisaną do zmiennej $name.
 * Robi sobie jej kopię analogicznie do tego jakbyśmy kserowali coś na kopiarce
 * Następnie wstrzykuję ją do wnętrza funkcji.
 * Po czym we wnętrzu funkcji przypisuje ją do zmiennej $name.
 * Gdzie $name z zewnątrz i $name z wnętrza funkcji to dwie różne zmienne, mają tylko taką samą nazwę
 * co w naszym przypadku jest dobrane z premedytacją.
 * Teraz modyfikując (wewnątrz funkcji) $name modyfikujemy tak naprawdę kopię którą przekazaliśmy do funkcji.
 * W analogii do ksera, jeśli coś napiszemy na odbitce to to nie trafi w jakiś auto-magiczny sposób do oryginału.
 * Podobnie modyfikując oryginał już po wywołaniu funkcji to nie wpływa na to co się znajduje w kopi, ponieważ
 * zrobiliśmy to już po utworzeniu kopi.
 * 
 * Warto poświęcić chwilę na zrozumienie powyższych zasad, ponieważ są to jedne z kluczowych zasad które obowiązują w PHP
 * 
 * UWAGA: W PHP istnieje też coś takiego jak zmienne globalne, które łamią powyższe zasady i są "widoczne wszędzie"
 * Nie będę im poświęcał jednak czasu, ponieważ używanie ich jeśt traktowane jako żly nawyk i należy ich unikać,
 * a my przecież nie chcemy się uczyć złych nawyków.
 */

/**
 * Do tej pory stworzyliśmy funkcję z jednym argumentem.
 * Jednak funkcja może przyjmować wiele argumentów.
 * Każdy kolejny argument dodajemy po przecinku
 */

function sayHello($firstName, $lastName)
{
    echo "Hello $firstName $lastName\n";
}

sayHello('John', 'Rambo');

/**
 * Wartości domyślne.
 * 
 * W ostatnim przykładzie musieliśmy przy wywołaniu funkcji podać oba parametry.
 * Gdybyśmy tego nie zrobili to podczas uruchomienia naszego programu zostałby zgłoszony błąd
 * 
 * A co w przypadku gdy mamy funkcję której jeden z argumentów podczas wywołania praktycznie jest taki sam?
 * W takiej sytuacji możemy sie posłużyć tak zwaną wartością domyślną dla argumentu.
 */

function sayHello($name, $language = 'en') 
{
    if ($language === 'en') {
        echo "Hello $name\n";
    } else if ($language === 'pl') {
        echo "Witaj $name\n";
    } else {
        echo "Unsupported language";
    }
}

/**
 * Dzięki użyciu wartości domyślnej wywołanie funkcji może mieć skróconą postać. 
 */

sayHello('Tom');
sayHello('Tom', 'en');
sayHello('Tom', 'pl');
sayHello('Tom', 'de');

/**
 * Jeśli chcemy wywołać funkcję z inną wartością argumentu niż wartość domyślna to po prostu ją podajemy.
 */

/**
 * Oczywiście argumentów z wartościami domyślnymi może być więcej niż jeden, 
 * równie dobrze wszystkie argumenty funkcji mogą mieć wartości domyślne,
 * wtedy wywołanie funkcji mogłoby wyglądać jak wywołanie funkcji bezargumentowej
 */

function testDefaults($arg1 = 'foo', $arg2 = 'bar')
{
    // do something
}

testDefaults(); // OK
testDefaults('new foo'); // OK
testDefaults('new foo', 'new bar'); // OK
testDefaults( , 'new bar'); // ERROR

... napisać o kolejności parametrów domyślnych

/**
 * Powoli język PHP z typowania dynamicznego (czyli przypisania typów zmiennych w trakcie działania programu)
 * poprzez typowanie słabe
 * do typowania silnego
 */