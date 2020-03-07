# Edycja notatki

## Cel

* poprawa jakości kodu w naszej aplikacji
* z widoku szczegółów notatki mozemy przejśc do jej edycji

## Krok po kroku

1. przeniesienie kontrollerów do osobnego katalogu
2. wprowadzenie autoloadera:
   * zapoznanie z dokumentacją: https://www.php.net/manual/en/language.oop5.autoload.php
   * usunięcie niepotrzebnych require_once
3. wyświetlenie notatki do edycji
   * dodanie do kalsy Rrequest metody sprawdzającej typ requestu, wprowadzenie $_SERVER 
   * pobranie danych
   * utworzenie formularza
   * uzupełnienie formularza
4. aktualizacja danych w bazie
   * metoda do aktualizacji danych
