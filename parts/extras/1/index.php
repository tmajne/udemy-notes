<?php
    $action = !empty($_GET['action']) ? $_GET['action'] : null;
?>

<html lang="pl">
    <head>
        <title>Demo</title>
        <meta charset="utf-8">
    </head>

    <body class="body">
        <h1>PHP - początki</h1>
        <div>
            <ul>
                <li><a href="/parts/extras/1/">Strona główna</a></li>
                <li><a href="/parts/extras/1/?action=page1">Strona pierwsza</a></li>
                <li><a href="/parts/extras/1/?action=page2">Strona druga</a></li>
                <li><a href="/parts/extras/1/?action=page3">Strona trzecia</a></li>
            </ul>
        </div>
        <?php if ($action === 'page1'): ?>
            <h2>Strona pierwsza</h2>
        <?php elseif ($action === 'page2'): ?>
            <h2>Strona druga</h2>
        <?php elseif ($action === 'page3'): ?>
            <h2>Strona trzecia</h2>
        <?php else: ?>
            <h2>Strona główna</h2>
        <?php endif; ?>
    </body>
</html>