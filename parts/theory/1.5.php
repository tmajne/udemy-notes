<?php

// String

/*
 Na krótko jeszcze powrócimy do ciągów znaków
 W PHP łańcuch znaków możemy powoływać do życia na kilka sposobów:
*/

$example1 = 'Ala ma kota';
$example2 = "Ala ma kota";

/*
 Hmm ... można by się zastanowić co tak naprawdę się zmieniło.
 Na pierwszy żut oka oba zapisy wyglądają praktycznie tak samo
 jedyna różnica to użycie cudzysłowu zamiast apostrofa.
 Postaram się różnicę wyjaśnić na odrobinę innym przykładzie.
*/

$age = 12;
$example1 = 'Kot Ali ma $age lat';
$example1 = "Kot Ali ma $age lat";

var_dump($example1);
var_dump($example2);

/*
 Teraz już widzimy różnicę.
 Dla PHP użycie cudzysłowia jest informacją o tym że musi przeanalizować zawartość tego co znajduję się
 pomiędzy cudzysłowiami. Jeśli znajdzie tam wcześniej zainicjowaną zmienną to odczytuje jej wartość i automatycznie
 wstawia w miejsce użycia zmiennej.
 Oczywiście ten sam efekt jesteśmy w stanie zapewnić sobie przy użyciu apostrofów
*/

// $example3 = 'Ali kot ma ' . $age . ' lat';
// var_dump($example3);

/*
 Jak widzimy efekt jest ten sam, ale żeby go uzyskać musimy włożyć odrobinę więcej pracy.
 Generalnie jest taka zasada, że jeśli nie potrzebujemy wewnąt stringu odwoływać się do jakiejś zmiennej
 to używamy samych apostrofów. Ma to związe z wydajnością. Uzycie cudzysłowia działa odrobinę wolniej z
 racji tego że język musi przeanalizować tekst. Nie są to jakieś ogromne różnice, ale warto uczyć się od
 razu dobrych zasad ponieważ sumarycznie z wielu takich "drobnostek" może urodzić się większy problem.
*/
 
/*
 DLA DOCIEKLIWYCH
 Istnieją jeszcze dwa sposoby aby utworzyć łańcuch znaków, mianowicie: heredoc i nowdoc.
 @link https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
 @link https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.nowdoc
*/
