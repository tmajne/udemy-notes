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
    To samo dotyczy się również baz danych. Jeszcze nie tak dawno temu była "przepychanka" które bazy są lepsze.
    relacyjne czy nie-relacyjne. Prawda jest jednak taka, że każda baza jest dobra, ale w zastosowaniu do którego została zaprojektowana.

    W naszym projekcie będziemy używać klasycznej czyli relacyjnej bazy danych. 
    Nasz projekt jest "dość standardowy" i charakteryzuje się tym, że zawsze będziemy zapisywać dane o tej samej strukturze.
    To znaczy zawsze będą miały tytuł, opis i datę dlatego wybór bazy relacyjnej jest dobrym wyborem.

    Aby jeszcze odrobinę skomplikować sprawę to istnieje wiele silników baz relacyjnych.
    Głównymi graczami na rynku są: MySql, PostgreSql, SqlLite, MSSQL, Oracle. 
    Każda baza nadałaby się do naszego projektu, jednak dwie ostatnie to są tak zwane rozwiązania Enterprise i są droższe od pieniędzy.
    Natomiast trzy pierwsze są rozwiązaniami darmowymi.
    
    Ja zdecydowałem się na MySql z racji popularności tej bazy danych. Większość ofert pracy dotyczy właśnie połączenia PHP i MySla'a. 
    Jednak nie martwcie się jeśli przyjdzie Wam pracować z inną bazą danych. Podstawy są te same, i jak opanujecie jedną to zmiana na inną przyjdzie już o wiele łatwiej.
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
    Tworzenie bazy w phpmyadmin - szybki przegląd

    Omawiamy w trakcie
    Nawiązujemy również do tworzenie użytkowników
*/

/*
    Co to jest tabela, relacja, rekord, klucz

    Najpopularniejszym obrazowym porównaniem bazy danych do czegoś z czym mamy styczność, 
    może nie na co dzień, ale w życiu pewnie się z tym zetknęliśmy jest porównanie do Excela.

    Baza danych podobnie jak plik excela przechowuje dane.
    
    Dane w excelu zapisujemy w arkuszach, jeden plik może mieć wiele arkuszy.
    Każdy z takich arkuszy może zostać przez nas nazwany, aby odwzorowywał to co się w danym arkuszu znajduje.
    Dane pomiędzy arkuszami mogą być powiązane, np w jednym przechowujemy listę filmów wyświetlanych w "naszym kinie"
    a w drugim szczegółową rozpiskę o dacie projekcji.

    Odpowiednikiem arkuszy w bazie danych są tabele. 
    W bazie możemy mieć wiele tabel. Dane pomiędzy tabelami mogą być ze sobą powiązane, to powiązanie nazywamy relacją. 
    Dlatego mówimy o bazach relacyjnych. 

    Rozróżniamy trzy typy relacji:
    - 1:1
    - 1:n
    - n:m
    Z racji tego, że relacje starają się odwzorować zasady ze świata rzeczywistego, więc do ich opisania posłużę się rzeczywistymi przypadkami
    - 1:1 - jedna osoba posiada tylko i wyłącznie jeden adres zameldowania
    - 1:n - jedna osoba może mieć wiele kont bankowych, jednak te konta należą tylko i wyłącznie do niej (przykład nie obejmuje kont współdzielonych)
    - n:m - jedna osoba może należeć do wielu grup na FB jak również do jednej grupy może należeć wiele osób
    
    Schodząc coraz głębiej to w arkuszy mamy kolumny i wiersze.
    Kolumna odźwierciedla rodzaj informacji jąką w niej chcemy przechowywać np. tytuł filmu.
    Natomiast wiersze zawierają cały zbiór informacji powiązanych z konkretnym filmem.

    Odpowiednikiem w bazie danych są kolumny i rekordy
    kolumna => kolumna
    wiersz => rekord 
    Warto zaznaczyć że w bazie musimy wybrać typ danych które chcemy w danej kolumnie przechowywać np INT, TEXT, DATE, VARCHAR

    

    Klucze zostaną omówione podczas tworzenia pierwszej tabeli 

    Każda tabela, musie posiadać klucz główny, ale co to jest ten klucz (primary key).
    Klucz główny jest unikalną wartością identyfikującą jednoznacznie każdy rekord w tabeli.

    Przeważnie jest to liczba całkowita, która dodatkowo ma flagę autoincrement, ale nie zawsze.
    Przykłądowo jeśli w tabeli przechowujemy dane użytkowników i wymagamy od nich podania numeru PESEL.
    To właśnie PESEL może stać się kluczem głównym, ponieważ jest on konkretnie przypisany do danego użytkownika
    i z jego pomocą możemy go zidentyfikować

*/


/*
    - [ ] jakie dane przechowujemy w tabelach
    https://www.w3schools.com/sql/trysql.asp?filename=trysql_select_all

    Przy tworzeniu tabeli dla kolumn trzeba określić typ danych które będą w niej przechowywane.

    Mamy cztery podstawowe grupy typów które mogą być przechowywane:
    - liczbowe
    - tekstowe
    - data i czas
    - binarne
    Oraz pięty typ, czyli wszystkie pozostałe :D

    Nie będę tutaj omawiał wszystkich, skupię tylko na tych najpopularniejszych.

    TEKSTOWE
    - char - pole znakowe o stałej długości znaków (0 - 255 bajtów)
    - varchar - pole znakowe o zmiennej długości znaków, definiujemy maksymalną (0 - 255 bajtów)
    - text - kolumna tekstowa zawierająca maksymalnie 65 535 bajtów
    
    LICZBOWE
    - int - bajtowa wartość całkowita
    - float - liczba zmiennoprzecinkowa
    
    DATA I CZAS
    - date - data bez czasu
    - datetime - data z czasem
    - timestamp - liczba sekund od 1970-01-01 00:00:00 (od początku epoki systemu UNIX)
*/

/*
    - [ ] czym jest sql - kilka podstawowych komend w konsoli
    Jak już wspomnieliśmy jest to rodzaj języka zapytań, który umożliwia nam "rozmowę" z bazą danych.
    Podstawowe zapytania, których będziemy używać:
    
    SELECT
    INSERT
    UPDATE
    DELETE

    Oprócz tych powyższych istnieje jeszcze wiele innych np. służących do tworzenia/aktualizacja baz danych, tabel, uprawnień itp.
    Jednak część z tych operacji wykonaliśmy już przy użyciu phpMyAdmina, który poprzez używanie interfejsu graficznego potrafi zbudować
    odpowiednie zapytania.

    Omówmy podstawowe polecenia:

    SELECT - wyciąganie danych

        SELECT 
            select_expr [, select_expr …] 
        FROM 
            tbl_name 
        [WHERE where_condition]
        [ORDER BY {col_name | expr | position} [ASC | DESC], …]
        [LIMIT {[offset,] row_count | row_count OFFSET offset}]

        Powyższa konstrukcja jest mocno uproszczona i skrojona pod nasze potrzeby.
        Pełną konstrukcję znajdziecie na stronie: https://dev.mysql.com/doc/refman/8.0/en/select.html

        SELECT ... JOIN
        INNER, LEFT, RIGHT

    INSERT - dodawanie nowych rekordów: https://dev.mysql.com/doc/refman/8.0/en/insert.html

        INSERT
            [INTO] tbl_name
            [(col_name [, col_name] ...)]
            { {VALUES | VALUE} (value_list) [, (value_list)] ... | VALUES row_constructor_list}


        INSERT INTO tbl_name (id, title, desc) VALUES(11, 'test', 'desc');


    UPDATE - aktualizacja rekordów

        UPDATE tbl_name 
            SET col1={expr1|DEFAULT} [,col2={expr2|DEFAULT}] …
            [WHERE where_condition]

        UPDATE t1 SET col1 = col1 + 1, col2 = col1;
  
        
    DELETE - usuwanie rekordów

        DELETE FROM tbl_name 
            [WHERE where_condition]
            [LIMIT row_count]

        DELETE FROM emails LIMIT 2
*/

/*
    - [ ] jak bazy danych łączyć z php
    omówione zostanie w trakcie implementowania obsługi bazy danych w naszym projekcie
*/
