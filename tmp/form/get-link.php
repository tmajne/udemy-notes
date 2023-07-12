<?php

/*
Oczywiście! Jako nauczyciel języka PHP, chętnie wytłumaczę, czym są tablice superglobalne.

Tablice superglobalne w PHP są specjalnymi zmiennymi, które są dostępne w każdym zakresie (scope) programu i przechowują
informacje dotyczące środowiska wykonawczego, takie jak dane przesłane przez formularze, informacje o sesji,
zmienne serwera itp. Są to tablice asocjacyjne, co oznacza, że składają się z kluczy i odpowiadających im wartości.

Oto lista najczęściej używanych tablic superglobalnych w PHP:

$_GET:
Przechowuje dane przesłane metodą GET przez adres URL. Jest to przydatne, gdy chcesz pobierać parametry z adresu URL.

$_POST:
Przechowuje dane przesłane metodą POST przez formularz HTML. Jest to często wykorzystywane, gdy chcesz przesłać poufne lub duże ilości danych.

$_COOKIE:
Przechowuje dane cookie przesłane przez klienta i dostępne na serwerze. Pozwala na przechowywanie informacji o użytkowniku między różnymi żądaniami.

$_SESSION:
Przechowuje dane sesji dla konkretnego użytkownika. Dane przechowywane w tej tablicy są dostępne na wszystkich stronach w ramach sesji.

$_SERVER:
Przechowuje informacje o środowisku serwera i żądaniu HTTP. Zawiera informacje takie jak adres IP klienta, ścieżka do bieżącego skryptu, metoda żądania HTTP itp.

$_FILES:
Przechowuje informacje o przesłanych plikach przez formularz HTTP. Pozwala na dostęp do nazw plików, typów plików, tymczasowych lokalizacji itp.

$_ENV:
Przechowuje zmienne środowiskowe dostępne na serwerze. Można zdefiniować własne zmienne środowiskowe lub używać istniejących.

Te tablice superglobalne są dostępne w dowolnym miejscu w kodzie PHP i ich wartości mogą być odczytywane i modyfikowane.
Możesz używać ich do pobierania danych od użytkownika, przetwarzania formularzy, zarządzania sesjami i innymi podobnymi zadaniami.

Pamiętaj, że tablice superglobalne są zmiennymi globalnymi i powinny być używane ostrożnie, szczególnie jeśli chodzi
o przetwarzanie danych użytkownika. Zawsze należy sprawdzać, filtrować i walidować dane,
aby zapobiec potencjalnym zagrożeniom bezpieczeństwa.
 */

$guest = null;
if (!empty($_GET['guest'])) {
    $guest = $_GET['guest'];
}

if ($guest) {
    echo "Witaj po raz kolejny: $guest";
} else {
    $guest = 'Jan';
    echo "Witaj po raz pierwszy: $guest";
}
echo '<a href="/?guest=' . $guest . '">Link</a>';


