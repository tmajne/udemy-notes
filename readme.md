# Time for refactoring

## Cel

* poprawa jakości kodu w naszej aplikacji

## Krok po kroku

1. refaktoryzacja REQUEST
   * stworzenie metod pobierających
   * wyniesienie request do osobnego obiektu REQUEST
2. refaktoryzacja CONTROLLER
   * utworzenie metody per akcja
3.  refaktoryzacja DB:
   * metoda eskejpująca
   * zmiana Database na klasę Modelu
   * wprowadyenie interfejsu
11. refaktoryzacjia VIEW:
   * automatczne eskejpowanie
