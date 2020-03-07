# Listing notatek oraz wyświetlenie notatki

## Cel

* wyświetlenie listingu notatek w systemie
* możliwość wyświetlenia szczegółów wybranej notatki

## Krok po kroku

1. dodanie metody pobierającej notatki z bazy danych
2. stworzenie widoku wyświetlającego dane
3. dodanie przycisku na listingu "wyświetl szczegóły"
4. metoda do pobrania konkretnej notatki z bazy danych
5. prezentacja szczegółów notatki
6. refaktoryzacja REQUEST
   1. stworzenie metod pobierających
   2. wyniesienie request do osobnego obiektu
7. refaktoryzacja DB:
   * metoda eskejpująca
   * zmiana Database na klasę Modelu
   * wprowadyenie interfejsu
