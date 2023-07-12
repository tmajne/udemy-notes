<?php

// Otwarcie pliku: Do otwarcia pliku tekstowego można użyć funkcji fopen().
// Funkcja ta przyjmuje dwa argumenty: ścieżkę do pliku i tryb otwarcia. Na przykład:


$filename = './someTextFile';
$file = fopen($filename, 'r'); // Otwarcie do odczytu

//W powyższym przykładzie plik "plik.txt" jest otwierany w trybie odczytu ('r').
// Istnieją również inne tryby otwarcia pliku, takie jak 'w' (do zapisu), 'a' (do dopisywania), 'x' (do tworzenia), itp.
// W zależności od potrzeb, wybierz odpowiedni tryb otwarcia.

// Jeżeli plik istnieje i został poprawnie otwarty, możesz wykonywać operacje na pliku

while (!feof($file)) {
    $line = fgets($file);
    echo $line;
}

// Zawsze pamiętaj o zamknięciu pliku po zakończeniu pracy
fclose($file);

// Przykład z użyciem file_get_contents()
//$content = file_get_contents($filename);
//echo $content;



// Przykład z użyciem fwrite()
$file = fopen('ścieżka/do/pliku.txt', 'w');
fwrite($file, 'To jest przykładowy tekst.');
fclose($file);

// Przykład z użyciem file_put_contents()
file_put_contents('ścieżka/do/pliku.txt', 'To jest przykładowy tekst.');

// Funkcja fwrite() zapisuje określony ciąg znaków do pliku.
// Funkcja file_put_contents() natomiast zapisuje całą zawartość pliku w jednym wywołaniu.



// UPDATE
// Przykład z użyciem fopen()
$file = fopen('ścieżka/do/pliku.txt', 'a');
fwrite($file, 'To jest kolejny tekst.');
fclose($file);

// Przykład z użyciem file_put_contents()
file_put_contents('ścieżka/do/pliku.txt', 'To jest kolejny tekst.', FILE_APPEND);


//unlink('file');



