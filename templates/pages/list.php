<style>
    table {
        width:100%;
        table-layout: fixed;
    }

    .tbl-header {
        background-color: rgba(255, 255, 255, 0.3);
    }

    .tbl-content {
        overflow-x:auto;
        margin-top: 0px;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    th {
        padding: 20px 15px;
        text-align: left;
        font-weight: 500;
        font-size: 12px;
        color: #fff;
        text-transform: uppercase;
    }

    td {
        padding: 15px;
        text-align: left;
        vertical-align:middle;
        font-weight: 300;
        font-size: 12px;
        color: #fff;
        border-bottom: solid 1px rgba(255,255,255,0.1);
    }

    .message {
        margin: 25px 10px;
        text-align: center;
        font-weight: 700;
    }

    .pagination {
        list-style: none;
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: center;
        align-items: auto;
        align-content: center
    }

    .pagination li {
        flex: 0 0 auto;
        margin: 10px;
    }

    .pagination li button {
        cursor: pointer;
    }

    .settings-form label {
        display: inline-block;
    }
</style>
<div class="list">
    <section>
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

        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Tytuł</th>
                    <th>Opcje</th>
                </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <?php foreach ($params['notes'] ?? [] as $note): ?>
                        <tr>
                            <td><?php echo $note['id'] ?></td>
                            <td><?php echo $note['title'] ?></td>
                            <td>
                                <a href="/?action=show&id=<?php echo $note['id'] ?>">
                                    <button>Szczegóły</button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>
