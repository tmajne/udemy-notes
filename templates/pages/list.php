<style>

</style>
<div class="list">
    <section>
        <div class="error">
            <?php
            if (!empty($params['error'])) {
                switch ($params['error']) {
                    case 'noteIdMissing':
                        echo 'Braki identyfikatora notatki';
                        break;
                    case 'noteNotFound':
                        echo 'Notatka nie istnieje';
                        break;
                }
            }
            ?>
        </div>
        <div class="message">
            <?php
            if (!empty($params['before'])) {
                switch ($params['before']) {
                    case 'created':
                        echo 'Notatka zostało utworzona';
                        break;
                }
            }
            ?>
        </div>

        <?php
        $pagination = $params['pagination'] ?? [];
        $currentPage = $pagination['page'] ?? 1;
        $pageSize = $pagination['size'] ?? 10;
        $pages = $pagination['pages'] ?? 1;

        $sort = $params['sort'] ?? [];
        $sortBy = $sort['by'] ?? 'created';
        $sortOrder = $sort['order'] ?? 'desc';

        $phrase = $params['phrase'] ?? null;
        ?>

        <div>
            <form class="settings-form" action="/" method="get">
                <div>
                    <label>Wyszukaj: <input type="text" name="phrase" value="<?php echo $phrase ?>" /></label>
                </div>
                <div>
                    Sortuj po:
                    <label>Dacie dodania<input name="sortby" type="radio" value="created" <?php if ($sortBy == 'created') : ?>checked <?php endif; ?> /></label>
                    <label>Tytule<input name="sortby" type="radio" value="title" <?php if ($sortBy == 'title') : ?>checked <?php endif; ?> /></label>
                </div>
                <div>
                    Kierunek sortowania:
                    <label>Rosnąco<input name="sortorder" type="radio" value="asc" <?php if ($sortOrder == 'asc') : ?>checked <?php endif; ?> /></label>
                    <label>Malejąco<input name="sortorder" type="radio" value="desc" <?php if ($sortOrder == 'desc') : ?>checked <?php endif; ?> /></label>
                </div>
                <div>
                    Liczba elementów:
                    <label><input name="pagesize" type="radio" value="1" <?php if ($pageSize == 1) : ?>checked <?php endif; ?> /> 1</label>
                    <label><input name="pagesize" type="radio" value="5" <?php if ($pageSize == 5) : ?>checked <?php endif; ?> /> 5</label>
                    <label><input name="pagesize" type="radio" value="10" <?php if ($pageSize == 10) : ?>checked <?php endif; ?> />10</label>
                    <label><input name="pagesize" type="radio" value="20" <?php if ($pageSize == 20) : ?>checked <?php endif; ?> /> 20</label>
                </div>
                <div>
                    <input type="submit" value="Ustaw" />
                </div>
            </form>
        </div>

        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tytuł</th>
                        <th>Data utworzenia</th>
                        <th>Opcje</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <?php foreach ($params['notes'] ?? [] as $note) : ?>
                        <tr>
                            <td><?php echo $note['id'] ?></td>
                            <td><?php echo $note['title'] ?></td>
                            <td><?php echo $note['created'] ?></td>
                            <td>
                                <a href="/?action=show&id=<?php echo $note['id'] ?>">
                                    <button>Szczegóły</button>
                                </a>
                                <a href="/?action=delete&id=<?php echo $note['id'] ?>">
                                    <button>Usuń</button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <ul class="pagination">
                <?php
                $queryPart = "&pagesize=$pageSize&sortby=$sortBy&sortorder=$sortOrder";
                if ($phrase) {
                    $queryPart .= "&phrase=$phrase";
                }
                ?>
                <?php if ($currentPage > 1) : ?>
                    <li>
                        <a href="/?page=<?php echo $currentPage - 1 . $queryPart ?>">
                            <button>
                                <<</button> </a> </li> <?php endif; ?> <?php for ($i = 1; $i <= $pages; ++$i) : ?> <li>
                                    <a href="/?page=<?php echo $i . $queryPart ?>">
                                        <button><?php echo $i ?></button>
                                    </a>
                    </li>
                <?php endfor; ?>
                <?php if ($currentPage < $pages) : ?>
                    <li>
                        <a href="/?page=<?php echo $currentPage + 1 . $queryPart ?>">
                            <button>>></button>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </section>
</div>