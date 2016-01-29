<?php
$su->SetField();
$count = 0;

?>
<h3>Редактировать поля</h3>
<?php while ($count <= count($su->ShowField()) - 1): ?>
    <form action="<? $_SERVER['REQUEST_URI'] ?>" method="post">
        <?php foreach ($su->ShowField()[$count++] as $k => $field) : ?>
            <?php if ($k == 'id'){?>
                <input type="hidden" name="<?php echo $k ?>" value="<?php echo $field ?>"/>
            <?php }else{ ?>
                <input type="text" name="<?php echo $k ?>" value="<?php echo $field ?>"/>
            <?php } endforeach; ?>
        <!--        В данном случае сабмит выполняет двойную функцию, он также передаёт сведения об операции-->
        <input type="submit" name="edit" value="Редактировать"/>
        <input type="submit" name="delete" value="Удалить"/>
    </form>

<?php endwhile; ?>

<h3>Добавить поле</h3>

<form action="<? $_SERVER['REQUEST_URI'] ?>" method="post">
    <?php foreach ($su->ShowField()[0] as $k => $field) : ?>
        <?php if ($k == 'id'){?>
            <input type="hidden" name="<?php echo $k ?>" placeholder="<?php echo $k ?>"/>
        <?php }else{ ?>
            <input type="text" name="<?php echo $k ?>" placeholder="<?php echo $k ?>"/>
        <?php } endforeach; ?>
    <!--        То же самое про сабмит-->
    <input type="submit" name="add" value="Добавить запись"/>
</form>
<br>
<br>