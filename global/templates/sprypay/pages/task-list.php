<table style="height:100%;width:800px; border-collapse: collapse;" ng-controller="taskListController">
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
                    <a href="#all"      ng-class="tab=='/all'      ? 'title_select' : ''">Все</a>
                    <a href="#likes"    ng-class="tab=='/likes'    ? 'title_select' : ''">Лайки</a>
                    <a href="#messages" ng-class="tab=='/messages' ? 'title_select' : ''">Сообщества</a>
                    <a href="#friends"  ng-class="tab=='/friends'  ? 'title_select' : ''">Друзья</a>
                    <a href="#share"    ng-class="tab=='/share'    ? 'title_select' : ''">Репосты</a>
                    <a href="#polls"    ng-class="tab=='/polls'    ? 'title_select' : ''">Опросы</a>
                    <a href="#comments" ng-class="tab=='/comments' ? 'title_select' : ''">Комменты</a>
                    <!--<a href="#my_tasks">Мои задания</a>-->
                </div>
                <div class="line_block">
                    <div class="info2">
                        <center>Выполнять отмену выполненного задания <b>- запрещено</b>!</center>
                    </div>
                    <center><br>
                        <a href="http://snebes.ru/tasks.php?c=0">[обновить страницу]</a>
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
                    <table class="table_2" bordercolor="#DEE4E8" cellpadding="1"
                           style="height:100%;width:100%;&gt;&lt;tr&gt;&lt;td bgcolor=" #f5f7f8
                    "="">
                    <tbody>
                    <tr>
                        <td bgcolor="#F5F7F8" align="center"><b>Цена</b></td>
                        <td bgcolor="#F5F7F8" align="center"><b>Ссылка</b></td>
                        <td bgcolor="#F5F7F8" align="center"><b>Действие</b></td>
                    </tr>
                    <tr id="i22421150">
                        <td align="center"><b>+35</b> <img
                                src="/img/balls.png"></td>
                        <td align="center">
                            <div class="b1">
                                <div id="url2421150" href="#"
                                     onclick="openWin(&#39;public98566114&#39;,2421150)"
                                     style="cursor:pointer"><img
                                        src="/img/groups.png"> <b>Вступи</b>
                                    public98566114
                                </div>
                            </div>
                        </td>
                        <td><input class="button_2" id="i2421150" type="button" value="Готово"
                                   onclick="go(2421150,201020665,&#39;012b0c2a9e8d63c42e9d75b7df85a3b3&#39;)">
                            <a id="c2421150" href="http://snebes.ru/tasks.php?#"
                               onclick="cl(2421150,201020665,&#39;012b0c2a9e8d63c42e9d75b7df85a3b3&#39;)">Игнор</a>
                        </td>
                    </tr>
                    <tr id="i22677578">
                        <td align="center"><b>+29</b> <img
                                src="/img/balls.png"></td>
                        <td align="center">
                            <div class="b1">
                                <div id="url2677578" href="#"
                                     onclick="openWin(&#39;club102924927&#39;,2677578)"
                                     style="cursor:pointer"><img
                                        src="/img/groups.png"> <b>Вступи</b>
                                    club102924927
                                </div>
                            </div>
                        </td>
                        <td><input class="button_2" id="i2677578" type="button" value="Готово"
                                   onclick="go(2677578,201020665,&#39;47eed568ebc05453fc6d61e04e097ee6&#39;)">
                            <a id="c2677578" href="http://snebes.ru/tasks.php?#"
                               onclick="cl(2677578,201020665,&#39;47eed568ebc05453fc6d61e04e097ee6&#39;)">Игнор</a>
                        </td>
                    </tr>
                    <tr id="i22677589">
                        <td align="center"><b>+29</b> <img
                                src="/img/balls.png"></td>
                        <td align="center">
                            <div class="b1">
                                <div id="url2677589" href="#"
                                     onclick="openWin(&#39;club102417942&#39;,2677589)"
                                     style="cursor:pointer"><img
                                        src="/img/groups.png"> <b>Вступи</b>
                                    club102417942
                                </div>
                            </div>
                        </td>
                        <td><input class="button_2" id="i2677589" type="button" value="Готово"
                                   onclick="go(2677589,201020665,&#39;83df00440df8a90bbcc2571ec85e51bc&#39;)">
                            <a id="c2677589" href="http://snebes.ru/tasks.php?#"
                               onclick="cl(2677589,201020665,&#39;83df00440df8a90bbcc2571ec85e51bc&#39;)">Игнор</a>
                        </td>
                    </tr>
                    <tr id="i22674652">
                        <td align="center"><b>+29</b> <img
                                src="/img/balls.png"></td>
                        <td align="center">
                            <div class="b1">
                                <div id="url2674652" href="#"
                                     onclick="openWin(&#39;club101121860&#39;,2674652)"
                                     style="cursor:pointer"><img
                                        src="/img/groups.png"> <b>Вступи</b>
                                    club101121860
                                </div>
                            </div>
                        </td>
                        <td><input class="button_2" id="i2674652" type="button" value="Готово"
                                   onclick="go(2674652,201020665,&#39;a9ae343651724563cd0a061db3a7ea34&#39;)">
                            <a id="c2674652" href="http://snebes.ru/tasks.php?#"
                               onclick="cl(2674652,201020665,&#39;a9ae343651724563cd0a061db3a7ea34&#39;)">Игнор</a>
                        </td>
                    </tr>
                    <tr id="i22677587">
                        <td align="center"><b>+29</b> <img
                                src="/img/balls.png"></td>
                        <td align="center">
                            <div class="b1">
                                <div id="url2677587" href="#"
                                     onclick="openWin(&#39;club103610466&#39;,2677587)"
                                     style="cursor:pointer"><img
                                        src="/img/groups.png"> <b>Вступи</b>
                                    club103610466
                                </div>
                            </div>
                        </td>
                        <td><input class="button_2" id="i2677587" type="button" value="Готово"
                                   onclick="go(2677587,201020665,&#39;d55bbed6fa4eff55063654e77c43dba2&#39;)">
                            <a id="c2677587" href="http://snebes.ru/tasks.php?#"
                               onclick="cl(2677587,201020665,&#39;d55bbed6fa4eff55063654e77c43dba2&#39;)">Игнор</a>
                        </td>
                    </tr>
                    <tr id="i21757182">
                        <td align="center"><b>+28</b> <img
                                src="/img/balls.png"></td>
                        <td align="center">
                            <div class="b1">
                                <div id="url1757182" href="#"
                                     onclick="openWin(&#39;id210615904&#39;,1757182)"
                                     style="cursor:pointer"><img
                                        src="/img/friends.png"> <b>Добавь</b>
                                    id210615904
                                </div>
                            </div>
                        </td>
                        <td><input class="button_2" id="i1757182" type="button" value="Готово"
                                   onclick="go(1757182,201020665,&#39;3485a1fc045b1f5a5179749be8e7628f&#39;)">
                            <a id="c1757182" href="http://snebes.ru/tasks.php?#"
                               onclick="cl(1757182,201020665,&#39;3485a1fc045b1f5a5179749be8e7628f&#39;)">Игнор</a>
                        </td>
                    </tr>
                    <tr id="i22597560">
                        <td align="center"><b>+28</b> <img
                                src="/img/balls.png"></td>
                        <td align="center">
                            <div class="b1">
                                <div id="url2597560" href="#"
                                     onclick="openWin(&#39;id180792358&#39;,2597560)"
                                     style="cursor:pointer"><img
                                        src="/img/friends.png"> <b>Добавь</b>
                                    id180792358
                                </div>
                            </div>
                        </td>
                        <td><input class="button_2" id="i2597560" type="button" value="Готово"
                                   onclick="go(2597560,201020665,&#39;887dbde478f76e9de806f4ec93c53369&#39;)">
                            <a id="c2597560" href="http://snebes.ru/tasks.php?#"
                               onclick="cl(2597560,201020665,&#39;887dbde478f76e9de806f4ec93c53369&#39;)">Игнор</a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <center>Если выполнил(а), обновляй страницу!:)</center>
                        </td>
                    </tr>
                    </tbody>
</table>