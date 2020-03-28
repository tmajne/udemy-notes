<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    $emails = [];

    $config = [
        'host' => 'localhost',
        'name' => 'email',
        'user' => 'udemy', 
        'password' => '2D%YKvk7isb$MSE'
    ];
    $dsn = 'mysql:dbname=' . $config['name'] . ';host=' . $config['host'] . ';charset=utf8';
    $db = new PDO($dsn, $config['user'], $config['password']);

    if (!empty($_POST)) {
        $email = $_POST['email'];
        if(!$email) {
            exit('Pole email nie może być puste');
        }
         
        // eskejpowanie
        $email = $db->quote($email, PDO::PARAM_STR);
        $query = "INSERT INTO emails (email) VALUES ($email)";
        $db->exec($query);
    }

    $query = "SELECT * FROM emails ORDER BY created DESC";
    $emails = $db->query($query, PDO::FETCH_ASSOC)
        ->fetchAll();
?>


<html lang="pl">
    <head>
        <title>Email katalog</title>
        <meta charset="utf-8">
        <style>
            label {
                display: block;
                margin: 15px 0;
            }
        </style>
    </head>

    <body class="body">
        <h1>PHP - obsługa bazy danych</h1>
        <form method="post">
            <label>Email: <input type="email" name="email" /></label>
            <input type="submit" value="Zapisz" />
        </form>

        <div>
            Lista adresów:
            <?php if($emails): ?>
                <table>
                    <thead>
                        <tr>
                            <th>Lp.</th>
                            <th>Email</th>
                            <th>Data utworzenia</th>
                        </tr>
                    </thead>
                    <?php $index = 1; ?>
                    <tbody>
                        <?php foreach($emails as $row): ?>
                            <tr>
                                <td><?php echo $index ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['created'] ?></td>
                            </tr>
                            <?php $index++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <span>Nie dodałeś jeszcze żadnego adresu</span>
            <?php endif; ?>
        </div>
    </body>
</html>
