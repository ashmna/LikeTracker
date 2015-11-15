<?php
use LT\Helpers\App;
$page = App::getCurrentPage();
$menu = include 'menu.php';
?>
<div class="head_">
    <div class="head_1">
        <div class="head_2">
            <div class="head_nav">
                <div class="logo">
                    <img src="/img/logo.png">
                </div>

                <?php foreach($menu as $item) { ?>
                    <a href="/page/<?= $item ?>/" <?= $page == $item ? "class='head_nav_sellect'" :"" ?> ><b><?= App::t($item) ?></b></a>
                <?php } ?>

            </div>
        </div>
    </div>
</div>