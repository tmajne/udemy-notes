<?php

// Operatory

/*
 Kolejnym przystankiem na drodze ku poznaniu PHP będą operatory.
 Poznaliśmy już czym są zmienne, naturalnym krotiem w przód jest poznanie operatorów.
 Dzięki operatorom jesteśmy w stanie wykonać operacje na zmiennych (liczbach, stringach, itp)
 
 Operatory dzielimy na parę rodzajów, ich lista jest bardzo długa.
 Teraz skupimy się na tych najważniejszych i najczęściej używanych
 
 @link https://www.php.net/manual/en/language.operators.php
*/


/*
 Operatory przypisania - wstęp

 Zaczniemy od operatora, który już wcześniej używaliśmy ale go nigdy nie nazwaliśmy. Mianowicie od operatora
 przypisania. Reprezentuje go znak równości "="
 Poniższe działanie czytam od prawej strony do lewej.
 String 'bar' zostaje przypisany do zmiennej $foo
*/
$foo = 'bar';

/*
 Operator przypisania może być użyty wielokrotnie w jednej lini kod i w tym przypadku działanie również czytamy od
 prawej strony do lewej, czyli:
 string 'lorem' zostaje przypisany do zmiennej $lorem a następnie wartość które znajduje się pod zmienną
 $lorem zostaje przypisane do zmiennej $foo
 Finalnie zmienna $lorem i zmienna $foo zawierają tą samą wartość.
 
 Warto zwrócić uwagę na fakt że modyfikująć dale zmienną $foo modyfikujemy tylko wartośc przypisaną do niej.
 Wartość przypisana do zmiennej $lorem zostaje nie zmieniona.
*/

$foo = $lorem = 'lorem';
var_dump($foo);
var_dump($lorem);

$foo = 'new string';
var_dump($foo);
var_dump($lorem);

/*
 Operatory arytmetyczne
 
 Podstawową grupą operatorów są operatory arytmetycznie, w sklad której wchodzą:
 - dodawanie: +
 - odejmowanie: -
 - mnożenie: *
 - dzielenie: /
 - modulo: %
 - potęgowanie: **
*/
 
/*
 dodawanie
 
 Dodawać do siebie możemy dwie wartości i finalnie rezultat działania przypisujemy z pomocą operatora przypisania do
 zmiennej $result
 
 Możemy również dodawać do siebie dwie (lub więcej) zmienne, a dokładniej rzecz ujmując wartości które znajdują się
 w tych zmiennych
 
 Wyniku operacji nie musimy przypisywać do żadnej zmiennej, możemy go od razu wyświetlić.
 
 W przykładach głównie posługujemy się liczbami całkowitymi (integer), jednak nic nie stoi na przeszkodzie
 aby operacje również wykonywać na liczbach zmiennoprzecinkowych (double)
*/

// $result = 4 + 5;
// var_dump($result);

// $priceOne = 3;
// $priceTwo = 11;
// $total = $priceOne + $priceTwo;
// var_dump($total);

// echo 9 + 5;

// $count = 3.2 + 11;

/* Odejmowanie */
// echo 45 - 100;

/*
 Mnożenie
 *
 W przykładnie widzimy kolejną kombinację którą możemy stosować.
 */
// $count = 2;
// echo 4 $count;

/* Dzielenie */
// echo 50 / 5;

/* Modulo - reszta z dzielenia */
// echo 14 / 10;

/* Potęgowanie */
// echo 2**4;

/*
 UWAGA - wszystkie działana możemy łączyć ze sobą i dotyczą nas te same zasady co w klasycznej matematyce,
 czyli kolejność wykonywania działań. Jeśli chemy wymusić aby któraś część działań wykonała się szybciej
 to musimy użyć nawiasów.
 */
// echo 2 + 2 2;
// echo (2 + 2) 2;


/*
 Operatory przypisania - ciąg dalszy
 
 Znając już operatory arytmetycznie możemy kontynułować naszą przygodę z operatorami przypisania.
 Mogłoby się wydawać, że użycie znaku równości wyczerpuje temat, jedna nie jest do prawda.
 PHP wprowadza parę udogodniej i uproszczonych zapisów powiązanych z operatorami przypisania i arytmetycznymi
*/

/*
 Jeśli chcemy zwiększyć wartość istniejącej zmiennej to zamiast używać standardowego zapisu
 możemy się posłużyć skróconym zapisem.
 Należy go czytać w następujący sposób:
 weź wartość która znajduje się w zmiennej po lewej stronie operatora (+=)
 a następnie do tej wartości dodaj wartość znajdującą się po lewej stronie operatora
 na sam koniec wynik działania przypisz do zmiennej znajdującej sie po prawej stronie operatora

 TODO: powtórzyć tłumaczenie na rzeczywistym przykładnie poniżej posługując się nazwami zmiennch
*/

// $count = 10;
// $count += 5;
// echo $count;

/*
 Analogicznie działają operatory:
 -=
 *=
 /=
 %=
 **=
*/


/*
 Operator konkatenacji (lączenie stringów)
 
 Czasami zdarza się, że z dwóch stringów (ciągów znaków) chcemy utworzyć jeden.
 Do tego celu używamy operatora konkatenacji czyli "."
 Być może nazwa brzmi "strasznie" jednak w praktyce to bardzo prosta operacja.
 
 Należy zauważyć, że łączenie stringów następuję bezpośrednio, czyli do końca stringu znajdującego się po lewej
 stronie operatora doklejany jest string znajdujący się po jego prawej stronie. Tak więc jeśli chcemy
 dodać odstęp (spację) to musimy jeszcze takową dodać samodzielnie, tak jak w poniższym przykładnie
*/

// $firstName = "Jan";
// $lastName = "Kowalski";
// $fullName = $firstName . " " . $lastName;
// var_dump($fullName);

/*
 Możemy również w ramach potrzeb użyć konkatenacji od razu połączonej z przypisaniem.
 */

// $php = 'PHP';
// $php .= '7.4';
// var_dump($php);



/*
 Operatory pre/post inkrementacji i dekrementacji
 
 Są to bardzo ciekawe operatory i w przyszłości będziemy się z nimi stykać głównie przy wszelkiego rodzaju
 pętlach, jednak ich zastosowanie nie ogranicza się tylko do nich
 
 postinkrementacja
 Operatorem jest podwójany znak + doklejny do zmiennej po jej prawej stronie.
 Co tak naprawdę się dzieje w poniższy przykładnie.
 - inicjujemy zmienną
 - używamy operatora postinkrementacji oraz wyświetlamy wartość zmiennej
 - wyświetlamy ponownie wartość zmiennej.
 
 Jak działą operator? (najlepiej wytłumaczyć to w kolejnych krokach)
 - weź wartość która znajduje się w zmiennej
 - zwróć tą wartość
 - zwiększ wartość o 1
 - przypisz ponowe nową wartość (zwiększoną o 1) do zmiennej
 
 Czyli najpierw jest odczytywana wartość zmiennej a dopiero po jej odczytaniu jest zwiększana
*/

// $age = 11;
// echo $age++;
// echo $age;

/*
 Możemy się już domyślić jak działa preinkrementacja, ale czy do końca?

 Kolejne kroki:
 - weź wartość któa znajduje się w zmiennej
 - zwiększ wartość o 1
 - przypisz ponowe nową wartość (zwiększoną o 1) do zmiennej

 Jak sama nazwa wskazuje, czyli przedrostek "pre" zwiększenie wartości następuje na wcześniejszym etapie.
 Wartość zmiennej jest zwracana już po zwiększeniu wartości
*/

// $age = 11;
// echo ++$age;
// echo $age;

/*
 Analogicznie działą pre/post dekrementacja
 --$age
 $age--
 */


/*
 Operatory porównania

 Jeśli chcemy porównać dwie wartości należy użyć operatora porównania.
 Najczęszcze zastosowania mają w strukturach sterujących które niebawem poznamy, jednak to nie wyczerpuje
 możliwości ich potencjalnego zastosowania
*/

/*
 Operatory sprawdzające czy wartoście po jego obu stronach (operandy) są takie same:
 ==
 ===
 Pomiędzy nimi jest jedna znacząca różnica.
 Używając podwójnego znaku równa się sprawdzamy czy wartość znajdująca sie po lewej stronie jest równa wartości
 znajdującej się po prawej stronie.
 
 Używając potrójnego znaku równosci sprawdzamy czy wartości po obu stronach są takie same oraz czy typy
 sprawdzanych danych również się zgadzają..
*/

// var_dump('foo' == 'bar');
// var_dump(9 == '9');
// var_dump(9 === '9');
// var_dump(3 === 1);

/*
 Operatory sprawdzające czy sprawdzane wartości są inny.
 !=
 !==

 Tutaj mamy analogiczną sytaucje jak przy operatórach równości, dodatkowy znaków równa informuje o tym,
 że będziemy sprawdzać również typ a nie samą wartość
*/

// var_dump('foo' != 'bar');
// var_dump(9 != '9');
// var_dump(9 !== '9');
// var_dump(3 !== 1);


/*
 Kolejne operatory sprawdzają następujące rzecy:
  > - większe
  >= - większe lub równe
  < - mniejsze
  <= - mniejsze lub równe
*/

// var_dump(32 > 2); // true
// var_dump(2 > 85); // false
// var_dump(43 >= '300');
// var_dump(93 >= '93');
// var_dump(32 < 2);
// var_dump(2 < 85);
// var_dump(43 <= '300');
// var_dump(93 <= '93');


/*
 <=> - space ship
 Ciekawym operatorem jest "space ship", tłumaczenie nazwy tego operatora będzie cokolwiek śmieszne.
 Genezą stojącą za nazwą jest wygląda samego operatora, który przywodzi na myśl Tie Fightera z Gwiezdnych Wojen.
 Operator ten jak każdy operator porównania porównuje dwie wartości i w zależności od nich może zwrócić:
  - 0 - gdy obie wartości są równe
  - -1 - gdy lewa wartość jest mniejsza od prawej
  - 1 - gdy prawa wartość jest mniejsza od lewej
 Głównym zastosowanie tego operatora są funkcje sortujące o których zapewne wspomnimy w dalszej części kursu
*/

// var_dump(92 <=> 92);
// var_dump(10 <=> 92);
// var_dump(92 <=> 2);
// var_dump('foo' <=> 'bar');

/*
 Istotnymi operatorami są również operatory logiczne.
 Jednak w tej chwili je pominiemy i szerzej je omówimy w części dotyczącej struktur sterujących
 */