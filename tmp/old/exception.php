<?php

// https://kursphp.com/rozdzial-6/wyjatki/
/*

W PHP wyjątki (ang. exceptions) są mechanizmem, który pozwala na obsługę i zarządzanie błędami oraz nietypowymi sytuacjami w czasie wykonywania kodu.
Wyjątki umożliwiają przerwanie normalnego przepływu programu i przeniesienie kontroli do specjalnie zdefiniowanego bloku kodu, który może obsłużyć lub zareagować na dany wyjątek.

Główne elementy związane z wyjątkami w PHP to:

try - blok kodu, w którym potencjalnie może wystąpić wyjątek. Jeśli wyjątek zostanie rzucony wewnątrz tego bloku, przechodzi się do odpowiedniego bloku catch.

catch - blok kodu, który przechwytuje i obsługuje rzucony wyjątek. Blok catch może być zdefiniowany dla różnych typów wyjątków lub ogólnego bloku, który przechwytuje wszystkie wyjątki.

throw - instrukcja używana do rzucania wyjątków wewnątrz bloku try. Wyjątki można rzucać za pomocą wbudowanych klas wyjątków lub własnych klas dziedziczących po klasie bazowej Exception.

finally - opcjonalny blok, który jest wykonywany zawsze po bloku try i catch, niezależnie od tego, czy wystąpił wyjątek czy nie. Służy do obsługi czynności,
        które muszą być wykonane niezależnie od tego, czy wyjątek wystąpił czy nie (np. zamknięcie plików lub zwolnienie zasobów).

Przykład użycia wyjątków w PHP:
*/

// https://qiita-user-contents.imgix.net/https%3A%2F%2Fqiita-image-store.s3.amazonaws.com%2F0%2F25060%2Fcb5867f8-d7f5-143d-2312-a3fa17b1ba33.png?ixlib=rb-4.0.0&auto=format&gif-q=60&q=75&s=152487d52a2c32a569d3cf068abe3c3d

try {
    // Kod, w którym może wystąpić wyjątek
    if ($condition) {
        throw new Exception("Nieprawidłowa wartość."); // Rzucanie wyjątku
    }
} catch (Exception $e) {
    // Obsługa rzuconego wyjątku
    echo "Wystąpił wyjątek: " . $e->getMessage();
} finally {
    // Kod, który zostanie wykonany zawsze
}



try {
    $bar = new Bar();
    $bar->foo();
} catch (InvalidArgumentException $e) {
    // złapie wszystkie wyjątki typu InvalidArgumentException
    // oraz wyjątki dziedziczące po tym typie
} catch (LogicException $e) {
    // złapie wszystkie wyjątki typu LogicException oraz wyjątki dziedziczące
    // po tym typie (ale bez Invalid ArgumentException, który jest jego
    // dzieckiem i został złapany wcześniej)
} catch (Exception $e)
  // złapie dowolny wyjątek, ale bez LogicException i jego dzieci,
  // ponieważ zostały one złapane w poprzednich blokach catch
}


// Dodać przykład własnego wyjątku

