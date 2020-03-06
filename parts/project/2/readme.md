# Zaprojektowanie wstępnego układu aplikacji - layout

* PSR-12 - https://www.php-fig.org/psr/psr-12/

## Struktura katalogów

<pre>
project_dir
  ├── src
  │   └── ...
  ├── templates
  │   ├── pages
  │   │   └─ ...
  │   └ ...
  └ index.php
</pre>

## Cel

Stworzymy szablon html z wydzielonymi miejscami na:

* nagłówek
* menu
* kontent strony

Dodamy strony:

* formularz dodawania nowej notatki
* lista notatek - czyli strona główna

Zlinkujemy strony ze sobą.

## Krok po kroku

1. wyniesienie funkcji debagujących do osobnego pliku
   * Importowanie plików
     * include, include_once
     * require, require_once
2. połączenie html i php
3. wyniesienie html do osobnych plików
4. utworzenie klasy widoku
