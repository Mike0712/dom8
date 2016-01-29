<div class="adminmenu">
    <?php foreach ($nav->AdmMenu() as $key => $item): ?>
        <a href = "?unit=<?php echo $item?>"><div class="button"><?php echo $key?></div></a>
    <?php endforeach;?>
</div>