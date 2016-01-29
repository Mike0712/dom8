<header class = "page-header">
    <a href="#"><img class="col-xs-1" src="image/logo.jpg"></a>
    <div class="logo">
        <h2>Сайт, посвященный городу Новосибирску</h2>
    </div>
    <ul class="navbar-nav">
        <?php foreach ($nav->GetMenu() as $key => $item): ?>
            <a href = "?page=<?php echo $item?>"><li class="navbar-default button"><?php echo $key?></li></a>
        <?php endforeach;?>
    </ul>
</header>

