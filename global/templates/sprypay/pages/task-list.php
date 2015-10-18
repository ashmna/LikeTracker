<table style="height:100%;width:800px; border-collapse: collapse;" ng-controller="taskListController" ng-cloak>
    <tbody>
    <tr>
        <td valign="top" style="height:100%;width:25%;">
            <div class="left_block">
                <?php include dirname(__DIR__).DIRECTORY_SEPARATOR.'block'.DIRECTORY_SEPARATOR.'left.php' ?>
            </div>
            <?php include dirname(__DIR__).DIRECTORY_SEPARATOR.'block'.DIRECTORY_SEPARATOR.'info.php' ?>
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
                    <!--<a href="#my_tasks">Мои задания</a>-->
                </div>
                <div class="line_block">
                    <div class="info2">
                        <center>Выполнять отмену выполненного задания <b>- запрещено</b>!</center>
                    </div>
                    <center><br>
                        <a style="cursor: pointer" ng-click="refreshCurrentTaskList()">[обновить страницу]</a>
                    </center>
                    <p id="iki">

                    </p>

                    <table class="table_2" bordercolor="#DEE4E8" cellpadding="1" style="height:100%;width:100%;">
                        <tbody>
                        <tr>
                            <td bgcolor="#F5F7F8" align="center"><b>Цена</b></td>
                            <td bgcolor="#F5F7F8" align="center"><b>Ссылка</b></td>
                            <td bgcolor="#F5F7F8" align="center"><b>Действие</b></td>
                        </tr>

                        <tr ng-repeat="task in currentTaskList">
                            <td align="center">
                                <b ng-bind-template="+{{task.price - task.commission}}"></b>
                                <img src="/img/balls.png">
                            </td>
                            <td align="center">
                                <div class="b1">
                                    <div ng-click="doTask(task)" style="cursor:pointer">
                                        <img ng-show="task.type == 'like'"    src="/img/likes.png">
                                        <img ng-show="task.type == 'group'"   src="/img/groups.png">
                                        <img ng-show="task.type == 'friend'"  src="/img/friends.png">
                                        <img ng-show="task.type == 'share'"   src="/img/copies.png">
                                        <img ng-show="task.type == 'poll'"    src="/img/poll.png">
                                        <img ng-show="task.type == 'comment'" src="/img/comm.png">

                                        <b ng-show="task.type == 'like'"   >Лайкни</b>
                                        <b ng-show="task.type == 'group'"  >Вступи</b>
                                        <b ng-show="task.type == 'friend'" >Добавь</b>
                                        <b ng-show="task.type == 'share'"  >Расскажи</b>
                                        <b ng-show="task.type == 'poll'"   >Голосуй</b>
                                        <b ng-show="task.type == 'comment'">Коммент</b>
                                        {{task.url}}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input ng-class="task.btn.class ? task.btn.class: 'button_2'" type="button" value="{{task.btn.title ? task.btn.title : 'Готово' }}" ng-click="checkTask(task)">
                                <a style="cursor: pointer;" ng-click="ignoreTask(task)" ng-hide="task.btn.hideIgnore">Игнор</a>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <center>Если выполнил(а), обновляй страницу!:)</center>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
            </div>
        </td>
    </tr>
    </tbody>
</table>