<?php

/*
 Omówiliśmy już wszystkie pętle.
 Trzeba jeszcze jednak wspomnieć o jednej a raczej dwóch rzeczach/instrukcjach
 wspólnych dla każdego rodzaju pętli.
 
 Mianowice o instrukcji:
 - break
 - continue
 
 Break - przerywa działanie pętli
 Continue - przerywa działanie danej iteracji i powoduje automatyczne przejście do kolejnej
 pod warunkiem że wyrażenie które jest sprawdzane będzie prawdziwe.
 
 Najlepiej zobrazować to przykładem.
 Załóżmy, że tym razem jesteśmy klientem sklepu.
 Posiadamy pewne środki w portfelu, jak również wypełniony koszyk.
 */

$wallet = 1000;
$cart = [
    ['item' => 'myszka', 'price' => 100],
    ['item' => 'papier do drukarki', 'price' => 10],
    ['item' => 'klawiatura', 'price' => 200],
    ['item' => 'laptop', 'price' => 5000],
    ['item' => 'DOOM', 'price' => 159],
];

/*
 W celu przetestowania instrukcji break
 przyjmijmy założenie że jeśli podczas składania zamówienia przekroczymy kwotę, 
 którą mamy w portfelu nie kontynuujemy dalej procesu składania zamówienia.
 W tym celu posłużymy się pętlą FOREACH
 */

// $cartValue = 0;
// foreach ($cart as $item) {
//     $cartValue += $item['price'];
//     if ($cartValue > $wallet) {
//         echo 'Przekroczyłeś kwotę którą dysponujesz';
//         break;
//     }
// }

/*
 Tworzymy zmienną w której będziemy przechowywać wartość naszego koszyka.
 Iterujemy (przechodzimy) przez każdy produkt znajdujący się w naszym koszyku.
 Przy każdej iteracji najpierw zwiększamy całkowitą wartość koszyka $cartValue
 Następnie sprawdzamy czy nadal dysponujemy odpowiednią kwotą, umożliwiającą zakup 
 całego koszyka 
 if (....)
 Jeśli wartość produktów w naszym koszyku przekroczyła ilość gotówki w portfelu
 przerywamy działanie przetwarzania koszyka
 */

/*
 Zmodyfikujemy odrobinę nasz przypadek testowy.
 Założyliśmy sobie, że możemy kupić produktów których wartość przekracza 1000 pln
 Kod realizujący poniższa zadanie mógłby wyglądać następująco
 */
 
// $cartValue = 0;
// foreach ($cart as $item) {
//     if ($item['price'] >= 1000) {
//         echo "Produkt: {$item['item']} kosztuje za dużo !!! Pomijamy\n";
//         continue;
//     }
//     $cartValue += $item['price'];
// }

// echo "Wartość Twoich zakupów wynosi: $cartValue\n";

/*
 Aby to zrealizować użyliśmy instrukcji: continue.
 Na samym początku przetwarzania elementu z koszyka sprawdzamy jego cenę, czy nie przekroczyła 
 zdefiniowanego limitu.
 Jeśli limit został przekroczony to informujemy o tym użytkownika
 oraz używamy instrukcji CONTINUE aby automatycznie przejść do kolejnego elementu koszyka
 przez to pomijamy aktualizację $cartValue, czyli aktualizację wartości koszyka.
 W przypadku gdyby cena produkty była niższa od naszego limitu to wyrażenie IF zostanie pominięte 
 i wartość koszyka zostanie zaktualizowana
 */

/*
 W tej chwili posiadasz już na tyle dużo informacji aby swobodnie używać różnego rodzaju pętli.
 Zauważ że nasze przykłady stają się powoli coraz bardziej złożone.
 Zaczynaliśmy od prostego wyświetlenia wartości zmiennej a teraz operujemy już na koszyku zakupowym :)
 
 A to dopiero wierzchołek góry lodowej która nasz czeka już za chwilę
 */