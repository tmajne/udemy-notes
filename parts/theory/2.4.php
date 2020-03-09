<?php

// WHILE - DO - WHILE

/*
 W tej części kursu omówimy dwa nowe rodzaje pętli.
 Pętla: WHILE i pętla DO-WHILE. Omówimy je obie ponieważ różnią się tylko 
 jednym drobnym szczegółem. 
 
 Tak więc do dzieła !!!
 
 Zaczniemy od pętli WHILE
 Przejdźmy od razu do konstrukcji pętli.
 */

/*
    while (warunek) {
        // kod do wykonania
    }
**/

/*
  Przypomnijmy sobie konstukcję pętli FOR
/

/*
    for ( inicjalizacja ; warunek ; aktualizacja ) {
        // kod do wykonania
    }
 */

/*
 Jeśli porównamy obie konstrukcje to widzimy, że w peli WHILE
 nie mamy sekcji inicjującej oraz aktualizacyjnej.
 Musimy o nie zadbać sami.
 
 Posługując sie repertuarem naszego kina postarajmy się wyświetlić go 
 klientowi za pomocą pętli WHILE
 */

$cinemaMovies = [
    'Joker',
    '1917',
    'Jumanji: The Next Level',
    'Little Women'
];

$index = 0;
$moviesCount = count($cinemaMovies);
while($index < $moviesCount) {
    echo $cinemaMovies[$index] . "\n";
    $index++;
}

/*
 W pętli WHILE sami musimy zadbać o to 
 aby zainicjalizować zmienne na początku oraz aktualizować je w taki sposób aby 
 pętla miała możliwość zakończenia.
 
 Upraszczając działanie pętli WHILE można opisać:
 
 Po napotkaniu pętli WHILE w pierwszym kroku sprawdzany jest warunek.
 Jeśli warunek jest prawdziwy to wykonywany jest kod z wnętrze pętli.
 W kodzie pętli powinniśmy zmodyfikować w parametry wchodzące do warunki aby była możliwość 
 zmiany jego wyniku.
 Po wykonaniu kodu z pętli ponownie jest sprawdzany 'warunek' i jeśli nadal jest prawdziwy
 ponownie wykonywany jest kod z pętli.
 W przypadku gdy warunek nie jest prawdziwy to kod z pętli nie zostanie wykonany.
 
 Warto też mieć świadomość tego, że kod z pętli WHILE może nie wykonać się ani razu
 ponieważ już za pierwszym razem sprawdzany 'warunek' może nie być prawdziwy.
 */

/*
 Przy użyciu pętli WHILE bardzo łatwo stworzyć pętlę nieskończoną.
 Przy standardowym użyciu PHP na ogół taka pętla nam się nigdy nie przyda,
 jednak czasami przy skryptach uruchamianych z konsoli jest przydatna.
 Jednak o tym będzie można usłyszeć w przyszłych kursach.
 Tutaj pokażę tylko jak bardzo prosto można to zrobić.
 */

// while(true) {
//     // kod do wykonania
// }

/*
 Ot i cała filozofia.
 Wystarczy jako 'warunek' wstawić wartość 'true' i już mamy warunek zawsze spełniony.
 Proste, prawda :)
 */



/*
 Pora przejść do pętli DO-WHILE
*
* Konstrukcja:
*/

/*
    do {
        // kod pętli do wykonania
    } while (warunek)
*/

/*
 W porównaniu do pętli WHILE jest jedna rzecz która odróżnia obie pętle.
 Jeśli miałbym opisać jak działa pętla DO-WHILE to zrobiłbym to w ten sposób.
 
 Po napotkaniu pętli DO-WHILE
 Najpierw wykonywany jest kod z wnętrze pętli (pierwsza iteracja)
 Po wykonaniu kodu sprawdzany jest warunek, jeśli okaże się spełniony (zwróci prawdę)
 To wykonujemy kolejną iterację pętli.
 
 Podsumowując różnica polega na tym, że używając pętli WHILE warunek jest sprawdzany na samym początku,
 i jeśli nie zostanie spełniony to nie wykona się żadna iteracja.
 Natomiast w pętli DO-WHILE warunek jest sprawdzany dopiero na koniec iteracji, czyli po wykonaniu 
 kodu z pętli przez co pętla DO-WHILE wykona się przynajmniej raz.
 
 Na koniec jeszcze przepiszemy nasz przykład z użyciem pętli DO-WHILE
 */
 
// $cinemaMovies = [
//     'Joker',
//     '1917',
//     'Jumanji: The Next Level',
//     'Little Women'
// ];

// $index = 0;
// $moviesCount = count($cinemaMovies);
// do {
//     echo $cinemaMovies[$index] . "\n";
//     $index++;
// } while($index < $moviesCount);

/*
 Jeśli się chwilę zastanowimy nad naszym przykładem, to nie jest to najsensowniejsze
 wykorzystanie pętli DO-WHILE. Jednak na swoje usprawiedliwienie dodam, że chciałem 
 pokazać że możemy dowolnie przepinać się pomiędzy pętlami. Dzięki temu każdy przypadek
 jesteśmy praktycznie obsłużyć dowolną pętlą.
 
 Subiektywnie mogę stwierdzić, że pętla DO-WHILE jest najrzadziej używaną prze ze mnie pętlą.
 
 Nie ma uniwersalnej zasady kiedy jaką pętle należy użyć. Drobną wskazówką może być 
 sytuacja gdy chcemy aby zawsze wykonała się przynajmniej jeden raz, to wtedy przychodzi na myśl DO-WHILE.
 
 Nie ma lepszej lub gorszej pętli, jednak z mojego doświadczenia mogę powiedzieć, że najczęściej używa się
 pętli FOR oraz FOREACH, do której przejdziemy już za chwilę.
 */