<?php
if (empty($_GET['id'])) {
    $id = 1;
} else $id = $_GET['id'];
$gallery = $gall->GetBank()[$id - 1];
$gall->Count();
$count = 1; //Для целей меню
?>
<h3 align="center">Фотогалерея</h3>
<!--Окно галлереи-->
<div class="photo">

    <div align="center" class="frame img">
        <img src="/kurs/dom8/serv/img/<?php echo $gallery['photo'] ?>" height="600px" width="800px"/>
    </div>
    <br>
    <ul class="navbar-nav">
        <?php while ($count <= $gall->Count()): ?>
            <li class="pagination list"><a
                    href="?page=gallery.php&id=<?php echo $count++ ?>"><?php echo $count - 1 ?></a></li>
        <?php endwhile; ?>
    </ul>
</div>
<br>
<br>
<br>
<!--Конец окна галлереи-->

<!--Меню для выбора слайда-->

