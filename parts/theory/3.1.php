<?php

declare(strict_types=1);

/*
 Przyszła pora zabrać się za poważne rzeczy ;)
 
 W poprzednich częściach kursu przewijały już się funkcję, jednak za każdym razem
 nie zagłębialiśmy się w temat mówiąc że przyjdzie na to odpowiednia chwila.
 Ta chwila nadeszła właśnie teraz.
 
 Funkcje możemy podzielić na te które dostarcza nam język PHP, oraz na te które sami stworzymy (tak możemy to zrobić).
 
 Zanim zagłębimy się w temat warto powiedzieć czym tak naprawdę funkcja jest.
 
 Funkcja umożliwia nam stworzenie własnego kodu i go nazwanie.
 Za pomocą tej nazwy będziemy się do niej mogli później odwołać i ponownie wywołać 
 kod który wcześniej stworzyliśmy.
 
 Do tej pory parokrotnie mieliśmy już okazję użyć funkcji np:
 count($tablica) = dzięki której poznaliśmy liczbę elementów znajdujących się w tablicy.
 
 W PHP mamy ogromną ilość funkcji które możemy użyć, przykładowo wchodząc pod link:
 @link https://www.php.net/manual/en/ref.array.php znajdziemy listę funkcji powiązanych z operacjach
 na tablicach. Widzimy że lista jest bardzo długa. Osobiście nie polecam uczenia się ich na pamięć.
 Warto je jednak przeglądnąć i mieć świadomość, że jeśli będziemy chcieli dokonać jakiś operacji 
 na tablicy to najpierw sprawdźmy czy czasem twórcy języka nie zaimplementowali już funkcji która 
 to za nas zrobi. Takie podejście zaoszczędza dużo pracy :)
 
 Na stronie: @link https://www.php.net/manual znajduje się dokumentacja do PHP, zalecam częste 
 odwiedziny tej strony jak będziemy chcieli coś zrobić. Natomiast jak wspomniałem nie ma sensu
 podchodzić do niej jak do książki i wertować strona po stronie.
 
 Teraz jednak zajmiemy się funkcjami które możemy napisać sami.
 
 Do definiowana nowej funkcji używamy słowa kluczowego "function"
 Sama konstrukcja wygląda następująco

PHP 7.x
function nazwaFunkcji(argumenty): typWartościZwracanej
{
    ciałoFunkcji
}

 nazwaFunkcji - jest po prostu nazwą, którą nadajemy funkcji, dzięki temu w przyszłości będziemy w stanie funkcji użyć posługując się jej nazwą. Tutaj wygląda to analogicznie jak przy zmiennych. Zmiennej również nadajemy nazwę po to aby móc jej później użyć.
 
 Istotną różnicą jest to, że przy nazwach funkcji NIE MOŻEMY użyć znaku dolara.

 Przy wybieraniu nazwy dla funkcji podobnie jak przy nazwach zmiennych bardzo ważne jest oby już sama nazwa funkcji opisywała to co sama funkcja robi. Tak aby po jej przeczytaniu wiedzielibyśmy za co odpowiada. 

 Wierzcie mi to bardzo pomaga, szczególnie gdy nad projektem pracuje więcej niż jedna osoba lub sami wracamy do kodu, który stworzyliśmy po jakimś czasie.
 Przykładowo nazwa funkcji, którą już użyliśmy w naszym kursie czyli "count" od razu 
 naprowadza nas na to co on robi.
 
 argumenty - są to argumenty, które przekazujemy do wnętrza funkcji. Argumenty czyli tak
 naprawdę jakieś parametry (zmienne) z poza funkcji, na podstawie których funkcja coś zrobi.
 Do funkcji "count" przekazywaliśmy tablicę, której chcieliśmy zliczyć elementy.
 Podawanie argumentów nie jest obowiązkowe, możemy stworzyć (zdefiniować) funkcję, która 
 nie wymaga żadnych parametrów.
 
 typWartościZwracanej - tutaj określamy jakiego typu będą dane, które nasza funkcja zwrócić po skończonej pracy.

 Warto zaznaczyć, że funkcja nie musi nic zwracać, wtedy posługujemy się zapisem z użyciem słowa "void"
 Przy definicji funkcja ta część jest opcjonalna i nie musimy jej pisać, jednak zalecam robienie tego, 
 ze względów na spójność i czytelność kodu, jak również z faktu że traktuje się to jako dobrą praktykę programowania
 
 ciałoFunkcji - wiadomo, tutaj implementujemy to co funkcja ma robić. Możemy do tego użyć już całej naszej wiedzy, którą poznaliśmy na tym kursie.

  // uruchomienie / wywołanie funkcji
  nazwaFunkcji(argumenty);

  // uruchomienie i przypisanie zwracanej wartości
  $result = nazwaFunkcji(argumenty);

 Aby użyć funkcji wystarczy użyć jej nazwę i przekazać do niej argument, oczywiście jeśli są wymagane.
 
 Teraz przedstawię trochę dokładnie to o czym powiedzieliśmy chwilę wcześniej, posługując się mniej lub 
 bardziej wydumanymi przykładami
*/

/*
 Argumenty funkcji.
 
 Funkcja może być bezargumentowa, czyli aby ją wywołać nie potrzebujemy przekazać do niej żadnych danych.
*/

// function sayHello()
// {
//     echo "HELLO\n";
// }

// sayHello();

/*
 Utworzyliśmy nową funkcję 'sayHello' która nie wymaga żadnych argumentów i ją wywołaliśmy.
 Mam nadzieję, że tutaj jest wszystko jasne i możemy przejść do funkcji z argumentami
*/

// function sayHello($name)
// {
//     echo "Hello $name\n";
// }

// sayHello('Ann');
// sayHello('Tom');

/*
 Stworzyliśmy nową funkcję 'sayHello', która wymaga parametru $name.
 Po prostu odrobinę spersonalizowaliśmy naszą poprzednią funkcję.
 
 W nawiasach umieszczamy nazwę zmiennej, do której będziemy mogli się później odwołać z wnętrza
 naszej funkcji i jej użyć. 
 Podczas wywołania funkcji pomiędzy nawiasy wpisujemy wartość która zostanie automatycznie 
 przypisana do argumentu, który zdefiniowaliśmy przy tworzeniu funkcji, czyli w naszym przypadku $name.
 
 Kiedy wywołamy naszą funkcję nie przekazując do niej żadnej wartości to zostanie zgłoszony błąd przez PHP, który poinformuje nas, że funkcja wymaga przekazania parametru.
 
 No dobrze a dlaczego by nie zrobić czegoś takiego:
*/

// $name = 'Ann';

// function sayHello()
// {
//     echo "Hello $name\n";
// }

// sayHello();

/*
 Taki kod nam nie zadziała, ponieważ zostanie zgłoszony błąd, że wewnątrz funkcji próbujemy
 użyć zmiennej która nie istnieje (nie została zadeklarowana).
 No ale jak to? Przecież przed definicją funkcji mamy ją zadeklarowaną.
 
 Tutaj teraz pierwszy raz poruszymy temat zakresu widoczności zmiennych (eng. scope).
 Prawda jest taka, że wewnątrz funkcji nie widzimy i nie mamy dostępu do tego co się znajduje na zewnątrz funkcji, czyli odnosząc się do naszego przypadku nie możemy użyć zmiennej $name, ponieważ jesteśmy wewnątrz funkcji i w zakresie funkcji ona nie istnieje. 
 
 Już wyjaśniam co to jest zakres funkcji. To jest wszystko to co się znajduję pomiędzy nawiasami { }, oraz
 argumenty które zostały przekazane do funkcji. 
 
 Podobnie ma się sprawa w przypadku
*/

// function sayHello($name)
// {
//     echo "Hello $name\n";
// }

// sayHello('John');

// echo 'Name: ' . $name;

/*
 Również dostaniemy informację o błędzie, mówiącą nam, że próbujemy użyć zmiennej która nie istnieje - i śłusznie.
 Tak właśnie jest.
 
 Wszystko to co stworzyliśmy we wnętrzu funkcji, nie jest widoczne poza funkcją. 
 Przypisanie wartości 'John' do zmiennej $name również odbywa się w trakcie wykonywania funkcji na samym początku i możemy w uproszczeniu potraktować to tak jakby się odbywało we wnętrzu funkcji. 
 Nówię w uproszczeniu, ponieważ sprawa jest trochę bardziej skomplikowana, jednak na to chwilę wystarczy to co sobie już powiedzieliśmy.
 
 Rozważmy jeszcze jeden przykład.
*/

// $name = 'John';

// function sayHello($name)
// {
//     $name = $name . ' Rambo';
//     echo "IN FUNCTION: Hello $name\n";
// }

// sayHello($name);

// echo "OUTER: Hello $name\n";

// IN FUNCTION: Hello John Rambo
// OUTER: Hello John

/*
 Sam przykład może nie jest jakiś wybitny, ale dobrze obrazuje to co chcę przedstawić.
 
 Na samym początku definiujemy sobie zmienną $name i przypisujemy do niej nazwę użytkownika.
 Definiujemy następnie funkcję, której argument również nazywa się $name
 Wewnątrz funkcji modyfikujemy zmienną $name zmieniając jej wartość i wyświetlamy
 Następnie wywołujemy funkcję sayHello przekazując do niej zmienną $name, którą zdefiniowaliśmy
 na samym początku.
 Na koniec wyświetlamy zmienną $name;
 
 Spodziewaliście się takiego rezultatu?

 Dzieje się tak ponieważ w naszym przykładzie tak jak już wspominaliśmy mamy dwa zakresy widoczności 
 Pierwszy to zakres zewnętrzny, drugi to zakres wewnątrz funkcji.
 W zakresie zewnętrznym cały czas odwołujemy się do zmiennej zdefiniowanej na początku skryptu, 
 czyli zmiennej z wartością 'John'.
 Natomiast w zakresie funkcyjnym tworzona jest całkiem nowa zmienna $name, która jest widoczna tylko i 
 wyłącznie wewnątrz funkcji sayHello. Modyfikacje tej zmiennej nie wpływają w jakikolwiek sposób
 na zmienną $name, która znajduje się na zewnątrz funkcji. Co zaobserwowaliśmy modyfikując $name 
 wewnątrz funkcji.
 
 Warto jeszcze powiedzieć jak działa przekazywanie danych jako argumentów do wnętrze funkcji.
 Można to robić na dwa sposoby przez kopię oraz referencję (a ściślej kopię referencji).
 Do referencji jeszcze powrócimy w przyszłości. W naszym przypadku zachodzi mechanizm przekazywania
 przez kopię dlatego teraz na nim się skupimy.
 
 Co to znaczy przekazywanie przez kopię?
 W momencie gdy wywołujemy funkcję i przekazujemy do niej dane przy użyciu zmiennych, czyli:
 
 $name = 'John';
 
function sayHello($name)
{
    echo "Hello $name\n";
}

sayHellFor($name)

 PHP odczytuje wartość przypisaną do zmiennej $name.

 Robi sobie jej kopię analogicznie do tego jakbyśmy kserowali coś na kopiarce
 
 Następnie wstrzykuję ją do wnętrza funkcji.
 
 Po czym we wnętrzu funkcji przypisuje ją do zmiennej $name.
 
 Gdzie $name z zewnątrz i $name z wnętrza funkcji to dwie różne zmienne, mają tylko taką samą nazwę
 co w naszym przypadku jest dobrane z premedytacją.
 
 Teraz modyfikując (wewnątrz funkcji) $name modyfikujemy tak naprawdę kopię którą przekazaliśmy do funkcji.
 
 W analogii do ksera, jeśli coś napiszemy na odbitce to to nie trafi w jakiś auto-magiczny sposób do oryginału.
 
 Podobnie modyfikując oryginał już po wywołaniu funkcji to nie wpływa na to co się znajduje w kopi, ponieważ zrobiliśmy to już po utworzeniu kopi.
 
 Warto poświęcić chwilę na zrozumienie powyższych zasad, ponieważ są to jedne z kluczowych zasad które obowiązują w PHP
 
 UWAGA: W PHP istnieje też coś takiego jak zmienne globalne, które łamią powyższe zasady i są "widoczne wszędzie"
 Nie będę im poświęcał jednak czasu, ponieważ używanie ich jeśt traktowane jako zly nawyk i należy ich unikać, a my przecież nie chcemy się uczyć złych nawyków.
*/


/*
 Do tej pory stworzyliśmy funkcję z jednym argumentem.
 Jednak funkcja może przyjmować wiele argumentów.
 Każdy kolejny argument dodajemy po przecinku
*/

// function sayHello($firstName, $lastName)
// {
//     echo "Hello $firstName $lastName\n";
// }

// sayHello('John', 'Rambo');


/*
 WARTOŚCI DOMYŚLNE
 
 W ostatnim przykładzie musieliśmy przy wywołaniu funkcji podać oba parametry.
 Gdybyśmy tego nie zrobili to podczas uruchomienia naszego programu zostałby zgłoszony błąd
 
 A co w przypadku gdy mamy funkcję której jeden z argumentów podczas wywołania praktycznie jest taki sam?
 W takiej sytuacji możemy sie posłużyć tak zwaną wartością domyślną dla argumentu.
*/

// function sayHello($name, $language = 'en') 
// {
//   var_dump($language);
//   if ($language === 'en') {
//       echo "Hello $name\n";
//   } else if ($language === 'pl') {
//       echo "Witaj $name\n";
//   } else {
//       echo "Unsupported language";
//   }
// }

/*
 Dzięki użyciu wartości domyślnej wywołanie funkcji może mieć skróconą postać. 
*/

// sayHello('Tom');
// sayHello('Tom', 'en');
// sayHello('Tom', 'pl');
// sayHello('Tom', 'de');

/*
 Jeśli chcemy wywołać funkcję z inną wartością argumentu niż wartość domyślna to po prostu ją podajemy.

 Oczywiście argumentów z wartościami domyślnymi może być więcej niż jeden, 
 równie dobrze wszystkie argumenty funkcji mogą mieć wartości domyślne,
 wtedy wywołanie funkcji mogłoby wyglądać jak wywołanie funkcji bezargumentowej
*/

// function testDefault($arg1 = 'foo', $arg2 = 'bar')
// {
//     // do something
//     var_dump($arg1);
//     var_dump($arg2);
// }

// testDefault(); // OK
// testDefault('new foo'); // OK
// testDefault('new foo', 'new bar'); // OK
// testDefault(, 'new bar'); // ERROR

/*
 Dla argumentów z domyślnymi wartościami obowiązuje jedna zasada.
 Mianowicie podajemy je od końca.
 To znaczy, ze jeśli tworzymy funkcję to argumenty które posiadają wartości domyślne 
 muszą się znajdować na końcu listy z argumentami.
 
 Niedopuszczalna jest sytuacja gdy argumenty z wartościami domyślnymi znajdują się na początku
 listy argumentów, lub są z nimi przemieszane.
 W takim przypadku kompilator nie będzie wstanie rozpoznać tych wartości i zgłosi błąd
*/
 
// function testDefault($arg1 = 'foo', $arg2) 
// { 
//     // źle
// }
 
// function testDefault($arg1, $arg2 = 'foo', $arg3) 
// { 
//     // źle
//     //echo 'dziala';
// }

// testDefault('bar');

/*
 TYPOWANIE ARGUMENTÓW
 
 Na sam koniec rozmówek o argumentach zostawiłem bardzo waną rzecz.
 Mianowicie typowanie argumentów.
 
 Zanim jednak omówimy jak to wygląda w połączeniu z argumentami powiem parę słów wstępu
*/

/*
 Powoli język PHP z typowania dynamicznego (czyli przypisania typów zmiennych w trakcie działania programu) przechodzi do typowana statycznego. Jednak w tej chwili znajduje się trochę w rozkroku pomiędzy jednym a drugim.
 Poniżej zaraz powiemy dlaczego.
 
 Jednak co to jest to typowanie i jego rodzaje.
 
 Na samy początku naszego kursu mówiliśmy sobie o typach danych które istnieją w php i mona je przypisać do zmiennej.
 Dla przypomnienia wymienimy je jeszcze raz:
 
 integer - liczba całkowita
 float - liczba rzeczywista/zmiennoprzecinkowa
 string - łańcuch znaków
 boolean - prawda lub fałsz true/false
 array - tablice
 object - obiekt
 null - wartość niezdefiniowana, pojawia się wtedy gdy zmiennej nie przypiszemy żadnej wartości
 resource - uchwyt do zasobu zewnętrznego 
 
 Skoro przypomnieliśmy sobie jakie mamy typy danych możemy juz przejść do samego typowania
 Zaczniemy od typowania dynamicznego, które jest w PHP od samego początku.
 
 Dzięki typowaniu dynamicznemu nie musimy podczas tworzenia zmiennej określać jej typu.
 Przykładowo:
*/

//$foo = 1;
//$bar = 'text';

/*
 Dopiero w trakcie działania programu, dla zmiennej określany jest typ na podstawie wartości którą do niej przypisujemy
*/

// $zaz;
// if (rand(0, 1)) {
//     $zaz = 'some text';
// } else {
//     $zaz = 34;
// }


/*
 Funkcja rand w naszym przypadku losuje liczbę zero lub jeden.
 Kompilator nie wie, co będzie przechowywane w zmiennej $zaz, 
 Dopiero po sprawdzaniu warunku jest do zmiennej przypisywana konkretna wartość.
 W trakcie przypisywania wartości jest określany typ zmiennej.
 
 Idąc dalej, w każdej chwili możemy zmienić typ wartości przechowywanej w zmiennej poprzez 
 zmianę samej wartości;
*/

//  $foo = 'some text';
//  $foo = 2223;

/*
 Nowa wartość przypisywana do zmiennej posiada zupełnie inny typ niz poprzednia wartość
 co wymusza również zmianę typu zmiennej.
 
 Innym przykładem języka typowanej dynamicznie jest JavaScript
 
 Typowanie dynamiczne ma kilka zalet, przede wszystkim ułatwia pracę ze zmiennymi.
 Programista nie musi sobie zaprzątać głowy określaniem typu zmiennej. 
 PHP zrobi to za nas.
*/

/*
 No dobrze, powiedzieliśmy sobie co to jest typowanie dynamiczne,
 ale o co chodzi z typowaniem statycznym??
*/

/*
 Na samym początku napiszę, ze PHP nie implementuje w pełni typowania statycznego.
 W tej chwili (wersja 7.4 możemy typować właściwości obiektów - jednak o tym pomówimy w rozdziale dotyczącym obiektów)
 
 Jednak na poczet wytłumaczenia samego typowania statycznego załóżmy, ze mogło by to wyglądać następująco:
 
 int $foo = 1;
 string $bar = 'text';
 
 Różnica w stosunku do wersji dynamicznej jest dodanie informacji o przechowywanym typie przed nazwą zmiennej.
 
 W takim przypadku niemożliwa staje się sytuacja zmiany typu przechowywanej wartości:
 
 int $foo = 44;
 $foo = 'some text';
 
 W takim przypadku zgłoszony zostanie błąd.
 Niemożliwe będzie teź wykonanie:
 

/* 
    int $zaz;
    if (rand(0, 1)) {
        $zaz = 'some text';
    } else {
        $zaz = 34;
    }
**/

/*
 Ponieważ kompilator musi wiedzieć jakiego typu będzie przechowywana wartość w zmiennej jeszcze przed operacją przypisania
*/
/*
    int $zaz; 
    if (rand(0, 1)) {
        $zaz = 2;
    } else {
        $zaz = 34;
    }
*/

/*
 Teraz możemy sobie pomyśleć:
 Jakie jest sens w typowaniu statycznym, skoro widzimy ze tego nie możemy, tamtego nie możemy, musimy jeszcze zrobić to i to.
 Zalet jest kilka:
 - bardziej panujemy nad tym co się dzieje w naszej aplikacji
 - typowanie statyczne przyczynia się do polepszenia wydajności samej aplikacji
 - dzięki typowaniu statycznego łatwiej poznajemy jak działa nasza aplikacja
 
 Zalety typowania statycznego dostrzega się tak naprawdę z czasem, 
 Im bardziej doświadczeni jesteśmy, tym lepiej uświadamiamy sobie jakie korzyści to daje.
 
 Dobrą analogią jest sam JavaScript, o którym juz wcześniej wspomniałem.
 Z natury jest to język typowany dynamicznie.
 Jednak kilka lat temu pojawił się TypeScript, o którym można powiedzieć ze to JS na sterydach.
 W TypeScripcie juz występuje typowanie statyczne, chociaż tez go moża używać jak klasycznego JS'a
*/





/*
 Ok, ale jak to jest z tym typowaniem w PHP, hmmm ... w tej chwili jest tendencja podążania w kierunku typowania statycznego.
 Z każdą nową wersją począwszy juz tak naprawdę od 5.0 systematycznie dodawane są nowe opcje z tym związane. W trakcie tego kursu krok po kroku dowiecie się jak to wygląda w PHP
*/

/*
 Od wersji 7.0 możemy określać typy argumentów które chcemy przekazać do funkcji.
 Wprawdzie od wersji 5.0, była możliwość już określania obiektów i interfejsów o czym już powiemy w następnej lekcji. Jednak pełne wsparcie pojawiło się od wersji 7.0
 
 Określenie typu uzyskujemy poprzez dodanie nazwy typu przed nazwą argumentu w deklaracji funkcji
*/

// function sayHello(string $name)
// {
//     var_dump($name);
//     echo "Hello $name\n";
// }

/*
 Teraz widzimy, że twórca funkcji założył, przy jej wywoływaniu przekazany argument musi być stringiem
*/

// działa
//sayHello('Tom');

// co w przypadku gdy przekażemy liczbę całkowitą?
// $intValue = 100;
// var_dump($intValue);
// sayHello($intValue);
// niespodzianka - również działą
// a tablicę 
//sayHello(['foo']);




/*
 Myślimy sobie kurcze, co się dzieje, przecież określiliśmy, że chcemy przyjmować tylko stringa,
 a tu nagle przekazując integera również działą. WTF???
 
 UWAGA, to co teraz powiem jest istotną rzeczą która została wprowadzona w php 7.0.
 Od wersji 7.0 PHP może pracować w jednym z dwóch trybów:
 - coercive - trym domyślny, dopuszczający rzutowanie
 - strict - ścisły, który nie dopuszcza rzutowania
 
 Co to tak naprawdę znaczy.
 W trybie domyślnym, w którym przed chwilą uruchamialiśmy funkcją sayHello określenie typu jest wskazówką 
 dla PHP mówiącą na jaki typ musi zmienić wartość przekazaną do funkcji.
 
 Zmodyfikujmy odrobinę naszą funkcję i przeanalizujmy ją jeszcze raz.
*/

// function sayHello(string $name)
// {
//     var_dump($name);
//     echo "Hello $name\n";
// }

//sayHello('Tom');
// // w tym przypadku przekazujemy stringa, więc konwersja nie zachodzi

// $intValue = 100;
// var_dump($intValue);
// sayHello($intValue);
/*
 tutaj widzimy, że przekazujemy int'a a wewnątrz funkcji widzimy że jest string
 zaszła konwersja z typu int na typ string, to miałem na myśli mówiąc, że podając typ argumentu mówimy PHP'owi na jaki typ ma skonwertować (rzutować) zmienną w trakcie przyjmowania przez co wewnątrz funkcji będzie już innym typem.
 
 Pamiętamy, że gdy przekazujemy wartość do funkcji to tak naprawdę wewnątrz funkcji powstaje
 kopia przekazanej wartości?
 Przez co tak naprawdę nie zmieniamy typu przekazanej zmiennej, tylko tworzymy kopię z nowym typem.
 
 A co się dzieje w tym przypadku:
/ 
*/
//sayHello('foo');

/*
 PHP wyświetlił nam informację o błędzie, dlaczego?
 Powodem jest fakt, że nie jest w stanie dokonać konwersji tablicy na wartość tekstową. 
 W przypadkach gdy PHP automatycznie nie będzie w stanie dokonać konwersji to zawsze zwróci błąd.
 
 Trym domyślny czasami bywa zdradliwy i trzeba na niego uważać, przykładowo
*/

// function showNumber(int $number) {
//    var_dump($number);
// }

// $intNumber = 23;
// $floatNumber = 34.32;

//var_dump($intNumber);
//showNumber($intNumber);

// var_dump($floatNumber);
// showNumber($floatNumber);

/*
 Jeśli do funkcji przekazujemy wartość int jak zadeklarowaliśmy przy argumencie to wszystko jest ok.
 Problem pojawia się gdy przekazaliśmy wartość typu float.
 PHP potrafi automatycznie przekonwertować typ float na int, ale jak widzimy wyświetlona wartość,
 nie jest do końca tą którą przekazaliśmy do funkcji. Obcięta została część po przecinku.
 Nie ma tutaj co narzekać na sam język, ponieważ to zadziałał prawidłowo. 
 
 Przecież zadeklarowaliśmy, że argument ma być typu int, tak więc zaszła konwersja.
 Skoro konwertujemy typ o dużej dokładności czyli float na tym o mniejszej dokładności czyli int
 to oczywistym się staje, że stracimy pewną dokładność. 
 
 Podsumowując, ważne jest aby zdawać sobie sprawę z tego co już powiedzieliśmy i jeśli chcemy pracować
 w trybie domyślny to należy być ostrożnym.
*/

/*
 Teraz już możemy przejść do trybu ścisłego.
 
 Aby włączyć tryb ścisły (strict) należy na początku pliku dodać linię:
 declare(strict_types=1);
 
 Włączenie trybu strict musi się znaleźć zaraz na początku pliku, zaraz po tagu otwierającym, czyli <?php
 Pomiędzy włączeniem a tagiem otwierającym mogą się znaleźć tylko białe znaki (spacja, enter) i komentarze.
 
 Tryb strict obowiązuje tylko dla pliku, w którym został włączony, tak więc jeśli chcemy aby był włączony
 w całym naszym projekcie, musimy go włączyć w każdym pliku .php który znajduje się w projekcie.
 Dzieje się tak z powodu kompatybilności wstecznej. Gdyby trybem domyślnym PHP był tryb ścisły to zapewne
 po aktualizacji PHP z wersji 5.x na 7.x pół internetu przestało by działać. 
 Natomiast jeśli go używamy to włączamy go świadomie i jesteśmy przekonani, że nasz kod działa poprawnie
 w trybie ścisłym.
 
 No dobrze, ale co to jest ten tryb ścisły.
 Wróćmy do przykładu
*/

// function sayHello(string $name)
// {
//     var_dump($name);
//     echo "Hello $name\n";
// }

//sayHello('Tom');
// // w tym przypadku przekazujemy stringa, więc jest ok

//$intValue = 100;
//var_dump($intValue);
//sayHello($intValue);

// function test(float $number)
// {
//     var_dump($number);
// }

// $intValue = 2;
// var_dump($intValue);
// test($intValue);

/*
 Już widzimy co się stało.
 Tryb ścisły nie dopuszcza konwersji.
 
 Określając typ argumentu mówimy PHP'owi
 Funkcja przyjmuje argument tego i tylko tego typu, nie pozwalaj na jakąkolwiek konwersję.
 
 UWAGA:
 Od tej reguły jest jeden malutki wyjątek.
 Mianowicie wtedy gdy przekazujemy wartość całkowitą (integer) a w definicji funkcji określiliśmy, 
 że będziemy używać wartości zmiennoprzecinkowej (float). 
 Tutaj język idzie nam na rękę, ponieważ nie tracimy nic jeśli chodzi o precyzję obliczeń. 
 Rzutowanie liczby całkowitej na zmiennoprzecinkową nie powoduje utraty jakichkolwiek danych.
 
 Gdy pracujemy nad nowym projektem to tryb ścisły generalnie jest zalecany.
 Jednak to wszystko zależy od projektu i zespołu z którym w przyszłości przyjdzie nam pracować.
 Ja na podstawie własnych doświadczeń polecam rozpoczęcie przygody z trybem ścisłym od samego początku,
 aby wyrobić sobie dobre nawyki.
*/

 /*
 W wersji PHP 7.1 dostaliśmy możliwość określenia, że dany argument może przyjmować wartość null.
 A dokładniej wartość null lub wartość innego zdefiniowanego typu
 Aby to zrobić posłujemy się znakiem zapytania "?"
*/

// function sayHello(?string $name = null)
// {
//     if ($name !== null) {
//         echo "Name: $name \n";
//     } else {
//         echo "Hello !!!\n";
//     }
// }

// sayHello('Tom');
// sayHello(null);
// sayHello();

/*
 Na koniec części o argumentach wymienimy jeszcze listę typów które możemy użyć dla argumentów podczas
 definiowania funkcji, wraz z wersją PHP w której zostały wprowadzone:
 
 Te o których już wspominaliśmy:
 array - 5.1
 bool - 7.0
 float - 7.0
 int - 7.0
 string - 7.0
 ?int - 7.1
 
 Te o których będziemy mówić już niedługo:
 class/interface - 5.0
 self - 5.0
 callable - 5.4
 iterable - 7.1
 object - 7.2
*/





/*
 WARTOŚCI ZWRACANE
 
 Każda funkcja MOŻE ale nie musi zwracać jakieś dane.
 Co to znaczy?
 
 Pamiętacie jak opowiadaliśmy sobie o zakresach widoczności zmiennych i o tym że zmienne
 zadeklarowane wewnątrz funkcji nie są widoczne poza tą funkcją?
 
 Zwracana wartość powoduje to, że z wnętrza funkcji możemy coś przekazać na zewnątrz.
 
 Osiągamy to przy użyciu słowa kluczowego "return"
*/

// function countLetters(string $word)
// {
//     $count = strlen($word);
//     return $count;
// }

// function countLetters(string $word)
// {
//     return strlen($word);
// }

/*
 Drugi zapis jest bardziej zwięzły, ale działa dokładnie tak samo
 
 Instrukcja "return" oprócz tego, że zwraca wartość na zewnątrz funkcji 
 to również przerywa działanie funkcji, przez co cokolwiek co by się znalazło 
 poniżej instrukcji return nie zostanie wykonane,
 tak jak w przykładzie:
*/

// function countLetters(string $word)
// {
//     var_dump('before return');
//     return strlen($word);
//     var_dump('after return');
// }


/*
 Ok, funkcja nam coś zwraca, ale jak my możemy to wykorzystać. 
 Tutaj mamy kilka opcji.
*/

// function countLetters(string $word)
// {
//     return strlen($word);
// }

// // zignorować, ponieważ nas nie interesuje
// countLetters('bar');

// przypisać do zmiennej
// $count = countLetters('bar bar');
// echo $count;

// od razu użyć:
//var_dump(countLetters('bar'));

// użyć w wyrażeniu:
// if (countLetters('bar') > 10) {
//     // do something
// }

// itp
/*
 Generalnie, zwracaną wartość traktujemy jak każdą inną wartość, którą możemy gdzieś przypisać i użyć
*/

/*
 Wraz z wersją PHP 7.0 uzyskaliśmy możliwość definiowania typu zwracanej wartości przy definiowaniu funkcji.
 Mechanizm działą analogicznie jak typowanie argumentów funkcji, łącznie z obsługą trybu domyślnego i ścisłego
 to znaczy sytuacji czy konwersja typów jest dozwolona czy nie jest
 
 Określenie typ wartości zwracanej wygląda następująco
*/

// function countLetters(string $word): int
// {
//     return strlen($word);
// }

/*
 Zaraz za listą argumentów po znaku "dwukropka" wpisujemy typ wartości którą funkcja będzie zwracać.
 
 Podobnie jak z argumentami dobrą praktyką jest określanie zwracanego typu.
 
 W przypadku gdy nasz funkcja nie będzie nic zwracać do podkreślenia tego faktu używamy słowa kluczowego "void"
 Wprowadzone w PHP 7.1
 
 Jeśli jednak mimo użycia "void" coż zwrócimy to zostanie nam wyświetlony stosowny błąd
*/

// function sayHello(string $name): void
// {
//     echo $name. "\n";
// }

/*
 Przy zwracanym typie również możemy użyć konstrukcji ze znakiem zapytania,
 która poinformuje nas, że dana funkcja może zwrócić wartość null bądź wartość zadeklarowanego typu
*/

// function returnSomething(int $number): ?int
// {
//     if ($number > 0) {
//         return $number;
//     } else {
//         return null;
//     }
// }



/*
 FUNKCJE ANONIMOWE
 
 Dla osób, które miały styczność z JavaScriptem funkcje anonimowe wyglądają znajomo i nie mylą się.
 
 Funkcja anonimowa jest to funkcja bez nazwy.
*/
/*
    function (argumenst): returnType
    {
        // ciało funkcji
    }
*/
/*
 Hmm ... wygląda trochę dziwnie?
 Może, ale tylko na początku.
*/

// function (string $name): void
// {
//     echo "Name: $name\n";
// };

/*
 W powyższym przykładnie nasza funkcja jest bezużyteczna, ponieważ nie jesteśmy w stanie jej użyć. 
 Co ciekawe funkcję anonimową możemy potraktować jak wartość i przypisać ją do zmiennej
*/

$myFunction = function (string $name): void
{
    echo "Name: $name\n";
};

/*
 W tej chwili jesteśmy już za pomocną nazwy zmiennej wywołać taką funkcję
*/

// function myCall(string $name, callable $func): void
// {
//     $func($name);
// }

// $myFunction = function(string $name): void {
//     echo "$name\n";
// };

// myCall("TOM", $myFunction);

/*
 Wcześniej wspominaliśmy o typie "callable" który może użyć do typowania argumentów lub zwracanych wartości. Funkcja anonimowa spełnia to wymaganie, możemy ją przekazać jako argument jak i zwrócić. 
 
 Kwestia funkcji anonimowych w PHP dotyka już trochę bardziej zaawansowanych rzeczy, tak więc nie będziemy teraz dalej kontynułować tego tematu. Powrócimy do niego w następnym kursie, który dotknie już bardziej zaawansowanych rzeczy.
 W tej chwili istotne jest to aby zdawać sobie sprawę żę w PHP też istnieją funkcje anonimowe.
 
 BONUS DLA JS'OWCÓW => funkcje strzałkowe też istnieją :) od 7.4
*/
// function ($value) 
// {
//     return $value * 2;
// }

//$myFunction = fn(int $value): int => $value * 2;

// $users = [
//     'Robert', 'Martin', 'John'
// ];

// $hello = array_map(
//     fn($value) => "Hello ".$value,
//     $users
// );

// print_r($users);
// print_r($hello);

/*
 Na zakończenie rozdziału o funkcjach wspomnę, że sam język PHP posiada już ogromną listę zdefiniwanych już funkcji, 
 które możemy w każdej chwili użyć. Spójrzmy chociaż na listę funkcji powiozanych z obsługą stringów
 @link https://www.php.net/manual/en/ref.strings.php
 Znajdziemy również na niej funkcję którą już użyliśmy czyli "strlen" zwracającą ilość znaków w stringu.
 
 Polecam przeglądnięcie dokumentacji, jednak nie polecam uczenia się jej na pamięć. 
 No chyba że ktoś lubi takie wyzwania :D
*/
