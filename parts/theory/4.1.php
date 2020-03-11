<?php

declare(strict_types=1);

/*
 PROGRAMOWANIE OBIEKTOWE
 */

/*
 Jeśli miałbym powiedzieć w najproszczy sposób co to jest programowanie obiektowe, to użyłbym następującego zdania.
 
 Programowanie obiektowe jest przedstawieniem świata rzeczywistego i relacji w nim panujących za pomocą obiektów.
 
 Tylko co to jest ten obiekt?
 
 Na razie operując na pewnym poziomie abstrakcji przyjmijmy że obiekt jest hmm ... obiektem?
 To znaczy pewnym bytem, który istnieje w naszym kodzie.
 
 Przykładowym obiektem może być nasze mieszkanie w którym mieszkamy.
 Skoro obiekty są odwzorowaniem danej rzeczy ze świata rzeczywistego w naszym kodzie
 to taki nasz obiekt "mieszkanie" zawiera w sobie informacje o swoich WŁAŚCIWOŚCIACH, 
 czyli informacje o tym jaki ma metraż, ile ma pokoi, pod jakim adresem się znajduje itp.
 
 Nasz obiekt udostępnia też nam czynności zwane METODAMI, które możemy na nim wykonać. 
 Na przykład możemy zamknąć i otworzyć nasze mieszkanie aby nikt niepowołany do niego się nie dostał. 
 
 W takim obiekcie zamykamy wszystko co ma związek z mieszkaniem. Zarówno jego cechy jak i to co możemy 
 w nim wykonać. Dzięki temu wszystko mamy w jednym miejscu i możemy się łatwo do tego odwołać lub 
 wykonać jakąś czynność powiązaną z naszym obiektem.
 
 
 No dobrze a jak to teraz zrobić w naszym kodzie?
 Pierwszym krokiem jest utworzenie obiektu.
 Ale jak tworzy się takie obiekt?
 
 Program nie zrozumie komendy:
 
 $flat = new Flat();
 
 Program nie wie co to jest Flat, czyli nie wie czym jest nasz obiekt.
 Tak naprawdę program nigdy nie będzie wiedział czym jest obiekt danego typu (u nas Flat)
 dopóki nie stworzymy klasy tego typu.
 
 Klasa jest szablonem na podstawie którego tworzymy obiekt. W klasie są zawarte podstawowe 
 informacje jak nasz obiekt będzie wyglądał. Określa nam jakie parametry i metody będą zawarte 
 w obiekcie po jego utworzeniu. 
 
 Odnosząc się do naszego przykładu z mieszkaniem i przekładając to na rzeczywistość
 Klasą byłby plan mieszkania, który jest wykorzystywany przez pracowników do wybudowania
 nowego mieszkania (utworzenie obiektu). Czymś naturalnym jest fakt, że na podstawie
 jednego planu można wybudować wiele mieszkań, tak samo jest w programowaniu.
 Na podstawie jednej klasy można stworzyć wiele obiektów.
 
 Podsumowując to co powiedzieliśmy do tej pory:
 KLASA - szablon na podstawie którego możemy stworzyć obiekt (plan mieszkania)
 OBIEKT - jest instancją danej klasy (konkretne wybudowane mieszkanie)
 
 
 Teraz przejdźmy do kodu i stwórzmy naszą pierwszą klasę
 */

// class Flat
// {

// }

/*
 Na razie nie wygląda to skomplikowanie.
 Aby utworzyć nową klasę musimy posłużyć się słowem "class" 
 za nim podajemy nazwę naszej klasy
 
 Konstrukcja wygląda następująco
 */

/*
    class NazwaKlasy
    {
        // ciało klasy
    }
*/

// class Flat 
// {

// }

/*
 Standardem jest, że nazwa klasy powinna się zaczynać z dużej litery.
 
 PHP wprawdzie dopuszcza użycie małej litery na początku nazwy klasy, jednak nie jest "mile" widziane
 
 Nasza klasa już istniej więc teraz możemy utworzyć obiekt na jej podstawie.
 W tym celu używamy słowa "new". 
 Za słowem "new" wpisujemy nazwę klasy którą chcemy utworzyć. 
 */

// $myFlat = new Flat();

// var_dump($myFlat);

/*
 Utworzyliśmy właśnie nowy obiekt na podstawie klasy Flat.
 Możemy też powiedzieć, że:
 utworzyliśmy obiekt, który jest instancją klasy Flat.
 
 Pewne zastanowienie może wzbudzić fakt, dlaczego to co jest za słowem "new" wygląda jak wywołanie funkcji. Wrócimy do tego już za moment.
 */

/*
 WŁAŚCIWOŚCI KLASY
 
 Wspominaliśmy już wcześniej że klasa może posiadać cechy, które ją opisują. 
 Cechy te nazywamy WŁAŚCIWOŚCIAMI KLASY lub po prostu WŁAŚCIWOŚCIAMI. 
 Po angielsku PROPERTY.
 
 Właściwość można przyrównać do zmiennej tylko umieszczonej wewnątrz obiektu.
 Generalnie wszystko to co do tej pory mówiliśmy o zmiennych ma odniesienie do właściwości.
 Definiujemy je następująco.
 */

// class Flat
// {
//     public $type;
// }

/*
 Dodaliśmy właściwość, która będzie mówiła nam o typie mieszkania np M1, M2 itp.
 
 Jednak oprócz nazwy właściwości pojawiło się nam słowo "public".
 Jest to tak zwany MODYFIKATOR DOSTĘPU a którym będziemy mówić już za chwilę,
 skończymy tylko temat właściwości i metod
 
 W tej chwili możemy już posługiwać się tą właściwością
 */

// $myFlat = new Flat();
// var_dump($myFlat);

// aby odwołać się do właściwości obiektu używamy strzałki "->"
// pobranie

// $myFlatType = $myFlat->type;
// var_dump($myFlatType);

// oczywiście możemy się odwołać bezpośrednio do właściwości, bez konieczności
// przypisywania jej do zmiennej
//var_dump($myFlat->type);

// przypisanie wartości do właściwości
// $myFlat->type = 'M4';

// var_dump($myFlat);
// var_dump($myFlat->type);

/*
 Zanim przejdziemy dalej warto wspomnieć o nowości która została wprowadzona z wersją 7.4
 mianowicie o typowaniu właściwości.
 
 W tej chwili właściwość $type w naszej klasie Flat może przyjmować wartość dowolnego typu.
 */

// class Flat
// {
//     public $type;
// }

// $myFlat = new Flat();
// $myFlat->type = 11;
// $myFlat->type = [];
// $myFlat->type = 'string';

/*
 Wszystko będzie działać, ponieważ nie określiliśmy typu właściwości.
 Wiemy jednak, że typ mieszkania to zwykły łańcuch tekstowy czyli string.
 Tak więc możemy teraz go określić. 
 */

// class Flat
// {
//     public string $type;
// }

//$myFlat = new Flat();
//$myFlat->type = 11;
//$myFlat->type = [];
//$myFlat->type = 'M3';

/*
 Wywołanie naszego kodu zgłosi błąd:
 
 TypeError: Typed property Flat::$type must be string
 */

// class Flat
// {
//     public string $type;
// }

// $myFlat = new Flat();
// $myFlat->type = 'string';
// var_dump($myFlat);

/*
 Przy określenia typu możemy użyć dowolnego typu obsługiwanego przez język PHP
 
 UWAGA: przy typowaniu właściwości mają zastosowanie zasady rzutowania które omawialiśmy
 w sekcji dotyczącej STRICT_TYPES. Warto o tym pamiętać. 
 */

/*
 Właściwości od razu możemy przypisać wartość domyślną.
 */

// class Flat
// {
//     public string $type = 'M2';
// }

// $myFlat = new Flat();
// var_dump($myFlat);

// $flatType = $myFlat->type;
// var_dump($flatType);


/*
 Jeśli na samym początku chcielibyśmy jawnie nadać właściwości wartość NULL
 musielibyśmy odrobinę zmodyfikować naszą klasę
 */

// class Flat
// {
//     public ?string $type = null;
// }

// $myFlat = new Flat();
// var_dump($myFlat);

/*
 Zapis ze znakiem zapytania, czyli: ?string
 jak pamiętamy oznacza, że właściwość może przechowywać typ NULL lub STRING
 */

/*
 METODY
 
 Klasa może posiadać pewne zachowania, które możemy wywoływać. 
 Zachowania te nazywamy METODAMI 
 
 METODY można przyrównać do funkcji tylko umieszczonej wewnątrz obiektu.
 Generalnie wszystko to co do tej pory mówiliśmy o funkcjach ma odniesienie do metod.
 
 Definiujemy je następująco.
 */

// class Flat
// {
//     public ?string $type = null;

//     public function open(): void
//     {
//         echo "Drzwi zostały otwarte \n";
//     }

//     public function close(): void
//     {
//         echo "Drzwi zostały zamknięte \n";
//     }

//     public function doSomething(string $command): ?int
//     {
//         if ($command === 'foo') {
//             return null;
//         } 

//         return 10;
//     }
// }

// wywołania
//$myFlat = new Flat();
//var_dump($myFlat);
//$myFlat->open();
//$myFlat->close();
//$tmp = $myFlat->doSomething('foo');
//var_dump($tmp);

/*
 Widzimy że kwestia argumentów, wartości zwracanych wygąda dokładnie tak jak w przypadku funkcji
 tylko działa to w obrębie klasy.
 
 Wywołanie metody odbywa się w ten sam sposób jak uzyskanie dostępu do właściwości, czyli za pomocą strzałki "->"
 */

/*
 THIS - what is this?
 */

// class Flat
// {
//     public ?string $type = null;

//     public function printType(): void
//     {
//         // ??
//     }
// }

/*
 Popatrzmy na przykład naszego mieszkania.
 Mamy informację jakiego rodzaju jest mieszkanie, ale jak odwołać się do tej właściwości w metodzie naszej klasy?
 
 Tutaj z pomocą przychodzi nam zmienna "$this". 
 Nie musimy jej tworzyć samodzielnie. Ona zostaje automatycznie stworzona po powołaniu do życia nowego obiektu.
 Dostępna jest tylko i wyłącznie wewnątrz naszego obiektu, nie możemy odwołać się do niej z zewnątrz
 
 Przy jej pomocy możemy się odwołać do każdej metody/właściwości znajdującej się w naszym obiekcie
 */

// class Flat
// {
//     public ?string $type = null;

//     public function isTypeSet(): bool
//     {
//         return (bool) $this->type;
//     }

//     public function printType(): void
//     {
//         if ($this->isTypeSet()) {
//             echo "Nasze mieszkanie to: " . $this->type . "\n";
//         } else {
//             echo "Jeszcze nie wiemy jakiego typu jest nasze mieszkanie\n";
//         }
//     }
// }

// $myFlat = new Flat();
// $myFlat->printType();
// $myFlat->type = 'M3';
// $myFlat->printType();

/*
 W przykładnie używamy $this zarówno do pobrania właściwości jak i do wywołania metody.
 Używając $this do pobrania właściwości nie używamy znaku dolara przed nazwą właściwości.
 */



/*
 MODYFIKATORY DOSTĘPU
 
 Jak pewnie zauważyliście bardo pobieżnie opisałem to do czego służy PUBLIC używane przed właściwością i metodą. 
 Teraz po nabyciu pewnej wiedzy wracamy do tematu.
 
 Istnieją trzy rodzaje modyfikatorów dostępu:
 - public
 - private
 - protected
 
 Domyślnie, jeśli nie użyjemy żadnego modyfikatora to właściwość/metoda jest automatycznie publiczna.
 Jednak DOBRĄ PRAKTYKĄ jest zawsze używać modyfikatora dostępu.
 
 PUBLIC - właściwość/metoda jest publiczna i dostęp do niej jest zarówno z wnętrza obiektu jak i z poza jej wnętrze
 PRIVATE - właściwość/metoda jest prywatna i dostęp do niej jest tylko z wnętrza obiektu
 PROTECTED - właściwość/metoda jest chroniona i nie ma dostępu do niej z poza obiektu. Wrócimy do tematu jak już poznamy dziedziczenie
 
 Teraz zobaczymy jak to wygląda w kodzie
 */

// class SomeClass
// {
//     public string $foo = 'public';
//     private string $bar = 'private';
//     protected string $baz = 'protected';

//     private function privFoo(): void
//     {
//         echo "Jestem prywatną metodą \n";
//     }

//     public function printProperties(): void
//     {
//         var_dump($this->foo);
//         var_dump($this->bar);
//         var_dump($this->baz);

//         $this->privFoo();
//     }
// }

// $object = new SomeClass();

//var_dump($object->foo);
//var_dump($object->bar);
//var_dump($object->baz);

//$object->privFoo();
//$object->printProperties();

/*
 Widzimy, że dostęp z zewnątrz obiektu jest tylko do właściwości publicznej.
 Próba pobrania właściwości prywatnej lub chronionej kończy się błędem.
 Podobnie jak wywołanie prywatnej metody.
 
 Widzimy za to, że wywołanie publicznej metody, która wyświetla prywatne właściwości
 i wykonuje prywatną metodę działa bez zarzutu
 
 Modyfikatory są po to aby ograniczać i chronić nasz obiekt, a konkretniej jego 
 właściwości i metody przed nieuprawnionym dostępem.
 
 Moje zdanie jest takie, że jak tworzymy nową klasę to domyślnie wszystkie metody i właściwości
 ustawiamy na prywatne, dopiero po przemyśleniu i jeśli są ku temu jakieś powody to wybrane 
 metody (rzadziej właściwości) ustawiam na publiczne.
 
 Czy publiczne właściwości są czym złym?
 Generalnie nie, ale jak staram się ich unikać za wszelką cenę. 
 
 W internecie krąży pewna anegdota.
 "Publiczne elementy klasy są jak dzieci, raz stworzone i trzeba je utrzymywać całe życie ;)
 */

/*
 Jednak po co to wszystko tak komplikować?
 Czy nie wygodniej byłoby dać dla wszystkiego publiczny dostęp?
 
 Posłużmy się przykładem.
 */

// class Flat
// {
//     public bool $closed = true;

//     public function close(): void
//     {
//         $this->closed = true;
//     }

//     public function open(): void
//     {
//         $this->closed = false;
//     }
// }

/*
 Wszystko jest publiczne.
 Teraz trzeba się zastanowić, czy jest sens istnienia metod 'close', 'open'
 gdy można właściwość 'closed' ustawić bezpośrednio
 */

//  $myFlat = new Flat();
//  $myFlat->closed = false;

/*
 Otworzyliśmy nasze mieszkanie odwołując się bezpośrednio do właściwości. Pomijając metody.
 Z jednej strony można powiedzieć, że wszystko działa i metody są nam niepotrzebne.
 Jednak użycie metod daje nam dużo większe możliwości.
 
 Przede wszystkim ogranicza dostęp do właściwości,
 oraz daje nam możliwość wykonania pewnych operacji podczas otwierania.
 Przykładowo mamy zamontowany zamek, który otwiera sie kodem, tak więc w metodzie open
 jesteśmy w stanie sprawdzić, czy podany kod jest prawidłowy.
 Możemy też chcieć gdzieś odłożyć informacje że ktoś otworzył nasze mieszkanie lub próbował otworzyć. 
 */

// class Flat
// {
//     private string $doorLockCode = '123qwe';

//     private bool $closed = true;

//     public function close(): void
//     {
//         $this->closed = true;
//     }

//     public function open(string $code): void
//     {
//         if ($code === $this->doorLockCode) {
//             $this->closed = false;
//             echo "Mieszkanie zostało otwarte\n";
//         } else {
//             // logowanie informacji o próbie użycia niepoprawnego kodu
//             echo "Kod jest niepoparawny\n";
//         }
//     }

//     public function isOpen(): bool
//     {
//         return !$this->closed;
//     }
// }

// $myFlat = new Flat();
// $myFlat->open('123qwe');


/*
 Teraz widzimy, że jedyny sposób otwarcia naszego mieszkania jest poprzez metodę "open"
 Nie ma innej możliwości aby to zrobić. 
 
 DOBRĄ CECHĄ w programowaniu jest dążenie do tego aby ukrywać to co się znajduje wewnątrz klasy,
 a później obiektu powstałego na podstawie tej klasy. Jednocześnie udostępniając na zewnątrz 
 zbiór metod za pomocą których można używać obiektów danej klasy.
 
 Dokładnie to zrobiliśmy w przykładzie powyżej, nie mamy żadnej publicznej właściwości, przez co nie 
 eksponujemy tego jak nasz obiekt wygląda wewnątrz. Udostępniamy tylko metody dzięki którym nasz 
 obiekt może wchodzić w interakcję z otoczeniem.
 
 Jednym z powodów dlaczego tak należy robić jest fakt, że w naszej pracy (prawie) nigdy nie będziemy pracować samodzielnie. Będziemy pracować w zespole realizując projekty przypisane do danego zespołu. 
 Tworząc klasę która ma zapewniać pewną funkcjonalność i która będzie używana przez inne osoby skupiamy się nad tym jak ta klasa ma działać. Powodem jest fakt, że osoba która będzie używać obiektów tej klasy
 generalnie nie interesuje jej wewnętrzna struktura, tylko to jakie zapewnia możliwości, czyli jakie metody udostępnia publicznie i co za ich pomocą można zrobić. 
 */

/*
 Na pewno w swojej przygodzie z programowaniem spotkasz się z akkcesorami do właściwości czyli tak zwanymi

 getterami i setterami.
 
 Powróćmy do naszego pierwotnego przykładu.
 */

// class Flat
// {
//     private bool $closed = true;

//     // geter
//     public function getClosed(): bool
//     {
//         return $this->closed;
//     }

//     // seter
//     public function setClosed(bool $value): void
//     {
//         $this->closed = $value;
//     }
// }

/*
 Wywołanie gettera powoduje zwrócenie wartości konkretnej właściwości
 Natomiast wywołanie settera powoduje ustawienie przesłanej wartości dla konkretnej właściwości.
 
 Tworzenie tego typu metod w obiektach nadal jest dosyć popularne, jednak od pewnego czasu można zaobserwować tendencje odchodzenia od tego.
 Ma to związek z tym o czym wspominaliśmy na samym początku rozdziału o obiektach.
 Programowanie obiektowe to dążenie do odwzorowania rzeczywistości.
 
 Teraz zadajmy sobie pytanie czy metody "getClosed" i "setClosed" mają przełożenie na rzeczywistość?
 Czy te funkcjonalności które możemy za ich pomocą zrobić nie lepiej oddają metody: "open", "close", "isOpen"?
 Która opcja lepiej odwzorowuje rzeczywistość. 
 
 Pamiętamy, że nazwy metod (właściwości również) powinny być opisowe, przez co druga konwencja wydaje się o wiele bardziej opisowa.
 
 Na pewno zetkniesz się z jednym albo drugim podejściem, ewentualnie mix obu, dlatego o tym wspominał.
 W dalszej części kursu skupię się jednak na podejściu beż użycia setterów i getterów.
 
 UWAGA: w niektórych przypadkach użycie setterów i getterów jest uzasadnione, ale to zależy od kontekstu i "typu" obiektu,
 jednak to już dotyka bardziej zaawansowanych kwestii i do tego tematu wrócimy w przyszłych kursach.
 */



// KONSTRUKTOR (destructor)

/*
 Wspomniałem wcześniej, ze utworzenie nowego obiektu na podstawie klasy wygląda jak wywołanie funkcji.
 Tak naprawdę dużo nie rozmijamy się z prawdą w tym przypadku.
 Przy każdym tworzeniu obiektu wywołuje się konstruktor.
 
 Konstruktor nie jest niczym innym jak metodą zdefiniowaną w klasie.
 Nie musimy jej ręcznie wywoływać.
 Zostanie wywołany automatycznie gdy tylko będziesz tworzył nowy obiekt.
 
 Jeśli chodzi o implementację konstruktora to metoda która nim jest ma specjalną nazwę: __construct
 */

//class SomeClass 
// {
//     public function __construct()
//     {
//         echo "Hej to ja, konstruktor Twojej klasy. Ja istnieję !!!\n";
//     }
// }

// $object = new SomeClass();

/*
 Co jeszcze odróżnia konstruktor od zwykłej metody.
 W konstruktorze nie możemy zadeklarować zwracanego typu.
 Próba deklaracji skończy się informacją o błędzie gdy będziemy próbowali utworzyć nowy obiekt.
 
 Teraz można zadać sobie pytanie. 
 Po co nam konstruktor, przecież do tej pory dobrze sobie bez niego radziliśmy.
 
 Konstruktor służy do wstępnego skonfigurowania nowo powstającego obiektu, 
 poprzez odpowiednie ustawienie jego właściwości
 Do tej pory nie potrzebowaliśmy tego robić, dlatego nie używaliśmy konstruktora.
 
 Przyjrzyjmy sie jednak naszej klasie Flat trochę uważniej
 */

// class Flat
// {
//     private string $doorLockCode = '123qwe';

//     private bool $closed = true;

//     public function close(): void
//     {
//         $this->closed = true;
//     }

//     public function open(string $code): void
//     {
//         if ($code === $this->doorLockCode) {
//             $this->closed = false;
//         } else {
//             // logowanie informacji o próbie użycia niepoprawnego kodu
//         }
//     }

//     public function isOpen(): bool
//     {
//         return !$this->closed;
//     }
// }

/*
 Widzimy, ze na stałe mamy przypisany kod do drzwi.
 I każdy nowo powstały obiekt mieszkania ma taki sam.
 Logicznie myśląc to chyba coś jest nie tak.
 Nie chcielibyśmy aby do wszystkich sprzedanych mieszkań powstałych na planie naszej klasy
 był ustawiony taki sam kod.
 
 Wiemy ze konstruktor to tak naprawdę metoda, a metoda to funkcja osadzona wewnątrz klasy.
 Tak więc do konstruktora możemy przekazywać parametry
 */

// class Flat
// {
//     private int $doorLockCode;

//     private bool $closed = true;

//     public function __construct(int $doorCode) 
//     {
//         if (strlen((string) $doorCode) < 6) {
//             echo "Kod jest za krótki \n";
//         } else {
//             $this->doorLockCode = $doorCode;
//         }
//     }

//     public function close(): void
//     {
//         $this->closed = false;
//     }

//     public function open(int $code): void
//     {
//         if ($code === $this->doorLockCode) {
//             $this->closed = true;
//         } else {
//             // logowanie informacji o próbie użycia niepoprawnego kodu
//         }
//     }

//     public function isOpen(): bool
//     {
//         return !$this->closed;
//     }
// }

// $newDorrCode = rand(100000, 999999);
// $flat = new Flat(123);

/*
 W konstruktorze, oprócz tego ze ustawiamy wartość początkową 
 możemy tez dodać reguły walidacji dla przekazanego kodu, dzięki temu 
 będziemy pewni, ze mieszkanie jest odpowiednio zabezpieczone.
 
 Do sprawdzania długości int, posłużyłem się sztuczką z rzutowaniem.
 
 Oczywiście w konstruktorze możemy zawrżec nie tylko reguły walidacji ale w sumie co tylko nam się podoba :)
 Ograniczeni jesteśmy tylko sensownością tego co tam się znajdzie.
 */

/*
 Gwoli ścisłości zaznaczę jeszcze ze istnieje oprócz konstruktora również destruktor, 
 który jest automatycznie wywoływany kiedy obiekt przestaje istnieć. 
 Jednak destruktory praktycznie nie są używane, wiec z czystym sumieniem można pominąć ich temat
 */

 /* Wspomnę jeszcze że o nasze klasy należy dbać. 
 To znaczy klasy a co za tym idzie obiekty które na ich podstawie tworzymy muszą być wyspecjalizowane.
 Odpowiadać za jedną spójną dziedzinę.
 Na początku jest pokusa aby do klas upychać wszystko jak popadnie. Jednak to nie jest słuszne podejście.
 
 Drugą istotną sprawą jest trzymanie porządku w kodzie.
 Konstrukcja klasy powinna wyglądać następująco
 */
/*
    class SomeClass()
    {
        // Stałe publiczne - będziemy o nich mówić    
        // Stałe prywatne - będziemy o nich mówić    

        // Właściwości statyczne publiczne - będziemy o nich mówić
        // Właściwości statyczne prywatne - będziemy o nich mówić
        // Metody statyczne publiczne - będziemy o nich mówić
        // Metody statycznie prywatne - będziemy o nich mówić

        // Właściwości publiczne
        // Właściwości prywatne

        // Konstruktor

        // Metody publiczne
        // Metody prywatne
    }
*/




// STAŁE ORAZ METODY I WŁAŚCIWOŚCI STATYCZNE

/*
 O stałych w kontekście globalnym, czyli widocznych w dowolnym miejscu kodu który tworzymy mówiliśmy już na początku kursu.
 
 Istnieje jeszcze jeden rodzaj stałych, mianowicie stałe klasy.
 Definiujemy je w klasie przy użyciu słowa 'const'.
 */

// class SomeClass
// {
//     const BAR = 'bar'; // publiczna
//     public const FOO = 'foo';
//     private const ZAZ = 'zaz';

//     private bool $tmp = true;

//     public function doSomething()
//     {
//         echo self::ZAZ;
//     }
// }

//echo SomeClass::FOO . "\n";
//echo SomeClass::ZAZ . "\n";

//$object = new SomeClass();
//var_dump($object);
//$object->doSomething();
//var_dump(SomeClass::ZAZ);

/*
 Od wersji 7.1 możemy używać modyfikatorów dostępu w kontekście stałych.
 Jeśli nie użyjemy żadnego to stała domyślnie jest publiczna.
 
 Przy nazewnictwie stałych obowiązują te same dobre praktyki co przy stałych globalnych.
 Do stałej musimy przypisać konkretną wartość np. string, tablica, nie mogą to być jednak wyrażenia, 
 czyli zmienne, właściwości czy rezultat zwrócony przez wywołanie funkcji/metody
 
 Do stałej odwołujemy się przez nazwę klasy oraz użycie podwójnego dwukropka "::"
 Z wnętrza klasy do prywatnej (nie tylko) stałej odwołujemy się za pomocą słowa "self", które wskazuje na nazwę klasy.
 Istotny jest fakt, że nie potrzebujemy używać znaku dolara "$" przed nazwą stałej.
 
 Stałe są inicjalizowane tylko raz gdy PHP wczyta kod klasy 
 a nie za każdym razem gdy tworzymy nowy obiekt danej klasy.
 Ważne jest to aby o tym wiedzieć. 
 */


/*
STATYKI
 
 Właściwości i metody żyją/egzystują tylko i wyłącznie z obiektami.
 W klasie je tylko definiujemy a w obiektach operujemy na nich.
 Każdy obiekt stanowi tak jakby zamknięto całość. 
 To co dzieje się wewnątrz obiektu nie wychodzi poza ten obiekt.
 To znaczy, że jak dla jednego obiektu ustawimy właściwość na pewną wartość
 To w innych obiektach ta wartość się nie zmieni.
 
 A co w przypadku gdybyśmy chcieli jednak posiadać właściwość lub metodę 
 współdzieloną pomiędzy wszystkie obiekty, które powstały z danej klasy.
 Zmiana wartości tej metody automatycznie byłaby widoczna we wszystkich obiektach
 utworzonych z tej klasy.
 
 Powyższą funkcjonalność możemy uzyskać za pomocą właściwości i metod statycznych (static).
 Tworzymy je za pomocą słowa 'static' dodawanego przed nazwą właściwości/metody.
 Tutaj również mają zastosowanie modyfikatory widoczności.
 */

// class SomeClass
// {
//     public static string $foo;
//     private static string $baz;

//     public static function doSomething()
//     {
//         self::$baz = 'Wartość prywatnej zmiennej statycznej';
//         echo "Metoda się wykonała\n";
//         var_dump(self::$baz);
//     }
// }

//SomeClass::$foo = 'foo foo';
//var_dump(SomeClass::$foo);
//SomeClass::doSomething();
//SomeClass::$baz; // ERROR

/*
 Dostęp do statycznej właściwości/metody uzyskujemy przez użycie podwójnego dwukropka: "::"
 Z zewnątrz klasy musimy się nazwą klasy aby uzyskać dostęp do właściwości/metod statycznych.
 Natomiast z wnętrza klasy posługujemy się słowem "self" które wskazuje na klasę w której się znajduje.
 
 W odróżnieniu od stałych właściwościom statycznym jak najbardziej możemy zmieniać przypisane do nich wartości.
 Konwencja nazewnicza obowiązuje taka jak przy nazywaniu zmiennych.
 Musimy używać znaku dolara "$" przy odwoływaniu się do właściwości/metody statycznej
 
 Widzimy, że aby użyć parametrów statycznych nie musimy w cale tworzyć nowych obiektów.
 Dzieje się tak dlatego że parametry statyczne są związane z klasą a nie z obiektem.
 Istnieją bez potrzeby utworzenia choćby jednego obiektu danej klasy.
 Nawet posiadają swój odpowiednik $this, którym jest "self" o którym wspomnieliśmy przed momentem.
 
 Oczywiście możemy używać jednocześnie właściwości/metod statyczny i zwykłych.
 
 UWAGA:
 Z zewnątrz do właściwości statycznych/metod można odwołać się też przy użyciu nazwy obiektu:
 $object::$staticProperty
 $object::staticMethod();

 Do metod można się też odwołać za pomocą strzałki
 $object->staticMethod();
 Ja osobiście unikam powyższych możliwości, ponieważ powodują niepotrzebne zaciemnianie kodu.
 Dzięki temu, że jesteśmy konsekwentni i używamy nazwy klasy nasz kod i nasze intencje stają się czytelniejsze
 
 Rozważmy problem biznesowy:
 Wyobraźmy sobie sytuację, że nasza klasa Flat jest szablonem mieszkań które developer buduje i chce sprzedać. Developer musi wiedzieć ile mieszkań się sprzedało do tej pory aby nie sprzedać więcej niż wybudował. 
 
 Jedno z możliwych rozwiązań mogłoby wyglądać następująco.
 
 Mocno upraszczam naszą klasę Flat, aby wyeksponować to co nas w danej chwili interesuje.
 */

// class Flat
// {
//     private const BUILT = 5;
    
//     private static int $sold = 0;

//     public static function sold(): int
//     {
//         return self::$sold;
//     }

//     public function __construct()
//     {
//         if (self::$sold < self::BUILT) {
//             self::$sold += 1;
//         } else {
//             echo "Sprzedano wszystkie mieszkania\n";
//             //TODO: zgłoszenie błędu o niemożliwości sprzedaży
//         }
//     }
// }

// $flat1 = new Flat();
// var_dump($flat1::sold());
// $flat2 = new Flat();
// new Flat();
// $flat4 = new Flat();
// new Flat();
// var_dump(Flat::sold());
// new Flat();
// new Flat();
// var_dump(Flat::sold());

/*
 W prywatnej stałej umieściliśmy informację o liczbie wybudowanych mieszkań. 
 
 Przy tworzeniu nowego obiektu klasy Flat zwiększamy licznik sprzedaży o 1 za pomocą konstruktora,
 który jak pamiętamy wykonuje się zawsze przy kreacji obiektu. Zmiana ta będzie automatycznie widoczna we wszystkich wcześniej już utworzonych obiektach.
 
 Sprawdzamy też ile mieszkań do tej pory się sprzedało. Jeśli została przekroczona liczba sprzedanych mieszkań to informujemy o tym użytkownika i zgłaszamy odpowiedni błąd.
 
 Właściwość statyczna "sold" jest prywatna, dlatego, że chcemy mieć pełną kontrolę nad tym ile mieszkań się sprzedało.
 Wykluczamy sytuację, że ktoś kto będzie używał naszej klasy ręcznie zmodyfikuje wartość która jest przechowywana w $sold.
 Nie ma po prostu takiej możliwości.
 
 Oczywiście jeśli ktoś pokusi się o modyfikacje naszego kodu, może choćby zmienić widoczność naszej właściwości, ale na to już nic nie poradzimy.
 
 UWAGA 1.
 W metodach statycznych nie można używać właściwości $this, natomiast w zwykłych metodach jak najbardziej możemy używać "self". 
 Wytłumaczenie jest bardzo logiczne.
 Self - istnieje zawsze i odwołuje się do klasy, natomist $this istnieje tylko w kontekście obiektu
 
 UWAGA 2.
 Przedstawione rozwiązanie nie jest najlepszym rozwiązaniem zaistniałego problemu, ale powinno działać 
 i dobrze obrazuje zastoswoanie statyków, a to był główny cel tego przykładu.
 */

// class SomeClass
// {
//     private string $foo;

//     public static function test()
//     {
//         $this->foo = 'value';
//     }
// }

// SomeClass::test();

/*
 Podczas użycia metody statycznej "test" nie mamy pojęcia czy istnieje już jakiś obiekt aby się do niego odwołać.
 Jednak nawet gdyby istniało kilka obiektów to do którego obiektu $this ma się odnosić?
 Dlatego z tych przyczn użycie $this w metodach statycznych jest zabronione
 */


 



// DZIEDZICZENIE

/*
 Przechodzimy do kwintesencji naszego rozdziału o klasach i obiektach.
 
 Z dziedziczeniem w programowaniu jest trochę tak jak w rzeczywistości.
 Istnieje rodzić, w PHP tylko jeden i istnieje dziecko lub dzieci.
 Dzieci dziedziczą geny, czyli właściwości i metody po rodzicu, ale mogą również wykształcić 
 własne geny, czyli właściwości i metody.
 
 Jak to wygląda od strony technicznej?
 Dziedziczenie opiera się na istnieniu klasy bazowej (rodzica), 
 która może się dzielić z klasami potomnymi (dziećmi) swoimi funkcjonalnościami (właściwości i metody).
 Klasa potomna (dziecko) może dziedziczyć tylko po jednej klasie bazowej.
 
 A jak to wygląda od strony kodu?
 */

// class ClassParent
// {

// }

// class Child extends ClassParent
// {

// }

/*
 Aby móc zastosować dziedziczenie trzeba użyć słowa "extends".
 Po lewej stronie "extends" mamy klasę która będzie dzieckiem, 
 natomiast po prawej wskazujemy klasę, która będzie rodzicem.
 
 Nasz przykład jest hmm ... trochę wydumany, 
 więc posłużmy sie teraz trochę bardziej realnym przykładem.
 */

// class User 
// {
//     public string $login = 'userLogin';
//     private string $topSecret = 'secret';

//     public function __construct() 
//     {
//         // ....
//     }
// }


// class Client extends User
// {
//     public int $number = 111;

//     public function __construct()
//     {   
//         var_dump($this->login);
//         var_dump($this->number);
//         //var_dump($this->topSecret);
//     }
// }

// class Admin extends User
// {
//     public string $role = 'superuser';

//     public function __construct()
//     {   
//         var_dump($this->login);
//         var_dump($this->role);
//         //var_dump($this->topSecret);
//     }
// }


// $user = new User();
// $client = new Client();
// $admin = new Admin();

/*
 Mamy klasę User, która jest rodzicem dla klas Client i Admin.
 Przykład nadal jest dość abstrakcyjny ale już odrobinę bardziej obrazowy.
 
 Klasa User ma zdefiniowane dwie właściwości, jedną publiczną i drugą prywatną. 
 W klasach potomnych czyli dzieciach czyli Client i Admin
 tworzymy konstruktor w którym wyświetlamy właściwości pochodzące od rodzica.
 Uzyskany efekt może nie być do końca taki jak na początku sobie założyliśmy.
 
 Widzimy że właściwość publiczną udało się wyświetlić w obu klasach potomnych.
 Jednak jest problem z właściwością prywatną. 
 Jednak cofnijmy się parę lekcji wstecz i przypomnijmy sobie czym jest prywatny modyfikator dostępu.
 
 Mówi on nam, że właściwość/metoda nie jest widoczna z poza obiektu który jest instancją danej klasy. 
 (skrótowo można powiedzieć, "z poza klasy")
 Teraz dochodzimy do sedna problemy. 
 
 Obiekty utworzone z klasy potomnej nie mają dostępu do właściwości/metod prywatnych rodzica.
 Natomiast bez problemu uzyskują dostęp i dziedziczą publiczne właściwości/metody pochodzące od rodzica.
 To jest bardzo ważna informacja, którą trzeba zapamiętać.
 
 A co w przypadku gdybyśmy jednak chcieli w klasach potomnych mieć odziedziczoną właściwość prywatną,
 ponieważ nie jest ona widoczna z zewnątrz klasy?
 Tutaj z pomocą przychodzi nam modyfikator PROTECTED, wspomnieliśmy o niem wcześniej, ale dopiero teraz 
 dysponujemy odpowiednią wiedzą, że sensowne jest jego omówienie.
 
 PROTECTED - właściwość/metoda jest chroniona i nie ma do niej dostępu z poza obiektu, jednak w przeciwieństwie do PRIVATE jest dziedziczona i jest widoczna w klasach potomnych
 */

// class User 
// {
//     public string $login = 'userLogin';
//     protected string $topSecret = 'secret protected';
// }


// class Client extends User
// {
//     public int $number = 111;

//     public function __construct()
//     {   
//         var_dump($this->login);
//         var_dump($this->number);
//         var_dump($this->topSecret);
//     }
// }


// class Admin extends User
// {
//     public string $role = 'superuser';

//     public function __construct()
//     {   
//         var_dump($this->login);
//         var_dump($this->role);
//         var_dump($this->topSecret);
//     }
// }


// $user = new User();
// $client = new Client();
// $admin = new Admin();

// $admin->topSecret;





/*
 Po zmianie modyfikatora z prywatnego na protected nasz przykład nie zgłasza już żadnego błędu
 oraz mamy już dostęp do właściwości $secret pochodzącej z rodzica.
 
 Klasy potomne mogą rozszerzać funkcjonalność rodzica poprzez definiowanie nowych właściwości/metod,
 co możemy zaobserwować w naszym przykładzie.
 Dzięki czemu stają się coraz bardziej wyspecjalizowane.
 
 Dziedziczenie możemy sobie zobrazować jak odwrócone drzewo, gdzie na samej górze jest główny korzeń
 z którego wychodzą kolejne gałęzie reprezentujące tak zwany "poziom dziedziczenia".
 
 O dziedziczeniu możemy też powiedzieć, że jest to droga od ogółu do szczegółu, 
 to znaczy od klas najbardziej ogólnych do najbardziej wyspecjalizowanych.
 
 Np.
 class Vehicle
 
 class Train extends Vehicle
 class Plane extends Vehicle
 class Car extends Vehicle
 
 CargoTrain extends Train
 PassengerTrain extends Train
 
 Fighter extends Plane
 Bomber extends Plane
 
 StealthFighter extends Fighter
 ...
 
 Widzimy, że poziomów dziedziczenia możemy tworzyć bardzo dużo.
 Dochodząc do coraz bardzie wyspecjalizowanych obiektów.
 
 UWAGA. Dobra praktyką jest jednak nie przesadzanie ze zbyt dużą liczbą poziomów dziedziczenia.
 Starajmy się zamknąć maksymalnie w trzech poziomach.
 Oczywiście gdy wyjdzie nam o jeden poziom więcej to świat się nie zawali, ale to będzie już oznaczało
 że coś trochę przekombinowaliśmy i może warto się głębiej zastanowić nad naszym projektem.
 
 UWAGA. Spotkacie się pewnie ze stwierdzeniem.
 Kompozycja ponad dziedziczenie.
 Stwierdzenie to jest jak najbardziej słuszne. Kompozycja to już bardziej zaawansowany temat.
 W dużym uproszczeniu mówi on nam, że lepiej komponować obiekty z innych obiektów, 
 polegać głównie na dziedziczeniu i budować bardzo duże drzewa dziedziczenia.
 
 PS. Tak, do właściwości w obiektach możemy przypisywać inne obiekty
 */

/*
 Bardzo ważną kwestią przy dziedziczeniu są konstruktory.
 
 Rozważmy następujący przykład.
 */

// class Rodzic
// {
//     protected ?string $nazwa = null;

//     public function __construct(string $nazwa)
//     {
//         $this->nazwa = $nazwa;
//     }

//     public function pobierzNazwe(): ?string
//     {
//         return $this->nazwa;
//     }
// }

// $obiektRodzica = new Rodzic('testowa nazwa rodzica');
// var_dump($obiektRodzica->pobierzNazwe());

// class Dziecko extends Rodzic
// {

// }

// $obiektDziecko = new Dziecko('testowa nazwa dziecka');
// var_dump($obiektDziecko->pobierzNazwe());

/*
 W tym przykładnie specjalnie posługujemy się polskimi nazwami, 
 jednak tylko po to aby zobrazować jak to dziwnie wygląda.
 
 Pamiętajmy, że język angielski jest językiem nauki oraz językiem IT
 
 Dokończę już temat konstruktorów w języku polskim, jednak później świadomie w kodzie już go nie będę używał.

 Wracając jednak do przykładu.
 Widzimy że w klasie potomnej nie zadeklarowaliśmy konstruktora.
 W takim przypadku standardowo będzie on odziedziczony z klasy rodzica i wszystko działa tak jak należy
 
 Teraz dokonajmy drobnej modyfikacji w klasie dziecka
 */

// class Rodzic
// {
//     protected ?string $nazwa = null;

//     public function __construct(string $nazwa)
//     {
//         $this->nazwa = $nazwa;
//     }

//     public function pobierzNazwe(): ?string
//     {
//         return $this->nazwa;
//     }
// }

// $obiektRodzica = new Rodzic('testowa nazwa rodzica');
// var_dump($obiektRodzica->pobierzNazwe());

// class Dziecko extends Rodzic
// {
//     public function __construct(int $numer, string $tekst)
//     {
        
//     }
// }

// $obiektDziecko = new Dziecko(111, 'testowa nazwa dziecka');
// var_dump($obiektDziecko->pobierzNazwe());

/*
 W klasie potomnej zawsze możemy nadpisać metodę/właściwość pochodzącą z klasy rodzica.
 W tym przypadku jest to konstruktor.
 
 Wywołując metodę pobierzNazwe widzimy że dostajemy wartość NULL, czyli wartość domyślna, 
 w związku z tym widzimy, że nasza właściwość się nie ustawiła. 
 Dzieje się tak dlatego, że nadpisaliśmy konstruktor rodzica i tworząc obiekt dziecka wykonuje się konstruktor z dziecka.
 
 Istnieje jednak sposób na wykonanie konstruktora rodzica dzięki zastosowaniu słowa "parent".
 Dzięki temu słowu jesteśmy w stanie odwołać się do dowolnej metody pochodzącej z rodzica i wywołać ją taką jaka była w rodzicu.
 W naszym przypadku jest to właśnie konstruktor.
 */

// class Dziecko extends Rodzic
// {
//     public function __construct(string $nazwa, int $numer)
//     {
//         parent::__construct($nazwa);
//     }
// }

// $obiektDziecko = new Dziecko('testowa nazwa dziecka', 111);
// var_dump($obiektDziecko->pobierzNazwe());

/*
 Teraz z powrotem nasz przykład działa tak jak powinien.
 
 UWAGA:
 W klasie potomnej możemy nadpisać każdą metodę z klasy rodzica łącznie z konstruktorem.
 Trzeba jednak pamiętać aby "definicja" nowej metody rozszerzała "definicję" metody rodzica.
 
 Mocno upraszczając deklaracja funkcji/metody to zbiór informacji o niej, czyli
 - nazwa
 - informacja o liści argumentów do niej przekazanych
 - informacja o typie zwracanych danych
 
 Jeśli wprowadzone przez nas zmiany w definicji metody, którą nadpisujemy zmienią ją na tyle, 
 że PHP uzna że już nie jest "kompatabilna" z definicją rodzica to zostaniemy o tym poinformowani
 stosownym komunikatem błędu.
 "Declaration of Dziecko::pobierzNazwe(?int $bar, string $cos): ?string should be compatible with Rodzic::pobierzNazwe()"
 Nasz kod wprawdzie się wykona, ale zostaniemy i tak poinformowani o tym, że coś jest nie tak.
 Ten temat już odrobinę wykracza poza zakres tego kursu, więc wrócimy do niego w następnych kursach już na trochę wyższym 
 stopniu zaawansowania.
 
 Napomknę jednak, że jeśli chodzi o konstruktory to tutaj mamy trochę inną sytuację. 
 Mianowicie, możemy bez konsekwencji zmieniać listę łącznie z typami argumentów przekazywanymi do konstruktóra.
 Co zrobiliśmy w naszym przykładzie.
 
 UWAGA:
 Dobrą zasadą jest to aby utrzymywać jak największa spójność definicji konstruktora w dziecku z rodzicem.
 Mimo, że możemy go całkiem zmienić, to jednak przykładowo jeśli potrzebujemy dodać nowy argument, to 
 dodajmy go na końcu listy argumentów, na początku pozostawiając te pochodzące z konstruktora rodzica.
 Oczywiście jeśli nadal te argumenty są potrzebne.
 
 Mając to na uwadze zmodyfikujemy jeszcze raz naszą klasę Dziecko.
 */

// class Dziecko extends Rodzic
// {
//     public function __construct(int $numer, string $tekst)
//     {
//         parent::__construct($tekst);
//     }
// }



/*
 KLASY ABSTRAKCYJNE
 
 Omówiliśmy sobie klasy, teraz przyszła kolej na klasy abstrakcyjne.
 
 Jeśli klasa jest wzorcem do tworzenia nowych obiektów,
 to w takim razie klasa abstrakcyjna jest wzorcem dla klas potomnych.
 
 Różnicą pomiędzy zwykłą klasą, a klasą abstrakcyjną jest taka, 
 że z klasy abstrakcyjnej nie jesteśmy w stanie stworzyć obiektu.
 
 Aby oznaczyć klasę jako abstrakcyjną używamy słowa "abstract" przed słowem "class"
 */

// class ClassParent {}
// class Child extends ClassParent {};

// $parent = new ClassParent();
// $child = new Child();
// var_dump($parent);
// var_dump($child);

/*
 Tutaj wszystko jest ok,
 teraz zmodyfikujmy odrobinę nasz przykład
 */

// abstract class AbstractParent {}
// class ChildFromAbstract extends AbstractParent {}

// $child = new ChildFromAbstract();
// var_dump($child);
// $parent = new AbstractParent();
// var_dump($parent);

/*
 Przy próbie uruchomienia kodu dostajęmy błąd z informacją, żen ie możemy zinstancjonować klasy abstrakcyjnej.
 
 Ok, wiemy już czego nie możemy zrobić z klasą abstrakcyjną, teraz powiedzmy co możemy.
 Wspomniałem na początku że klasa abstrakcyjna jest szablonem dla klas potomnych, które po niej dziedziczą. 
 
 Klasa abstrakcyjne może (ale nie musi) posiadać tak jak normalna klasa zwykłe metody i właściwości.
 W klasie abstrakcyjnej dodatkowo możemy zadeklarować puste deklaracje metod. 
 Takie metody musimy oznaczyć jako abstrakcyjne.
 
 Jeśli w klasie mamy choć jedną metodę abstrakcyjną to cała klasa musi zostać oznaczona jako abstrakcyjna.
 */

// abstract class SomeClass 
// {
//     protected string $property;

//     abstract function doSomething(string $param1, array $param2): object;

//     public function property(): string
//     {
//         return $this->property;
//     }
// }

/*
 W przykładzie widzimy, że zadeklarowaliśmy jedną metodę abstrakcyjną. 
 To co widzimy to tak naprawdę jest deklaracją metody, czyli określamy jej nazwę, listę argumentów i typ zwrotny.
 
 Oznaczenie metody jako abstrakcyjnej oznacza, że wszystkie klasy które dziedziczą po klasie abstrakcyjnej
 muszą zaimplementować tą metodę (czyli stworzyć ciało metody).
 Klasa abstrakcyjna poprzez metody abstrakcyjne WYMUSZA to co musi znajdować się w klasach dziedziczących po niej.
 
 Dobrym przykładem zastosowania klas abstrakcyjnych jest sytuacja, gdzie tworzymy jakąś bardzo ogólną klasę np. Renderer.
 Zakładamy już na samym początku, że to będzie klasa bazowa po której będzie następowało dziedziczenie.
 Potrafimy przewidzieć i od razu zaimplementować część metod które będą się znajdować w klasie Renderer
 */

// class Renderer 
// {
//     protected string $text;

//     public function __construct(string $text)
//     {
//         $this->text = $text;
//     }

//     public function text(): string
//     {
//         return $this->text;
//     }
// }

/*
 Jednak nie jesteśmy przewidzieć jak zaimplementować pewne specyficzne zachowania w klasach potomnych, 
 które jednak wiemy że będą mieć miejsce.
 
 Podstawową odpowiedzialności za którą będzie odpowiadać jest wyrenderowanie tekstu w konkretnym formacie, np html, json itp
 W związku z czym brakuje nam metody "render" jednak w ogólnej klasie Renderer nie wiemy jaki format jest oczekiwany.
 Dlatego taką metodę oznaczamy jako abstrakcyjną, przez co klasy potomne będą musiały ją zaimplementować.
 */

// abstract class Renderer
// {
//     protected string $text;

//     public function __construct(string $text)
//     {
//         $this->text = $text;
//     }

//     public abstract function render(): string;

//     public function text(): string
//     {
//         return $this->text;
//     }
// }


// class HtmlRenderer extends Renderer
// {
//     public function render(): string
//     {
//         return '<html><head></head><body><div>' . $this->text . '</div></body></html>';
//     }
// }

// class JsonRenderer extends Renderer
// {
//     public function render(): string
//     {
//         return json_encode($this->text);
//     }
// }

/*
 Klasy HtmlRenderer i JsonRenderer są już mocną wyspecjalizowane, dzięki temu są świadome w jaki sposób mają zaimplementować
 abstrakcyjną metodę odziedziczoną po rodzicu
 */

/*
 UWAGA.
 Jeśli implementujemy funkcje abstrakcyjne w klasach potomnych to nie jesteśmy już w stanie zmienić w żaden sposób ich deklaracji,
 tak jak mieliśmy pewną taką możliwość jeśli przesłanialiśmy zwykłe metody (nie abstrakcyjne) odziedziczone z klasy rodzica
 */



/*
 INTERFEJSY
 
 Przed chwilą mówiliśmy o klasach abstrakcyjnych, które są wzorcami dla klas które po nich dziedziczą.
 
 Interfejsy wychodzą jeszcze o poziom wyżej.
 W interfejsie znajdują się deklaracje metod oraz stałe które mają się znaleźć w klasach,
 które ten interfejs implementują. 
 
 Aby utworzyć interfejs używamy słowa: "interface",
 natomiast aby go zaimplementować należy użyć "implements"
 */
 
// interface ExampleInterface
// {
//     public function doSomething1(int $arg): string;
//     public function doSomething2(string $arg1, string $arg2): void;
// }
 
// class Example implements ExampleInterface
// {
//     public function doSomething1(int $arg): string
//     {
//         return 'bar';
//     }

//     public function doSomething2(string $arg1, string $arg2): void
//     {
//         // ...
//     }
// }

/*
 Widzimy, ze w przykładowym interfejsie deklarujemy dwie metody.
 Klasa, która implementuje ten interfejs musi obie zaimplementować
 w przeciwnym wypadku zostanie zgłoszony błąd.
 
 Co musimy wiedzieć o interfejsach:
 - mogą zawierać tylko stałe i deklaracje metod
 - stałe i metody muszą być publiczne
 - metody nie mogą zawierać ciała, czyli implementacji
 - klasa może implementować więcej niz jeden interfejs
 - interfejsy mogą dziedziczyć po innych interfejsach ale nie po klasach
 - w klasach, które implementują interfejs nie można zmieniać definicji metod pochodzących z interfejsu
 - klasa które implementuje interfejs może mieć równie inne metody nie pochodzące z interfejsu
 */



/* 
 Ja interfejsy postrzegam jako kontrakt.
 Zapisujemy w nim wymagania jakie będzie musiała spełnić klasa, która będzie go implementować.
 Klasa, która zdecyduje się podpisać kontrakt (czyli zaimplementować interfejs), ma obowiązek
 spełnić, zapisy zawarte w kontrakcie, czyli zaimplementować metody zawarte w kontrakcie.
 
 Sam interfejs nie narzuca jak ma być dana metoda zaimplementowana, to leży w odpowiedzialności
 klasy. Mamy tutaj pełną dowolność. Najważniejsze z punktu widzenia interfejsu jest aby były
 spełnione wymagania co do nazwy, listy argumentów i zwracanych danych.
 
 Interfejs można potraktować tez jako instrukcję obsługi klasy, która go implementuje.
 Pamiętamy o tym, ze używamy nazw metod, argumentów, zmiennych które są opisowe.
 Dzięki temu otwierając interfejs i przeglądając deklaracje metod juz wiemy jak 
 możemy danej klasy używać. Nie musimy wgryzać się w sam kod klasy jeśli chcemy jej tylko użyć.
 Wystarczy, ze zapoznamy się z interfejsem który implementuje.
 
 UWAGA: pamiętać o odpowiednim nazewnictwie.
 
 
 Często zapewne spotkacie się z pytaniem czym różni się klasa abstrakcyjna od interfejsu?
 
 Podstawową różnicą jest fakt, ze klasa abstrakcyjna może zawierać oprócz metod abstrakcyjnych 
 inne metody w pełni zaimplementowane. Może również zawierać właściwości, oraz może używać
 modyfikatorów nie tylko publicznych do określania widoczności właściwości/metod.
  
 Pamiętajmy tez o tym, ze to jest klasa, czyli podlega dziedziczeniu, w związku z tym klasa potomna
 może dziedziczyć tylko po jednej klasie. Natomiast jak juz wiemy, klasa może implementować wiele 
 interfejsów.
 
 Klasa abstrakcyjna również moze implementować interfejsy
 */

/*
 Wróćmy do naszego przykładu
 */

 
// abstract class Renderer
// {
//     protected string $text;

//     public function __construct(string $text)
//     {
//         $this->text = $text;
//     }

//     public abstract function render(): string;

//     public function text(): string
//     {
//         return $this->text;
//     }
// }


// class HtmlRenderer extends Renderer
// {
//     public function render(): string
//     {
//         return '<html><head></head><body><div>' . $this->text . '</div></body></html>';
//     }
// }

// class JsonRenderer extends Renderer
// {
//     public function render(): string
//     {
//         return json_encode($this->text);
//     }
// }
 
/*
 Możemy go teraz trochę zmodyfikować tak, aby użyć interfejsu
 */

// interface Renderable
// {
//     public function render(string $text): string;
// }

// class HtmlRenderer implements Renderable
// {
//     public function render(string $text): string
//     {
//         return '<html><head></head><body><div>' . $text . '</div></body></html>';
//     }
// }

// class JsonRenderer implements Renderable
// {
//     public function render(string $text): string
//     {
//         return json_encode($text);
//     }
// }

/*
 Zmodyfikowaliśmy trochę nasz przykład, jednak dzięki temu możemy zaobserwować jak działają interfejsy.
 
 Na samym początku przygody z programowaniem, sens istnienia interfejsów moze wydawać się hmm ...
 jako niepotrzebny narzut. Jednak interfejsy stanowią podwaliny dobrego programowania. 
 Są mocno związane z tak zwanym SOLID'em, czyli zbiorem zasad dobrego programowania.
 
 Być moze na początku nie będziecie ich używać często, ale warto zakodować sobie w pamięci co to jest
 i do czego służy. 
 */



/*
 FINAL
 
 Język PHP daje możliwość zabronienie dziedziczenia.
 Uzyskuje się to przez użycie słowa "final" przed "class"
 
 Klasa która jest oznaczona jako finalna nie może być dziedziczona. 
 */

// final class Vehicle {}
// class Car extends Vehicle {}

/*
 Czasami może się zdarzyć tak, że z jakiś powodów nie chcemy aby któraś konkretna metoda z 
 naszej klasy nie mogła być nadpisana.
 W takim przypadku wystarczy że zadeklarujemy tą metodę jako finalną. 
 */

// class Vehicle
// {
//     final public function doSomething(): void
//     {
//         echo 'foo';
//     }
// }

// class Car extends Vehicle
// {
//     public function doSomething(): void
//     {
//         echo 'bar';
//     }
// }

/*
 Po krótce omówiliśmy najważniejsze sprawy powiązane z programowaniem obiektowym.
 
 Jako pracę domową pozostawiam zaznajomienie się z Trait'sami.
 Jednak Trait'y nie są zbyt często wykorzystywanie w php. 
 Dlatego w tym kursie nie będę ich omawiał, jednak do tematu na pewno powrócimy
 w przyszłych kursach.
 */
