<style type="text/css">

</style>
<div>
    <?php if (!empty($params['note'])): ?>
        <?php $note = $params['note']; ?>
        <form class="note-form" action="/?action=edit" method="post">
            <input type="hidden" name="id" value="<?php echo $note['id'] ?>"/>
            <ul>
                <li>
                    <label>Tytuł <span class="required">*</span></label>
                    <input type="text" name="title" class="field-long" value="<?php echo $note['title'] ?>"/>
                </li>
                <li>
                    <label>Opis</label>
                    <textarea name="description" id="field5" class="field-long field-textarea"><?php echo $note['description'] ?></textarea>
                </li>
                <li>
                    <input type="submit" value="Submit" />
                </li>
            </ul>
        </form>

    <?php else: ?>
        <div>Brak danych do wyświetlenia</div>
        <div>
            <a href="/"><button>Powrót do listy</button></a>
        </div>
    <?php endif; ?>
</div>