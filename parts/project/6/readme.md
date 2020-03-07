# Listing notatek oraz wyświetlenie notatki

## Cel

* wyświetlenie listingu notatek w systemie
* możliwość wyświetlenia szczegółów wybranej notatki

## Krok po kroku

1. dodanie metody pobierającej notatki z bazy danych
2. stworzenie widoku wyświetlającego dane
   * eskejpowanie danych
3. dodanie przycisku na listingu "wyświetl szczegóły"
4. metoda do pobrania konkretnej notatki z bazy danych
   * zgłoszenie wyjątku NotFoundException gdy nie ma notatki o danym id
5. szablon do wyświetlenia notatki
   * dodac eskejpowanie
6. prezentacja szczegółów notatki
   * obsłzenie sytuacji gdy nie istnieje identyfikator
