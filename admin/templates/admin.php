<?php
$su->ShowMain();
$su->MainContent();
?>
<h3>Текст на главной</h3>
<form action="<?php $_SERVER['REQUEST_URI']?>" method="post">
    <textarea name="maintext" style="width: 90% min-height:400px;"><?php echo $su->ShowMain()[0]['Текст']?></textarea><br>
    <input type="submit" name="changemain" value="Редактировать главную">
</form>