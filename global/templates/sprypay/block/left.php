<?php
use LT\Helpers\App;
$vkData = App::getSession()->vkData;
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

<img src="/img/rating.png"> Рейтинг: <b id="rat">9</b><br>
<img src="/img/balls.png"> Баллов: <b id="bal">204</b>
<a href="http://snebes.ru/buy_balls.php">
<img src="/img/plus.png"> <b>Купить баллы</b>
</a>

<hr>
<a href="">Заработать баллы</a>
<a href="">Потратить баллы</a>
<a href="">Перевод баллов</a>
<a href="">Партнерская программа</a>
<a href="">Новости</a>
<a href="">Журнал</a>
<a href="">Служба поддержки</a>
<a href="">Правила</a>
