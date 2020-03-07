<div>
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
    <div>Tu będą moje notatki</div>
    <?php if (!empty($params['listInfo'])): ?>
        <div>
            <?php echo $params['listInfo'] ?>
        </div>
    <?php endif; ?>
</div>