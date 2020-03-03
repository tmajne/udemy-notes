<html lang="pl">
    <head>
        <title>Notatnik</title>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>Moje notatki</h1>
        <div>
            <ul>
                <li><a href="/">Strona główna</a></li>
                <li><a href="/?action=create">Nowa notatka</a></li>
            </ul>
        </div>
            <?php require_once __DIR__ . "/pages/$page.php"; ?>
        </div>
    </body>
</html>
