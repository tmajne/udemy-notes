# Baza danych - zapis notatki oraz wyjątki

* wprowadzenie teoretyczne do baz danych - TOOD
* wprowadzenie teoretyczne do wyjątków - TODO

## Cel

* Wdrożenie obsługi bazy danych. Zapisywanie notatek w DB.
* Wprowadzenie obsługi błędów.

## Krok po kroku

1. utworzenie konfiguracji dla aplikacji
2. przekazanie konfiguracji do kontrolera
3. utworzenie biblioteki do obsługi bazy danych
   * metoda do walidacji konfiguracji
   * nawiązywanie połączenia
   * dodanie obsługi błędów - ustawienie ENV
4. utworzenie tabeli w DB
5. dodanie metod odpowiedzialnych za zapis