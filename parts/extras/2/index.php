<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (!empty($_POST)) {
        $config = [
            'host' => 'localhost',
            'name' => 'email',
            'user' => 'root', 
            'password' => 'root'
        ];
    
        $dsn = 'mysql:dbname=' . $config['name'] . ';host=' . $config['host'] . ';charset=utf8';
        $db = new PDO($dsn, $config['user'], $config['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    

        print_r($_POST);
        exit('dd');
        $title = $this->connection->quote($data['title'], PDO::PARAM_STR);
            $description = $this->connection->quote($data['description'], PDO::PARAM_STR);
            $created = $this->connection->quote(date('Y-m-d H:i:s'));

            $query = "
                INSERT INTO notes (title, description, created) 
                VALUES ($title, $description, $created)
            ";
            $this->connection->exec($query);
    }

?>


<html lang="pl">
    <head>
        <title>Email katalog</title>
        <meta charset="utf-8">
    </head>

    <body class="body">
        <h1>PHP - obsługa bazy danych</h1>
        <form method="post">
            Email: <input type="email" name="email" />
            <br/>
            <input type="submit" value="Zapisz" />
        </form>
    </body>
</html>
