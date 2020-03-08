<style>
    .delete {
        padding: 10px;
    }
    .delete form {
        display: inline-block;
        margin: 0 10px;
        padding: 0;
    }
</style>
<div class="delete">
    <?php if ($params['note']): ?>
        <h3>Treść notatki do usunięcia.</h3>
        <?php $note = $params['note']; ?>
        <ul>
            <li>ID: <?php echo $note['id'] ?></li>
            <li>Tytuł: <?php echo $note['title'] ?></li>
            <li><?php echo $note['description'] ?></li>
        </ul>
        <div>
            <a href="/"><button>Powrót do listy</button></a>
            <form action="/?action=delete" method="post">
                <input type="hidden" name="id" value="<?php echo $note['id'] ?>"/>
                <button>Potwierdź usunięcie</button>
            </form>
        </div>
    <?php else: ?>
        <div>Brak danych do wyświetlenia</div>
        <div>
            <a href="/"><button>Powrót do listy</button></a>
        </div>
    <?php endif; ?>
</div>
