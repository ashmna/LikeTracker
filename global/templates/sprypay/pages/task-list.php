<table style="height:100%;width:800px; border-collapse: collapse;" ng-controller="taskListController" ng-cloak>
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
                <a href="http://snebes.ru/tasks.php">Заработать баллы</a>
                <a href="http://snebes.ru/my_tasks.php">Потратить баллы</a>
                <a href="http://snebes.ru/transfer.php">Перевод баллов</a>
                <a href="http://snebes.ru/referals.php">Партнерская программа</a>
                <a href="http://snebes.ru/news.php">Новости</a>
                <a href="http://snebes.ru/jurnal.php">Журнал <font color="#777777"></font></a><a
                    href="http://snebes.ru/support.php">Служба поддержки <font color="#777777"></font></a><a
                    href="http://snebes.ru/rules.php">Правила</a></div>
            <div class="warning_info">
                <img src="/img/warning.png"> Внимание!<br>Никогда не меняйте
                статус в вк, по чьей-то просьбе и Ваш аккаунт тут будет в безопасности.
                <hr>
                <a href="http://snebes.ru/tasks.php?w=1"><b>Хорошо, можно скрыть.</b></a>
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

                    <script type="text/javascript">


                        function go(tid, uid, h) {
                            document.getElementById('i' + tid).value = '...';
                            $.get('go.php?tid=' + tid + '&uid=' + uid + '&h=' + h, function (data) {
                                document.getElementById('i' + tid).value = data;
                                if (data == 'not found') {
                                    document.getElementById('i2' + tid).style.display = 'none';
                                } else {
                                    if (parseInt(data) > 0) {
                                        var balans = Number(document.getElementById('bal').innerHTML);
                                        var rat = Number(document.getElementById('rat').innerHTML);
                                        document.getElementById('i' + tid).value = 'Выполнено';
                                        document.getElementById('i' + tid).className = 'button_3';
                                        document.getElementById('i' + tid).onclick = '';
                                        document.getElementById('url' + tid).onclick = '';
                                        document.getElementById('url' + tid).style = '';
                                        document.getElementById('c' + tid).style.display = 'none';
                                        balans = balans + Number(data);
                                        document.getElementById('bal').innerHTML = balans;
                                        rat = rat + 1;
                                        document.getElementById('rat').innerHTML = rat;
                                    } else {
                                        document.getElementById('i' + tid).value = 'Ошибка';
                                        document.getElementById('i' + tid).className = 'button_4';
                                        /*document.getElementById('i'+tid).onclick='go('+tid+','+uid+',\''+h+'\')';*/
                                        /*document.getElementById('i'+tid).setAttribute('onclick', 'go('+tid+','+uid+',\''+h+'\')');*/
                                    }
                                }
                            });
                        }
                        ;

                        function cl(tid, uid, h) {
                            document.getElementById('c' + tid).innerHTML = '...';
                            xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function () {
                                if (xhttp.readyState == 4 && xhttp.status == 200)
                                    if (xhttp.responseText == 'ok') {
                                        document.getElementById('i2' + tid).style.display = 'none';
                                    }
                            }
                            xhttp.open('GET', 'gon.php?tid=' + tid + '&uid=' + uid + '&h=' + h, true);
                            xhttp.send();
                        }
                        function openWin(url, id) {
                            var win = window.open('http://vk.com/' + url, '', 'width=900, height=600, top=' + ((screen.height - 600) / 2) + ',left=' + ((screen.width - 900) / 2) + ', resizable=yes, scrollbars=yes, status=yes');
                            var timer = setInterval(function () {
                                if (win.closed) {
                                    clearInterval(timer);
                                    document.getElementById('i' + id).click();
                                }
                            }, 100);
                        }
                    </script>
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
                                        <img src="/img/groups.png">
                                        <b>Вступи</b> public98566114
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