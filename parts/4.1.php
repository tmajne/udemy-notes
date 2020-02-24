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
 * Zanim przejdziemy dalej warto wspomnieć o nowości która została wprowadzona z wersją 7.4
 * mianowicie o typowaniu właściwości.
 * 
 * W tej chwili właściwość $type w naszej klasie Flat może przyjmować wartość dowolnego typu.
 */

class Flat
{
    public $type;
}

$myFlat = new Flat();
$myFlat->type = 11;
$myFlat->type = [];
$myFlat->type = 'string';

/**
 * Wszystko będzie działać, ponieważ nie określiliśmy typu właściwości.
 * Wiemy jednak, że typ mieszkania to zwykły łańcuch tekstowy czyli string.
 * Tak więc możemy teraz go określić. 
 */

class Flat
{
    public string $type;
}

$myFlat = new Flat();
$myFlat->type = 11;
$myFlat->type = [];
$myFlat->type = 'string';

/**
 * Wywołanie naszego kodu zgłosi błąd:
 * 
 * TypeError: Typed property Flat::$type must be string
 */

class Flat
{
    public string $type;
}

$myFlat = new Flat();
$myFlat->type = 'string';
var_dump($myFlat);

/**
 * Przy określenia typu możemy użyć dowolnego typu obsługiwanego przez język PHP
 * 
 * UWAGA: przy typowaniu właściwości mają zastosowanie zasady rzutowania które omawialiśmy
 * w sekcji dotyczącej STRICT_TYPES. Warto o tym pamiętać. 
 */

/**
 * Właściwości od razu możemy przypisać wartość domyślną.
 */

class Flat
{
    public string $type = 'M';
}

$myFlat = new Flat();
var_dump($myFlat);

/**
 * Jeśli na samym początku chcielibyśmy jawnie nadać właściwości wartość NULL
 * musielibyśmy odrobinę zmodyfikować naszą klasę
 */

class Flat
{
    public ?string $type = null;
}

$myFlat = new Flat();
var_dump($myFlat);

/**
 * Zapis ze znakiem zapytania, czyli: ?string
 * jak pamiętamy oznacza, że właściwość może przechowywać typ NULL lub STRING
 */



/**
 * METODY
 * 
 * Klasa może posiadać pewne zachowania, które możemy wywoływać. 
 * Zachowania te nazywamy METODAMI 
 * 
 * METODY można przyrównać do funkcji tylko umieszczonej wewnątrz obiektu.
 * Generalnie wszystko to co do tej pory mówiliśmy o funkcjach ma odniesienie do metod.
 * 
 * Definiujemy je następująco.
 */

class Flat
{
    public ?string $type = null;

    public function open(): void
    {
        echo "Drzwi zostały otwarte \n";
    }

    public function close(): void
    {
        echo "Drzwi zostały zamknięte \n";
    }

    public function doSomething(string $command): ?int
    {
        if ($command === 'foo') {
            return null;
        } 

        return 10;
    }
}

// wywołania
$myFlat = new Flat();
$myFlat->open();
$myFlat->close();
$myFlat->doSomething('bar');

/**
 * Widzimy że kwestia argumentów, wartości zwracanych wygąda dokładnie tak jak w przypadku funkcji
 * tylko działa to w obrębie klasy.
 * 
 * Wywołanie metody odbywa się w ten sam sposób jak uzyskanie dostępu do właściwości, czyli za pomocą strzałki "->"
 */

/**
 * THIS - what is this?
 */

class Flat
{
    public ?string $type = null;

    public function printType(): void
    {
        // ??
    }
}

/**
 * Popatrzmy na przykład naszego mieszkania.
 * Mamy informację jakiego rodzaju jest mieszkanie, ale jak odwołać się do tej właściwości w metodzie naszej klasy?
 * 
 * Tutaj z pomocą przychodzi nam zmienna "$this". 
 * Nie musimy jej tworzyć samodzielnie. Ona zostaje automatycznie stworzona po powołaniu do życia nowego obiektu.
 * Dostępna jest tylko i wyłącznie wewnątrz naszego obiektu, nie możemy odwołać się do niej z zewnątrz
 * 
 * Przy jej pomocy możemy się odwołać do każdej metody/właściwości znajdującej się w naszym obiekcie
 */

class Flat
{
    public ?string $type = null;

    public function isTypeSet(): bool
    {
        return (bool) $this->type;
    }

    public function printType(): void
    {
        if ($this->isTypeSet()) {
            echo "Nasze mieszkanie to: " . $this->type;
        } else {
            echo "Jeszcze nie wiemy jakiego typu jest nasze mieszkanie";
        }
    }
}

$myFlat = new Flat();
$myFlat->printType();
$myFlat->type = 'M3';
$myFlat->printType();

/**
 * W przykładnie używamy $this zarówno do pobrania właściwości jak i do wywołania metody.
 * Używając $this do pobrania właściwości nie używamy znaku dolara przed nazwą właściwości.
 */


/**
 * MODYFIKATORY DOSTĘPU
 * 
 * Jak pewnie zauważyliście bardo pobieżnie opisałem do czego służy PUBLIC używane przed właściwością i metodą. 
 * Teraz po nabyciu pewnej wiedzy wracamy do tematu.
 * 
 * Istnieją trzy rodzaje modyfikatorów dostępu:
 * - public
 * - private
 * - protected
 * 
 * Domyślnie, jeśli nie użyjemy żadnego modyfikatora to właściwość/metoda jest automatycznie publiczna.
 * Jednak DOBRĄ PRAKTYKĄ jest zawsze używać modyfikatora dostępu.
 * 
 * PUBLIC - właściwość/metoda jest publiczna i dostęp do niej jest zarówno z wnętrza obiektu jak i z poza jej wnętrze
 * PRIVATE - właściwość/metoda jest prywatna i dostęp do niej jest tylko z wnętrza obiektu
 * PROTECTED - właściwość/metoda jest chroniona i nie ma dostępu do niej z poza obiektu. Wrócimy do tematu jak już poznamy dziedziczenie
 * 
 * Teraz zobaczymy jak to wygląda w kodzie
 */

class SomeClass
{
    public string $foo = 'public';
    private string $bar = 'private';
    protected string $baz = 'protected';

    private function privFoo(): void
    {
        echo "Jestem prywatną metodą \n";
    }

    public function printProperties(): void
    {
        var_dump($this->foo);
        var_dump($this->bar);
        var_dump($this->baz);

        $this->privFoo();
    }
}

$object = new SomeClass();

var_dump($object->foo);
var_dump($object->bar);
var_dump($object->baz);
$object->privFoo();
$object->printProperties();

/**
 * Widzimy, że dostęp z zewnątrz obiektu jest tylko do właściwości publicznej.
 * Próba pobrania właściwości prywatnej lub chronionej kończy się błędem.
 * Podobnie jak wywołanie prywatnej metody.
 * 
 * Widzimy za to, że wywołanie publicznej metody, która wyświetla prywatne właściwości
 * i wykonuje prywatną metodę działa bez zarzutu
 * 
 * Modyfikatory są po to aby ograniczać i chronić nasz obiekt, a konkretniej jego 
 * właściwości i metody przed nieuprawnionym dostępem.
 * 
 * Moje zdanie jest takie, że jak tworzymy nową klasę to domyślnie wszystkie metody i właściwości
 * ustawiamy na prywatne, dopiero po przemyśleniu i jeśli są ku temu jakieś powody to wybrane 
 * metody (rzadziej właściwości) ustawiam na publiczne.
 * 
 * Czy publiczne właściwości są czym złym?
 * Generalnie nie, ale jak staram się ich unikać za wszelką cenę. 
 * 
 * W internecie krąży pewna anegdota.
 * "Publiczne elementy klasy są jak dzieci, raz stworzone i trzeba je utrzymywać całe życie ;)
 */

/**
 * Jednak po co to wszystko tak komplikować?
 * Czy nie wygodniej byłoby dać dla wszystkiego publiczny dostęp?
 * 
 * Posłużmy się przykładem.
 */

class Flat
{
    public bool $closed = true;

    public function close(): void
    {
        $this->closed = false;
    }

    public function open(): void
    {
        $this->closed = true;
    }
}

/**
 * Wszystko jest publiczne.
 * Teraz trzeba się zastanowić, czy jest sens istnienia metod 'close', 'open'
 * gdy można właściwość 'closed' ustawić bezpośrednio
 */

 $myFlat = new Flat();
 $myFlat->closed = false;

/**
 * Otworzyliśmy nasze mieszkanie odwołując się bezpośrednio do właściwości. Pomijając metody.
 * Z jednej strony można powiedzieć, że wszystko działa i metody są nam niepotrzebne.
 * Jednak użycie metod daje nam dużo większe możliwości.
 * 
 * Przede wszystkim ogranicza dostęp do właściwości,
 * oraz daje nam możliwość wykonania pewnych operacji podczas otwierania.
 * Przykładowo mamy zamontowany zamek, który otwiera sie kodem, tak więc w metodzie open
 * jesteśmy w stanie sprawdzić, czy podany kod jest prawidłowy.
 * Możemy też chcieć gdzieś odłożyć informacje że ktoś otworzył nasze mieszkanie lub próbował otworzyć. 
 */

class Flat
{
    private string $doorLockCode = '123qwe';

    private bool $closed = true;

    public function close(): void
    {
        $this->closed = false;
    }

    public function open(string $code): void
    {
        if ($code === $this->doorLockCode) {
            $this->closed = true;
        } else {
            // logowanie informacji o próbie użycia niepoprawnego kodu
        }
    }

    public function isOpen(): bool
    {
        return !$this->closed;
    }
}

$myFlat = new Flat();
$myFlat->open('123qwe');

/**
 * Teraz widzimy, że jedyny sposób otwarcia naszego mieszkania jest poprzez metodę "open"
 * Nie ma innej możliwości aby to zrobić. 
 * 
 * DOBRĄ CECHĄ w programowaniu jest dążenie do tego aby ukrywać to co się znajduje wewnątrz klasy,
 * a później obiektu powstałego na podstawie tej klasy. Jednocześnie udostępniając na zewnątrz 
 * zbiór metod za pomocą których można używać obiekty danej klasy.
 * 
 * Dokładnie to zrobiliśmy w przykładzie powyżej, nie mamy żadnej publicznej właściwości, przez co nie 
 * eksponujemy tego jak nasz obiekt wygląda wewnątrz. Udostępniamy tylko metody dzięki którym nasz 
 * obiekt może wchodzić w interakcję z otoczeniem.
 * 
 * Jednym z powodów dlaczego tak należy robić jest fakt, że w naszej pracy (prawie) nigdy nie będziemy pracować
 * samodzielnie. Będziemy pracować w zespole realizując projekty przypisane do danego zespołu. 
 * Tworząc klasę która ma zapewniać pewną funkcjonalność i która będzie używana przez inne osoby skupiamy się 
 * nad tym jak ta klasa ma działać. Powodem jest fakt, że osoba która będzie używać obiektów tej klasy
 * generalnie nie interesuje jej wewnętrzna struktura, tylko to jakie zapewnia możliwości, czyli jakie metody 
 * udostępnia publicznie i co za ich pomocą można zrobić. 
 */

/**
 * Na pewno w swojej przygodzie z programowaniem spotkasz się z akkcesorami do właściwości czyli tak zwanymi
 * getterami i setterami.
 * 
 * Powróćmy do naszego pierwotnego przykładu.
 */

class Flat
{
    private bool $closed = true;

    // geter
    public function getClosed(): bool
    {
        return $this->closed;
    }

    // seter
    public function setClosed(): void
    {
        
    }
}

/**
 * Wywołanie gettera powoduje zwrócenie wartości konkretnej właściwości
 * Natomiast wywołanie settera powoduje ustawienie przesłanej wartości dla konkretnej właściwości.
 * 
 * Tworzenie tego typu metod w obiektach nadal jest dosyć popularne, jednak od pewnego czasu można zaobserwować
 * tendencje odchodzenia od tego.
 * Ma to związek z tym o czym wspominaliśmy na samym początku rozdziału o obiektach.
 * Programowanie obiektowe to dążenie do odwzorowania rzeczywistości.
 * 
 * Teraz zadajmy sobie pytanie czy metody "getClosed" i "setClosed" mają przełożenie na rzeczywistość?
 * Czy te funkcjonalności które możemy za ich pomocą zrobić nie lepiej oddają metody: "open", "close", "isOpen"?
 * Która opcja lepiej odwzorowuje rzeczywistość. 
 * 
 * Pamiętamy, że nazwy metod (właściwości również) powinny być opisowe, przez co druga konwencja wydaje się o wiele bardziej opisowa.
 * 
 * Na pewno zetkniesz się z jednym albo drugim podejściem, ewentualnie mix obu, dlatego o tym wspominał.
 * W dalszej części kursu skupię się jednak na podejściu beż użycia setterów i getterów.
 * 
 * UWAGA: w niektórych przypadkach użycie setterów i getterów jest uzasadnione, ale to zależy od kontekstu i "typu" obiektu,
 * jednak to już dotyka bardziej zaawansowanych kwestii i do tego tematu wrócimy w przyszłych kursach.
 */





// KONSTRUKTOR (destructor)

// ABSTRACT i FINAL

// INTERFEJSY





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

    Podsumujmy to, czego zdążyliśmy się dowiedzieć. Wbrew pozorom nowych pojęć nie ma wcale aż tak dużo:

    Klasy - definiują pewien rodzaj obiektów o określonych właściwościach i zachowaniach
    Obiekty - rzeczywiste byty, na których pracujemy.
    Właściwości - pewne informacje charakteryzujące obiekt. W dalszej części będziemy je nazywać "polami" klasy bądź obiektu.
    Zachowania - definiują, co obiekty danej klasy mogą robić. W dalszej części będziemy je nazywać "metodami".
    Dziedziczenie - pozwala wyrażać zależności "X jest Y-kiem".
    Polimorfizm - pamiętanie o prawdziwej naturze obiektów nawet, gdy rozpatrujemy je z punktu widzenia ogólniejszej klasy.
    
    Wiemy już, że programowanie obiektowe świetnie opisuje otaczającą nas rzeczywistość, 
    dlatego teraz zastanowimy się, jak za jego pomocą opisać środowisko programu komputerowego, a w szczególności skryptu strony internetowej.


// na koniec uzupełnić info o typowaniu