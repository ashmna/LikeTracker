<table style="height:100%;width:800px; border-collapse: collapse;" ng-controller="myTasksController" ng-cloak>
    <tbody>
    <tr>
        <td valign="top" style="height:100%;width:25%;">
            <div class="left_block">
                <table>
                    <tbody>
                    <tr>
                        <td>
                            <img src="http://vk.com/images/camera_50.png" class="image">
                        </td>
                        <td align="left">
                            <b>Ashot Mnatsakanyan</b><br><br>
                            <a href="http://snebes.ru/index.php?out">Выйти</a>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <hr>
                <img src="/img/rating.png"> Рейтинг: <b
                    id="rat">9</b><br><img src="/img/balls.png"> Баллов: <b
                    id="bal">204</b><a href="http://snebes.ru/buy_balls.php"><img
                        src="/img/plus.png"> <b>Купить баллы</b></a>
                <hr>
                <a href="http://snebes.ru/tasks.php">Заработать баллы</a><a
                    href="/img/2_..___ БИРЖА ПИАРА VK___....html">Потратить
                    баллы</a><a href="http://snebes.ru/transfer.php">Перевод баллов</a><a
                    href="http://snebes.ru/referals.php">Партнерская программа</a><a
                    href="http://snebes.ru/news.php">Новости <font color="#777777"></font></a><a
                    href="http://snebes.ru/jurnal.php">Журнал <font color="#777777"></font></a><a
                    href="http://snebes.ru/support.php">Служба поддержки <font color="#777777"></font></a><a
                    href="http://snebes.ru/rules.php">Правила</a></div>
            <div class="warning_info">
                <img src="/img/warning.png"> Внимание!<br>Никогда не меняйте
                статус в вк, по чьей-то просьбе и Ваш аккаунт тут будет в безопасности.
                <hr>
                <a href="http://snebes.ru/my_tasks.php?w=1"><b>Хорошо, можно скрыть.</b></a>
            </div>
        </td>
        <td width="" valign="top" style="height:100%;width:75%;">
            <div class="right_block">
                <div class="title">
                    <a href="#all"     ng-class="tab=='all'     ? 'title_select' : ''">Все</a>
                    <a href="#like"    ng-class="tab=='like'    ? 'title_select' : ''">Лайки</a>
                    <a href="#group"   ng-class="tab=='group'   ? 'title_select' : ''">Сообщества</a>
                    <a href="#friend"  ng-class="tab=='friend'  ? 'title_select' : ''">Друзья</a>
                    <a href="#share"   ng-class="tab=='share'   ? 'title_select' : ''">Репосты</a>
                    <a href="#poll"    ng-class="tab=='poll'    ? 'title_select' : ''">Опросы</a>
                    <a href="#comment" ng-class="tab=='comment' ? 'title_select' : ''">Комменты</a>
                    <a href="#video"   ng-class="tab=='video'   ? 'title_select' : ''">Video</a>
                    <a href="#new"     ng-class="tab=='new'     ? 'title_select' : ''">Новое</a>
                </div>
                <div class="line_block" ng-hide="tab=='new'">
                    <center>
                        <div class="block_act">
                            <a href="#new/{{type}}"><b>Добавить новое задание</b></a>
                        </div>
                    </center>

                    <table ng-show="currentTaskList.length" class="table_1" bordercolor="#DEE4E8" CELLPADDING=1 style="height:100%;width:100%;">
                    <tr>
                        <td bgcolor="#F5F7F8"><b>Ваши ссылки</b>
                        <td bgcolor="#F5F7F8"><b>Выполнили</b></td>
                        <td bgcolor="#F5F7F8"><b>Цена</b></td>
                        <td bgcolor="#F5F7F8"><b>Kоличество</b></td>
                        <td bgcolor="#F5F7F8"><b>Действия</b></td>
                    <tr>
                    <tr ng-repeat="task in currentTaskList">
                        <td>
                            <img src="img/likes.png">
                            <a href="http://vk.com/{{task.url}}" target="_blank">{{task.url}}</a>
                        </td>
                        <td ng-bind="task.doneCount"></td>
                        <td ng-bind="task.price"></td>
                        <td ng-bind="task.count">42</td>
                        <td>
                            <!--<a href="?act=edit&task_id=2723999">Редактировать</a>
                            <br>-->
                            <a style="cursor: pointer" ng-click="deleteTask(task)">Удалить</a>
                        </td>
                    <tr>
                    </table>

<!--                    <div class="view_block">view_block</div>-->
<!--                    <div class="view_block_2">view_block_2</div>-->
<!--                    <div class="view_block2">view_block2</div>-->

                    <div class="view_block2" ng-hide="currentTaskList.length">У Вас еще нет заданий в этой категории.</div>
                </div>
                <div class="line_block" ng-show="tab=='new' && !type">
                    <center><h3>Что заказываем?</h3></center>

                    <center>
                        <div class="button_1">
                            <a href="#/new/like">
                                Накрутить <b>"Мне нравится"</b>
                            </a>
                        </div>
                    </center>

                    <center>
                        <div class="button_1">
                            <a href="#/new/group">
                                Накрутить <b>"Сообщество"</b>
                            </a>
                        </div>
                    </center>

                    <center>
                        <div class="button_1">
                            <a href="#/new/friend">
                                Накрутить <b>"Друзей"</b>
                            </a>
                        </div>
                    </center>

                    <center>
                        <div class="button_1">
                            <a href="#/new/share">
                                Накрутить <b>"Рассказать друзьям"</b>
                            </a>
                        </div>
                    </center>

                    <center>
                        <div class="button_1">
                            <a href="#/new/poll">
                                Накрутить <b>"Опрос"</b>
                            </a>
                        </div>
                    </center>

                    <center>
                        <div class="button_1">
                            <a href="#/new/comment">
                                Накрутить <b>"Комментарии"</b>
                            </a>
                        </div>
                    </center>
                </div>

                <div class="line_block" ng-show="tab=='new' && type">
                    <center><a href="#/new">[все накрутки]</a></center>

                    <center><h4>Заказ накрутки "{{typeTitle}}":</h4></center>
                    <div ng-class="currentTask.infoClass" ng-bind-html="currentTask.info">
                    </div>
                    <div>
                        <form method="post">
                            <table class="table_2" cellpadding="1" style="height:100%;width:100%;">
                                <tbody>
                                <tr>
                                    <td style="height:100%;width:230px;" valign="top">
                                        <b>1. Ссылка:</b><br>
                                        <font color="#777777">Введите ссылку, куда лайкать</font>
                                    </td>
                                    <td valign="top">
                                        <input id="url" class="form_text" type="url" name="url"
                                               maxlength="100" style="width: 90%"
                                               placeholder="на запись, фото или видео"
                                               ng-model="currentTask.url">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:100%;width:230px;" valign="top">
                                        <b>2. Цена задания (мин. 2 балла):</b><br>
                                        <font color="#777777">
                                            Введите цену, которую будете платить за
                                            лайк<br>Чем выше цена, тем выше Ваш заказ в списке
                                            заданий
                                        </font>
                                    </td>
                                    <td valign="top">
                                        <input id="pri" class="form_text" type="text" name="price"
                                               maxlength="7" style="width: 85px" ng-model="currentTask.price"><br>
                                        <small>С комиссией: <b id="pri_kom">{{currentTask.price + currentTask.commission}}</small>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:100%;width:230px;" valign="top">
                                        <b>3. Сколько нужно лайков:</b><br>
                                        <font color="#777777">Минимум 10</font>
                                    </td>
                                    <td valign="top">
                                        <input id="ko" class="form_text" type="text" name="ko" maxlength="7"
                                               style="width: 85px" value="15" ng-model="currentTask.count">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:100%;width:230px;" valign="top">
                                        <b>Баланс задания:</b><br>
                                        <font color="#777777">Количество баллов, которое спишется с Вашего
                                            баланса на задание</font>
                                    </td>
                                    <td valign="top">
                                        <input type="hidden" id="balls" name="balls" maxlength="7"
                                               style="width: 85px" value="195">
                                        <input class="form_text" type="text" id="balanse" name="balanse"
                                               maxlength="7" style="width: 85px" value="{{currentTask.count * (currentTask.price + currentTask.commission)}}"
                                               disabled="disabled">
                                        <br>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <center>
                                <input type="button" value="Добавить задание" class="submit" ng-click="saveCurrentTask()">
                            </center>
                        </form>

                        <hr>
                        <center>
                            <font color="#777777">
                                Комиссия системы от цены задания 30% или минимум 1 балл.
                            </font>
                        </center>
                    </div>
                </div>

            </div>
        </td>
    </tr>
    </tbody>
</table>