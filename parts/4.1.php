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
 * KLASA - szablon na podstawie
 * 
 * 
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