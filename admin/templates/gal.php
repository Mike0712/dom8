<?php   $su->AddImg();
        $su->SetPost();
?>

<h3>Добавить запись</h3>

<form action="<? $_SERVER['REQUEST_URI']?>" method="post" enctype="multipart/form-data">
    <input type="file" name="photo" value="Прикрепить файл"/>
    <input type="submit" name="addphoto" value="Добавить фото">
</form>