<style>
    .show {
        padding: 10px;
    }
</style>
<div class="show">
    <?php if ($params['note']): ?>
        <?php $note = $params['note']; ?>
        <ul>
            <li>ID: <?php echo (int) $note['id'] ?></li>
            <li>Tytuł: <?php echo htmlentities($note['title']) ?></li>
            <li><?php echo htmlentities($note['description']) ?></li>
        </ul>
        <div>
            <a href="/"><button>Powrót do listy</button></a>
        </div>
    <?php else: ?>
        <div>Brak danych do wyświetlenia</div>
        <div>
            <a href="/"><button>Powrót do listy</button></a>
        </div>
    <?php endif; ?>
</div>
