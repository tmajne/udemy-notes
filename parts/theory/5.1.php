<?php

declare(strict_types=1);

namespace Application;

/*
 NAMESPACES
 
 Na koniec mocno teoretycznej części kursu zostawiliśmy sobie temat przestrzeni nazw (namespace)
 
 
 Przestrzenie nazw zostały wprowadzone w php 5.3, tak więc w tej chwili ciężko będzie spotkać 
 projekt, w którym nie są stosowana. 
 Jeśli na taki się natkniecie, to wypadałoby się zastanowić czy na pewno trafiliście w dobre miejsce ;)
 
 Głównym zadaniem przestrzeni nazw jest zapobieganie kolizjom pomiędzy identycznymi nazwami klas.
 W PHP nie mogą jednocześnie istnieć dwie klasy o tych samych nazwach.
 
 Mogłoby się wydawać, ze skoro sami piszemy własną aplikację to będziemy panować nad używanymi przez nas nazwami.
 Jednak z czasem zaczniemy używać bibliotek/modułów napisanych przez inne osoby, chociażby przez 
 naszych kolegów z zespołu lub społeczność PHP. W takim przypadku nie mamy gwarancji tego,
 ze w kodzie napisanym przez innego programistę nie występuje klasa o takiej samej nazwie jak w naszym
 
 
 Czym jednak tak naprawdę jest przestrzeń nazw.
 Dla mnie jest takim wirtualnym pudełkiem, które nazywam a następnie umieszczam w nim kod.
 W ramach tego pudełka mam dowolność, w nazewnictwie klas, ponieważ wiem, ze nikt inny 
 nie stworzy klasy w moim pudełku.
 
 Zapewne w tej chwili nadal temat przestrzeni nazw jest niejasny, ale nie obawiajcie się,
 juz za chwilę, gdy zaczniemy pisać nas projekt poznamy je w boju i wtedy sprawa powinna się 
 rozjaśnić. 
 
 Zanim przejdziemy do samego programowania, podam parę podstawowych informacji o przestrzeniach.
 Do tej pory w naszych przykładach żadnej nie używaliśmy, czyli pracowaliśmy w tak zwanej 
 PRZESTRZENI GLOBALNEJ, warto o tym pamiętać, ze taka istnieje.
 
 Aby zadeklarować własną przestrzeń nazw musimy użyć słowa: "namespace"
 Deklaracja przestrzeni musi się znajdować na samym początku pliku zaraz pod linią, 
 gdzie deklarujemy chęć użycia trybu ścisłego "strict_types"
*/

// <?php

// declare(strict_types=1);

// namespace Application;

/*
 Wprawdzie istnieje możliwość zadeklarowania w jednym pliku więcej niz jednej przestrzeni nazw
 jednak przyjęło się ze jeden plik to jedna przestrzeń.
 
 
 Nazwa może być dowolna,  jednak przyjęło się zasadę ze przestrzeń nazw jest powiązana z lokalizacją pliku klasy w strukturze katalogów
 */

/*
    <?php

    declare(strict_types=1);

    namespace App\Path\To\Class;
*/

/*
 Aby użyć klasy z danej przestrzeni musimy ją najpierw zaimportować do naszego kodu.
 Dzieje się to za pomocą komendy "use"
 */

//use App\Path\To\Class\ClassName;

/*
 W tej chwili to wszystko na ten temat.
 W tej chwili dotkneliśmy tyko skrawka wiedzy o przestrzeniach.
 Jednak w trakcie implementacji naszego projektu zdobędziemy rzeczywistą wiedzę na ich temat.
 Dzięki temu będziemy od razu wiedzieć jak można je zastowsować na realnych przykładzie
 
 Do usłyszenia w projekcie :)
 */
