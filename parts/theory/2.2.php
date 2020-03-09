<?php

// Struktury kontrole

/*
 SWITCH

 Możemy powiedzieć że 'switch' to taki zaawansowany if

 Konstrukcja swicht'a wygląda następująco
 */
/*
    switch (sprawdzanaWartosc) {
        case 'foo':
            // blok kodu do wykonania gdy sprawdzanaWartosc wynosi 'foo'
            break;
        case 'bar':
            // blok kodu do wykonania gdy sprawdzanaWartosc wynosi 'bar'
            break;
        case 'zaz':
            // blok kodu do wykonania gdy sprawdzanaWartosc wynosi 'zaz'
            break;
        default:
            // domyślny kod bloku do wykonania gdy sprawdzanaWartosc nie zostanie dopasowana do powyższych
            // przypadków, czyli nie wynosi 'foo', 'bar' i 'zaz'
            break;
    }

    sprawdzanaWartość - jest to wartość, którą chcemy badać, na podstawie której będziemy podejmować decyzję jaki
        kod należy wykonać

    case 'foo': - tutaj określamy jakiej wartości oczekujemy (może być dowolnego typu skalarnego), jeśli
        sprawdzanaWartości przyjmuje wartość 'foo' to wykona się kod który zdefiniowaliśmy poniżej 'case'.
        Kod do wykonania możne mieć dowolną ilość lini
*/
/*
 Jeśli to samo chcielibyśmy zapisać używając if'a otrzymalibyśmy coś takiego:
 */

$value = 'lorem ipsum ...';
if ($value === 'foo') {
    // ...
} else if ($value === 'bar') {
    // ...
} else if ($value === 'zaz') {
    // ...
} else {
    // ...
}

/*
 Można - jak najbardziej można, jednak konstukcja jest nieczytelna i zagmatwana.
 Dla porównania:
 */

// $value = 'bar';
// switch ($value) {
//     case 'foo':
//         echo 'value ma wartość: foo';
//         break;
//     case 'bar':
//         echo 'value ma wartość: bar';
//         break;
//     case 'zaz':
//         echo 'value ma wartość: zaz';
//         break;
//     default:
//         echo 'value ma inną wartość niż: foo, bar, zaz - hmm ... ciekawe jaką??';
//         break;
// }

/*
 W wyniku działania kodu zostanie wyświetlona informacja
 'value ma wartość: bar'
 Przeanalizujmy krok po kroku jak to zadziałało.

 W zmiennej $value przechowujemy wartość 'bar'
 W instrukcji switch chcemy na podstawie tego co przechowuje zmienna $value wykonać odpowiedni kod.
 W związku z tym sprawdzamy:
 - czy wartość zmiennej $value to 'foo' - nie przechodzimy do następnego 'case'
 - czy wartość zmiennej $value to 'bar' - tak wykonujemy kod a następnie opuszczamy konstrukcję switch i przechodzimy do dalszej części kodu

 Nie wspomnieliśmy jeszcze o tym do czego służy słowo kluczowe 'break' i czy jest w ogóle istotne.
 Otóż jest i to bardzo istotne.
 Jak myślicie co by się stało gdybyśmy nasz przykłąd zapisali w sposób:
 */

// $value = 'bar';
// switch ($value) {
//     case 'foo':
//         echo 'value ma wartość: foo';
//     case 'bar':
//         echo 'value ma wartość: bar';
//     case 'zaz':
//         echo 'value ma wartość: zaz';
//     default:
//         echo 'value ma inną wartość niż: foo, bar, zaz - hmm ... ciekawe jaką??';
}

/*
 Wygląda jeszcze bardzię zwięźle, jedna jego działanie różnie się diametralnie.
 Rezultatem który otrzymany będzie wyświetlenie:
 */

/*
    value ma wartość: bar
    value ma wartość: zaz
    value ma inną wartość niż: foo, bar, zaz - hmm ... ciekawe jaką??
*/

/*
 Dlaczego tak się stało?
 Przeanalizujmy przykład na spokojnie.
 W zmiennej $value przechowujemy wartość 'bar'
 W instrukcji switch chcemy na podstawie tego co przechowuje zmienna $value wykonać odpowiedni kod.
 W związku z tym sprawdzamy:
 - czy wartość zmiennej $value to 'foo' - nie przechodzimy do następnego 'case'
 - czy wartość zmiennej $value to 'bar' - tak wykonujemy kod
 - w związku z tym, że nie ma instrukcji 'break' (przerwij) wykonujemy też kod w pozostałych 'case', mimo że
 wartość $value jest inna, wykona się też sekcja domyślna (default)

 Może wydawać się to jako błąd jednak tak nie jest. Czasami taka sytuacja jest nawet użyteczna.
 Posłużmy się trochę inaczej zdefiniowanym przykładem
 */

// $city = 'Warszawa';
// switch ($value) {
//     case 'Berlin':
//     case 'Hamburg':
//         $country = 'Niemcy';
//         break;
//     case 'Kraków':
//     case 'Warszawa':
//     case 'Katowice':
//         $country = 'Polska';
//         break;
//     case 'Moskwa':
//         $country = 'Rosja';
//         break;
//     default:
//         $country = 'Nie rozpoznano';
//         break;
// }
// echo $country;

/*
 Zgrupowaliśmy sobie instrukcje 'case' aby rozpoznać krak w którym znajduje się konkretne miasto.
 Widzimy, że w tym przypadku pozbycie się w niektórych miejscach instrukcji break jest przydatne.
 W naszym przypadku rozpoznamy że Warszawa leży w Polsce, w kolejnej lini jest break,
 który mówi aby wyjść ze switcha, związku z tym kod poniżej tego konkretnego 'break' nie będzie już
 nawet analizowany.
 */
