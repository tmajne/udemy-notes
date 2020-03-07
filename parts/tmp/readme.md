# Time for refactoring

## Cel

* poprawa jakości kodu w naszej aplikacji

## Krok po kroku

1. REQUEST
   * stworzenie metod pobierających
   * metoda sprawdzająca czy jest dany parametr
   * wyniesienie request do osobnego obiektu REQUEST
2. CONTROLLER
   * utworzenie metody per akcja
   * usunięcie switch'a
     * dynamiczne generowanie nazwy akcji
     * sprawdzenie czy metoda akcji istnieje
   * utworzenie kontrollera bazowego
3. VIEW
   * automatczne eskejpowanie
   * rekurencja przy eskejpowaniu
4. DB
   * zmiana Database na klasę Modelu
   * utworzenie klasy abstrakcyjnej modelu
     * metody pobierające dane query i gueryAll
   * metoda eskejpująca
   * wprowadyenie interfejsu
