# Zaprojektowanie wstępnego układu aplikacji - layout

* PSR-12 - https://www.php-fig.org/psr/psr-12/

## Struktura katalogów

<pre>
project_dir
├── src
│   └── file1
└── templates
    ├── pages
    │   └─ ...
    └ layout.php
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

* wyniesienie funkcji debagujących do osobnego pliku
  * Importowanie plików
    * include, include_once
    * require, require_once

* połączenie html i php

* wyniesienie html do osobnych plików

* utworzenie klasy widoku
