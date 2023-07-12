<?php

require_once "./form-post.html";

$guest = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    try {
        echo "<pre>";
        print_r($_SERVER);
        print_r($_POST);
        print_r($_FILES);


        if (isset($_FILES['avatar']) && !empty($_FILES['avatar']['tmp_name'])) {
            $file = $_FILES['avatar'];

            // Informacje o pliku
            $fileName = $file['name'];
            $fileTmpPath = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileError = $file['error'];



            //$fileType = \mime_content_type($fileTmpPath);
            $fileSize = $_FILES['file']['size'];

            /**
             * Sprawdzanie typu pliku: Nigdy nie polegaj tylko na rozszerzeniu pliku, aby określić jego typ.
             * Wykorzystaj funkcję mime_content_type() lub finfo_file() do sprawdzenia rzeczywistego typu MIME pliku.
             * Możesz również zdefiniować białą listę dozwolonych typów plików i porównać otrzymany typ z tą listą.
             */

            /**
             * Weryfikacja rozmiaru pliku: Sprawdź rozmiar pliku, aby upewnić się, że nie przekracza określonego limitu.
             * Możesz wykorzystać wartość $_FILES['file']['size'] do pobrania rozmiaru pliku i porównać go z maksymalnym rozmiarem.
             */

            /**
             * Oczyszczanie nazw plików: Upewnij się, że nazwa pliku nie zawiera żadnych
             */

            //verifyMimeType($fileType);
            verifySize($fileSize);

            // Przeniesienie pliku do docelowej lokalizacji
            $destination = 'ścieżka/do/katalogu/' . $fileName;
            move_uploaded_file($fileTmpPath, $destination);

            echo 'Plik został pomyślnie przesłany.';
        }
    } catch (Exception $e) {
        var_dump($e->getMessage());
    }


}

function verifyMimeType(string $fileType): void {
    $allowedFileTypes = ['image/jpeg', 'image/png'];
    if (!in_array($fileType, $allowedFileTypes)) {
        throw new Exception('Nieprawidłowy typ pliku');
    }
}

function verifySize(int $fileType): void {
    $maxFileSize = 10 * 1024 * 1024;
    if ($fileSize > $maxFileSize) {
        throw new Exception('Plik przekracza dozwolony rozmiar');
    }
}
