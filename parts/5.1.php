<?php

/**
 * NAMESPACES
 * 
 * Na koniec mocno teoretycznej części kursu zostawiliśmy sobie temat przestrzeni nazw (namespace)
 * 
 * 
 * Przestrzenie nazw zostały wprowadzone w php 5.3, tak więc w tej chwili cięzko będzie spotkać 
 * projekt, w którym nie są stosowana. 
 * Jeśli na taki się natkniecie, to wypadałoby się zastanowić czy na pewno trafiliście w dobre miejsce ;)
 * 
 * Głównym zadaniem przestrzeni nazw jest zapobieganie kolizjom pomiędzy identycznymi nazwami klas.
 * W PHP nie mogą jednocześnie istnieć dwie klasy o tych samych nazwach.
 * 
 * Mogłoby się wydawać, ze skoro sami pisemy własną aplikację to będziemy panować nad uzywanymi przez nas nazwami.
 * Jednak z czasem zaczniemy uzywać bibliotek/modułów napisanych przez inne osoby, chociazby przez 
 * naszych kolegow z zespołu lub społeczność PHP. W takim przypadku nie mamy gwarancji tego,
 * ze w kodzie napisanym przez innego programistę nie występuje klasa o takiej samej nazwie jak w naszym
 * 
 * 
 * Czym jednak tak narawdę jest przestrzeń nazw.
 * Dla mnie jest takim wirtualnym pudełkiem, które nazywam a następnie umieszczam w nim kod.
 * W ramach tego pudełka mam dowolnośc, w nazewnictwie klas, poniewaz wiem, ze nikt inny 
 * nie stworzy klasy w moim pudełku.
 * 
 * Zapewne w tej chwili nadal temat przestrzeni nazw jest niejasny, ale nie obawiajcie się,
 * juz za chwilę, gdy zaczniemy pisać nas projekt poznamy je w boju i wtedy sprawa powinna się 
 * rozjaśnić. 
 * 
 * Zanim przejdziemy do samego programowania, podam parę podstawowych informacji o przestrzeniach.
 * Do tej pory w naszych przykładach zadniej nie uzwaliśmy, czyli pracowaliśmy w tak zwanej 
 * PRZESTRZENI GLOBALNEJ globalnej, warto o tym pamiętać, ze taka istnieje.
 * 
 * Aby zadeklarować własną przestrzeń nazw musimy uzyć słowa: "namespace"
 * Deklaracja przestrzeni musi się znajdować na samym początku pliku zaraz pod linią, 
 * gdzie deklarujemy chęć uzycia trybu ścisłego "strict_types"
 */

/*
    <?php

    declare(strict_types=1);

    namespace MyNamespace;
*/

/**
 * Wprawdzie istnieje mozliwość zadeklarowania w jednym pliku więcej niz jednej przestrzeni nazw
 * jednak przyjęło się ze jeden plik to jedna przestrzeń.
 * 
 * 
 * Nazwa moze być dowolna, 
 * jednak przyjęło się zasadę ze przestrzeń nazw jest powiązana z lokalizacją pliku kalsy
 * w strukturze katalogów
 */

/*
    <?php

    declare(strict_types=1);

    namespace Path\To\Class;
*/

/**
 * Aby uzyć klasy z danej przestrzeni musimy ją najpierw zaimportować do naszego kodu.
 * Dzieje się to za pomocą komendy "use"
 */

 use Path\To\Class\ClassName;

/**
 * W tej chwili to wszystko na ten temat.
 * W tej chwili dotkneliśm tyko skrawka wiedzy o przestrzeniach.
 * Jednak w trakcie implementacji naszego projektu zdobędziemy rzeczywistą wiedzę na ich temat.
 * Dzięki temu będziemy od razu wiedzieć jak mozna je zastowsować na realnych przykładzie
 * 
 * Do usłszenia juz za chwilę :)
 */