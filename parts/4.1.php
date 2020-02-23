<?php

/**
 * PROGRAMOWANIE OBIEKTOWE
 */

/**
 * Jeśli miałbym powiedzieć w najproszczy sposób co to jest programowanie obiektowe, to użyłbym następującego zdania.
 * 
 * Programowanie obiektowe jest przedstawieniem świata rzeczywistego i relacji w nim panujących za pomocą obiektów.
 * 
 * Tylko co to jest ten obiekt?
 * 
 * Na razie operując na pewnym poziomie abstrakcji przyjmijmy że obiekt jest hmm ... obiektem?
 * To znaczy pewnym bytem, który istnieje w naszym kodzie.
 * 
 * Przykładowym obiektem może być nasze mieszkanie w którym mieszkamy.
 * Skoro obiekty są odwzorowaniem danej rzeczy ze świata rzeczywistego w naszym kodzie
 * to taki nasz obiekt "mieszkanie" zawiera w sobie informacje o swoich WŁAŚCIWOŚCIACH, 
 * czyli informacje o tym jaki ma metraż, ile ma pokoi, pod jakim adresem się znajduje itp.
 * 
 * Nasz obiekt udostępnia też nam czynności zwane METODAMI, które możemy na nim wykonać. 
 * Na przykład możemy zamknąć i otworzyć nasze mieszkanie aby nikt niepowołany do niego się nie dostał. 
 * 
 * W takim obiekcie zamykamy wszystko co ma związek z mieszkaniem. Zarówno jego cechy jak i to co możemy 
 * w nim wykonać. Dzięki temu wszystko mamy w jednym miejscu i możemy się łatwo do tego odwołać lub 
 * wykonać jakąś czynność powiązaną z naszym obiektem.
 * 
 * 
 * No dobrze a jak to teraz zrobić w naszym kodzie?
 * Pierwszym krokiem jest utworzenie obiektu.
 * Ale jak tworzy się takie obiekt?
 * 
 * Program nie zrozumie komendy:
 * 
 * $flat = new Flat();
 * 
 * Program nie wie co to jest Flat, czyli nie wie czym jest nasz obiekt.
 * Tak naprawdę program nigdy nie będzie wiedział czym jest obiekt danego typu (u nas Flat)
 * dopóki nie stworzymy klasy tego typu.
 * 
 * Klasa jest szablonem na podstawie którego tworzymy obiekt. W klasie są zawarte podstawowe 
 * informacje jak nasz obiekt będzie wyglądał. Określa nam jakie parametry i metody będą zawarte 
 * w obiekcie po jego utworzeniu. 
 * 
 * Odnosząc się do naszego przykładu z mieszkaniem i przekładając to na rzeczywistość
 * Klasą byłby plan mieszkania, który jest wykorzystywany przez pracowników do wybudowania
 * nowego mieszkania (utworzenie obiektu). Czymś naturalnym jest fakt, że na podstawie
 * jednego planu można wybudować wiele mieszkań, tak samo jest w programowaniu.
 * Na podstawie jednej klasy można stworzyć wiele obiektów.
 * 
 * Podsumowując to co powiedzieliśmy do tej pory:
 * KLASA - szablon na podstawie którego możemy stworzyć obiekt (plan mieszkania)
 * OBIEKT - jest instancją danej klasy (konkretne wybudowane mieszkanie)
 * 
 * 
 * Teraz przejdźmy do kodu i stwórzmy naszą pierwszą klasę
 */

class Flat
{

}

/**
 * Na razie nie wygląda to skomplikowanie.
 * Aby utworzyć nową klasę musimy posłużyć się słowem "class" 
 * za nim podajemy nazwę naszej klasy
 * 
 * Konstrukcja wygląda następująco
 */

/*
    class NazwaKlasy
    {
        // ciało klasy
    }
*/

/**
 * Standardem jest, że nazwa klasy powinna się zaczynać z dużej litery.
 * 
 * PHP wprawdzie dopuszcza użycie małej litery na początku nazwy klasy, jednak nie jest "mile" widziane
 * 
 * Nasza klasa już istniej więc teraz możemy utworzyć obiekt na jej podstawie.
 * W tym celu używamy słowa "new". 
 * Za słowem "new" wpisujemy nazwę klasy którą chcemy utworzyć. 
 */

$myFlat = new Flat();

var_dump($myFlat);

/**
 * Utworzyliśmy właśnie nowy obiekt na podstawie klasy Flat.
 * Możemy też powiedzieć, że:
 * utworzyliśmy obiekt, który jest instancją klasy Flat.
 * 
 * Pewne zastanowienie może wzbudzić fakt, dlaczego to co jest za słowem "new" wygląda jak wywołanie funkcji.
 * Wrócimy do tego już za moment.
 */

/**
 * WŁAŚCIWOŚCI KLASY
 * 
 * Wspominaliśmy już wcześniej że klasa może posiadać cechy, które ją opisują. 
 * Cechy te nazywamy WŁAŚCIWOŚCIAMI KLASY lub po prostu WŁAŚCIWOŚCIAMI. 
 * Po angielsku PROPERTY.
 * 
 * Właściwość można przyrównać do zmiennej tylko umieszczonej wewnątrz obiektu.
 * Generalnie wszystko to co do tej pory mówiliśmy o zmiennych ma odniesienie do właściwości.
 * Definiujemy je następująco.
 */

class Flat
{
    public $type;
}

/**
 * Dodaliśmy właściwość, która będzie mówiła nam o typie mieszkania np M1, M2 itp.
 * 
 * Jednak oprócz nazwy właściwości pojawiło się nam słowo "public".
 * Jest to tak zwany MODYFIKATOR DOSTĘPU a którym będziemy mówić już za chwilę,
 * skończymy tylko temat właściwości i metod
 * 
 * W tej chwili możemy już posługiwać się tą właściwością
 */

$myFlat = new Flat();
var_dump($myFlat);

// aby odwołać się do właściwości obiektu używamy strzałki "->"
// pobranie
$myFlatType = $myFlat->type;
var_dump($myFlatType);

// oczywiście możemy się odwołać bezpośrednio do właściwości, bez konieczności
// przypisywania jej do zmiennej
var_dump($myFlat->type);

// przypisanie wartości do właściwości
$myFlat->type = 'M4';

var_dump($myFlat);
var_dump($myFlat->type);



/**
 * W poprzednim przykładzie widzieliśmy pusty obiekt
 * Teraz widzimy, że zawiera w sobie zdefiniowaną przez nas właściwość
 */

 
 /** W PHP mamy trzy typy modyfikatorów dostępu.
 * - public
 * - private
 * - protected
 * 
 * Ich funkcją jest określenie i pilnowanie zakresu widoczności danej właściwości.
 * W naszym przypadku określiliśmy, że właściwość $type jest publiczna.
 * A to znaczy że można się do niej odwołać z zewnątrz, a nie tylko z wnętrza obiektu.
 */

 
 /* 
 * https://kobietydokodu.pl/0-programowanie-obiektowe/
 * https://pl.wikibooks.org/wiki/PHP/Czym_jest_programowanie_obiektowe%3F
 * https://kursphp.com/programowanie-obiektowe/
 * https://kursphp.com/programowanie-obiektowe-php/
 * https://webmastah.pl/jak-programowac-obiektowo-cz-1-wstep/
 * https://www.ikalkulator.pl/blog/mbank-zamkniecie-konta/
 */

// foreach do itereowania po właściwościach

// strict_types
// przestrzenie nazw
// wspomnieć o foreach

/*
Mówiąc językiem technicznym obiekt to instancja klasy. 
Klasa to w pewnym sensie szablon opisu — czyli informacja jakie są pola (jakie informacje można przechowywać) 
oraz metody (jakie czynności wykonywać). Obiekt z kolei to ‘konkretny przypadek’ 
— czyli klasa oraz konkretne informacje (wartości pól) które składają się na określony stan całego obiektu.

Aby zobrazować to przykładem 
— klasa to np. Człowiek. Wiemy o niej, że ma pola imię i nazwisko ale w przypadku klasy nie mówimy o wartościach tych pól 
— po prostu że takie pola są. 
Klasa to człowiek jako gatunek, istota. Obiekt z kolei to konkretny człowiek — taki, 
który posiada imię i nazwisko. Zawsze istnieje więc tylko jedna klasa danego typu, ale może istnieć wiele obiektów danej klasy.


    Podsumujmy to, czego zdążyliśmy się dowiedzieć. Wbrew pozorom nowych pojęć nie ma wcale aż tak dużo:

    Klasy - definiują pewien rodzaj obiektów o określonych właściwościach i zachowaniach
    Obiekty - rzeczywiste byty, na których pracujemy.
    Właściwości - pewne informacje charakteryzujące obiekt. W dalszej części będziemy je nazywać "polami" klasy bądź obiektu.
    Zachowania - definiują, co obiekty danej klasy mogą robić. W dalszej części będziemy je nazywać "metodami".
    Dziedziczenie - pozwala wyrażać zależności "X jest Y-kiem".
    Polimorfizm - pamiętanie o prawdziwej naturze obiektów nawet, gdy rozpatrujemy je z punktu widzenia ogólniejszej klasy.
    
    Wiemy już, że programowanie obiektowe świetnie opisuje otaczającą nas rzeczywistość, 
    dlatego teraz zastanowimy się, jak za jego pomocą opisać środowisko programu komputerowego, a w szczególności skryptu strony internetowej.