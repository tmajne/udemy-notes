<?php
/* TAGI PHP, ECHO, KOMENTARZE */

/**
 * Omówienie tagów.
 * Napisanie nowej wersji hello world
 *
 * Kod PHP umieszczamy w specjalnych tagach <?php i ?>, w wyniku czego interpreter wie, że ma wykonać ten kod.
 * Tagu zamykającego (?>) nie musimy zapisywać, jeśli do końca danego pliku występuje tylko kod PHP.
 * Zalecane jest wręcz nie stosowanie go jeśli nie musimy - patrz przypadek wyżej
 */
?>

<?php
/**
 * Do wyświtlenia tekstu służy konstrukcja "echo".
 * Tekstu który, chemy wyświetlić umieszczamy w apostrofach lub cudzysłowach. Obu możliwości możemy używać zamiennie
 * jednak istnieje pomiędzy nimi różnica do której powrócimy w przyszłej części kursu
 * UWAGA. Praktycznie każdą linię w PHP kończymy średnikiem. W dalszej części kursu omówmimy kiedy średnik nie jest
 * wymagany.
 * @link http://php.net/manual/en/function.echo.php
 */
echo 'Witamy na kursie !!!';

/**
 * Istnieje też możliwość użycia echo jako wywołania funkcji.
 * Aby wzbudzić odrobinę ciekawości napomnę że jest pewna różnica pomiędzy konstrukcją językową a funkcją.
 * Rozwiązanie tej zagadki znajdziecie w daleszj części kursu
 * @link http://php.net/manual/en/function.echo.php
 */
echo ('Bardoz się cieszę, że zdecydowałeś się rozpocząć przygodę z PHP');

?>

<?php

/**
 * Czasami potrzebujem zarzeć w kodzie jakieś informacje na temat naszych pomysłów/intencji/problemów.
 * Dzięki temu jak w przyszłości wrócimy do naszego kodu łatwo było się w nim odnaleźć i przypomnieć
 * sobie co mieliśmy na myśli pisząc dany fragment kodu.
 *
 * Interpreter PHP nie będzie traktował komentarzy jak kodu do wykonania, po prstu pominie tą część i przejdzie dalej
 * w poszukiwaniu linijek kodu, które będzie mógł sparsować i wykonać.
 */


// to jest komentarz liniowy
// trzeba za każdym razem linię poprzedzać dwoma ukośnikamy
// aby interpreter PHP nie potraktował lini jak kodu do wykonania.

/*
    To jest natomiast komentarz blokowy i wszystko co znajduje się pomiędzy
    jest traktowane jako komentarz i nie będzie wykonane
 */

?>
