<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (!empty($_POST)) {
        $sended = false;
        $email = $_POST['email'];
        $message = $_POST['message'] ?? 'Wiadomość domyślna';
        
        if(!$email) {
            echo 'Pole email nie może być puste';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Adres '$email' jest niepoprawny.";
        }

        $result = mail($email, 'Testowa wiadomość', $message);
        if ($result) {
            $sended = true;
        }
    }
?>


<html lang="pl">
    <head>
        <title>Email katalog</title>
        <meta charset="utf-8">
        <style>
            label, textarea { display: block; margin: 15px 0; }
            .success { color: lightgreen; }
            .error { color: red; }
        </style>
    </head>

    <body class="body">
        <h1>PHP - obsługa bazy danych</h1>
        <?php if(isset($sended)): ?>
            <?php if($sended): ?>
                <h3 class="success">Wiadomość została wysłana</h3>
            <?php else: ?>
                <h3 class="error">Nie udało się wysłać wiadomości</h3>
            <?php endif; ?>
        <?php endif; ?>
        <form method="post">
            <label>Email: <input type="text" name="email" /></label>
            <textarea name="message" rows="8" cols="40">Wiadomość do wysłania ...</textarea>
            <input type="submit" value="Zapisz" />
        </form>
    </body>
</html>
