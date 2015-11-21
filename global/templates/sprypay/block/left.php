<?php
use LT\Helpers\App;
$vkData = App::getSession()->vkData;
$userData = App::getUserData();
$rating  = isset($userData['rating']) ? $userData['rating'] : 0;
$balance = isset($userData['balance']) ? $userData['balance'] : 0;
?>
<table>
    <tbody>
    <tr>
        <td>
            <img src="<?= $vkData['photo_100']?>" class="image" width="50">
        </td>
        <td align="left">
            <b><?= $vkData['first_name'].' '.$vkData['last_name']?></b>
            <br><br>
            <a style="cursor: pointer;" ng-click="logout()">Выйти</a>
        </td>
    </tr>
    </tbody>
</table>

<hr>

<img src="/img/rating.png"> Рейтинг: <b id="rat" ng-bind="userData.rating"><?= $rating ?></b><br>
<img src="/img/balls.png"> Баллов: <b id="bal" ng-bind="userData.balance"><?= $balance ?></b>

<!--<a href="#">
<img src="/img/plus.png"> <b>Купить баллы</b>
</a>
-->

<hr>
<a href="/page/my-tasks/">Заработать баллы</a>
<a href="/page/task-list/">Потратить баллы</a>
<!--
<a href="">Перевод баллов</a>
<a href="">Партнерская программа</a>
<a href="">Новости</a>
<a href="">Журнал</a>
<a href="">Служба поддержки</a>
-->
<a href="/page/terms-and-conditions/">Правила</a>
