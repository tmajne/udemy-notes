<?php

declare(strict_types=1);

namespace App;

require_once('src/Utils/debug.php');

//TODO: co to jest action?
//TODO: powiedzieć dlaczego $page brana bezpośrednio z action to nie jest dobry pomysł (możliwość hakowania)
$action = !empty($_GET['action']) ? $_GET['action'] : null;

?>

<html lang="pl">
    <head>
        <title>Notatnik</title>
        <meta charset="utf-8">
    </head>

    <body class="body">
        <h1>Moje notatki</h1>
        <div>
            <ul>
                <li><a href="/">Strona główna</a></li>
                <li><a href="/?action=create">Now notatka</a></li>
            </ul>
        </div>
        <?php
            if ($action === 'create') {
                echo '<div>Tu będzie formularz</div>';
            } else {
                ?>
                    <div>Lista notatek</div>
                <?php
            }
        ?>
    </body>
</html>