<?php

//Bazy danych

/*
    Na samym wstępie chcę zaznaczyć, że to będzie tylko wprowadzenie do mysql'a. 
    Tej sekcji nie należy traktować jako pełnoprawnego kursu.
    Sam temat SQL'a w połączeniu z MySql'em jest tak rozległy, że zasługuje na osobny kurs.
    Jeśli wyrazicie zainteresowanie takim kursem w komentarzach to takowy powstanie :)
*/

/*
    Na pewno nie rozminę się z prawdą jeśli powiem że praktycznie każdy serwis/strona internetowa używa bazy danych.

    Generalnie można powiedzieć że bazy danych służą do przechowywania informacji.

    Wszystkie niusy które czytaćie na onecie/wp, feedy, wpisy na wikipedii oraz inne rzeczy które przeglądacie są wczytywane z bazy danych.

    Chciałbym abyście wiedzieli, że istnieje wiele rodzajów baz danych. 
    Jedną z głównych klasyfikacji jest podział na relacyjne i nie-relacyjne bazy danych.
    Relacyjne jak sama nazwa wskazuje, oznacza, że dane które umieszczamy w bazie są ze sobą w jakiś sposób powiązane.

    Alternatywą do relacyjnych baz danych są bazy nie-relacyjne czyli tak zwane NoSql.
    Nie będziemy im poświęcać tutaj uwagi, ale ważne jest abyście zdawali sobie sprawę z ich istnienia.
    Dla ambitnych podaję dwie nazwy:
    MongoDb - dokumentowa baza danych
    Neo4j - grafowa baza danych

    W programowaniu nie ma czegoś takiego jak "złoty środek", nie ma algorytmu który rozwiąże nasze wszystkie problemy.
    To samo dotyczy się również baz danych. Jeszcze nie tak dawno temu tyła "przepychanka" które bazy są lepsze.
    relacyjne czy nie-relacyjne. Prawda jest jednak taka, że każda baza jest dobra, ale w zastosowaniu do którego została zaprojektowana.

    W naszym projekcie będziemy używać klasycznej czyli relacyjnej bazy danych. 
    Nasz projekt jest "doś standardowy" i charakteryzuje się tym, że zawsze będziemy zapisywać dane o tej samej strukturze.
    To znaczy zawsze będą miały tytuł, opis i datę dlatego wybór bazy relacyjnej jest dobrym wyborem.

    Aby jeszcze odrobinę skomplikować sprawę to istnieje wiele silników baz relacyjnych.
    Głównymi graczami na rynku są: MySql, PostgreSql, SqlLite, MSSQL, Oracle. 
    Każda baza nadałaby się do naszego projektu, jednak dwie ostatnie to są tak zwane rozwiązania Enterprise i są droższe od pieniędzy.
    Natomiast trzy pierwsze są rozwiązaniami darmowymi.
    
    Ja zdecydowałem się na MySql z racji popularności tej bazy danych. Większość ofert pracy dotyczy właśnie połączenia PHP i MySla'a. 
    Jednak nie martwcie się jeśli przyjdzie Wam pracować z inną bazą danych. Podstawy są te same, i jak opanujecie jedną to 
    zmiana na inną przyjdzie już o wiele łatwiej.
*/

/*
    Pierwszym pojęciem, które poznaćie jest SQL
    SQL - Structured Query Language jest to "język" za pomocą którego komunikujemy się z bazą danych.

    Każdy rodzaj relacyjnej bazy danych (MySql, PostgreSQL, ...) można powiedzieć, że ma swój dialekt.

    Dobrym narzędziem do poćwiczenia sobie konstrukcji języka SQL jest:
    https://www.w3schools.com/sql/trysql.asp?filename=trysql_select_all
    W naszym kursie użyjemy go do praktyki.
*/

/*
    Instalacja w xampp - mysql i phpmyadmin

    Omawiamy w trakcie
*/


/*
- [ ] tworzenie bazy w phpmyadmin - szybki przegląd
*/

/*
- [ ] co to jest tabela, relacja, rekord, klucz
*/


/*
    - [ ] jakie dane przechowujemy w tabelach
    https://www.w3schools.com/sql/trysql.asp?filename=trysql_select_all
*/

/*
- [ ] czym jest sql - kilka podstawowych komend w konsoli
*/

/*
- [ ] jak bazy danych łączyć z php
*/