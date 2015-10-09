<table style="height:100%;width:800px; border-collapse: collapse;">
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
                    href="http://snebes.ru/my_tasks.php">Потратить баллы</a><a
                    href="http://snebes.ru/transfer.php">Перевод баллов</a><a
                    href="http://snebes.ru/referals.php">Партнерская программа</a><a
                    href="http://snebes.ru/news.php">Новости <font color="#777777"></font></a><a
                    href="http://snebes.ru/jurnal.php">Журнал <font color="#777777"></font></a><a
                    href="http://snebes.ru/support.php">Служба поддержки <font color="#777777"></font></a><a
                    href="http://snebes.ru/rules.php">Правила</a></div>
            <div class="warning_info">
                <img src="/img/warning.png"> Внимание!<br>Никогда не меняйте
                статус в вк, по чьей-то просьбе и Ваш аккаунт тут будет в безопасности.
                <hr>
                <a href="http://snebes.ru/add_tasks.php?w=1"><b>Хорошо, можно скрыть.</b></a>
            </div>
        </td>
        <td width="" valign="top" style="height:100%;width:75%;">
            <div class="right_block">
                <div class="title"><a href="http://snebes.ru/my_tasks.php?">Все</a><a
                        href="http://snebes.ru/my_tasks.php?c=1">Лайки</a><a
                        href="http://snebes.ru/my_tasks.php?c=2">Сообщества</a><a
                        href="http://snebes.ru/my_tasks.php?c=3">Друзья</a><a
                        href="http://snebes.ru/my_tasks.php?c=4">Репосты</a><a
                        href="http://snebes.ru/my_tasks.php?c=5">Опросы</a><a
                        href="http://snebes.ru/my_tasks.php?c=6">Комменты</a><a
                        href="http://snebes.ru/add_tasks.php" class="title_select">Новое</a></div>
                <div class="line_block">
                    <center><h4>Заказ накрутки "Мне нравится":</h4></center>
                    <div id="1" class="info">
                        Прежде чем вводить ссылку, проверьте, не защищена ли она настройками
                        приватности.<br>
                    </div>
                    <script type="text/javascript"
                            src="/img/jquery-1.11.0.min.js">
                    </script>
                    <script type="text/javascript">
                        function s() {
                            var url = $('#url').val();
                            var price = $('#pri').val();
                            var balls = $('#balls').val();
                            $('#button1').attr('onclick', '');
                            $('#button1').val('Пожалуйста, ждите...');
                            $.get('c.php?action=add_1&url=' + url + '&price=' + price + '&balls=' + balls, function (data) {
                                if (data == 'ok') {
                                    $('#2').css('display', 'none');
                                    $('#1').attr('class', 'okey');
                                    $('#1').html('<font color = "green"><b>Заказ успешно добавлен в <a href = "my_tasks.php">список Ваших заданий</a>!</b></font>');
                                } else {
                                    $('#1').attr('class', 'error');
                                    $('#button1').attr('onclick', 's()');
                                    $('#button1').val('Добавить задание');
                                    if (data == '1') {
                                        $('#1').html('Пожалуйста, заполните все поля.');
                                    }
                                    if (data == '2') {
                                        $('#1').html('Вы ввели ссылку не правильно. Ссылка должна иметь такой вид, как на следующих примерах:<br>https://vk.com/wall345678_12345;<br>photo345678_12345;<br>video345678_12345.');
                                    }
                                    if (data == '3') {
                                        $('#1').html('Запись не найдена или защищена настройками приватности. Проверьте существует ли запись или откройте к ней доступ для всех пользователей.');
                                    }
                                    if (data == '33') {
                                        $('#1').html('Фотография не найдена или защищена настройками приватности. Проверьте существует ли фотография или откройте к ней доступ для всех пользователей.');
                                    }
                                    if (data == '333') {
                                        $('#1').html('Видеозапись не найдена или защищена настройками приватности. Проверьте существует ли видеозапись или откройте к ней доступ для всех пользователей.');
                                    }
                                    if (data == '5') {
                                        $('#1').html('У Вас нет на балансе столько баллов, чтобы сделать такой заказ.');
                                    }
                                    if (data == '6') {
                                        $('#1').html('Минимальная цена задания - 2 балла.');
                                    }
                                    if (data == '7') {
                                        $('#1').html('Заказ должен быть хотя бы на 10 лайков, как минимум.');
                                    }
                                    if (data == '8') {
                                        $('#1').html('Это задание заблокировано.');
                                    }
                                    if (data == '9') {
                                        $('#1').html('Такое задание у Вас уже существует. Сначала удалите его в категории <a href="my_tasks.php"><b>Мои задания</b></a>');
                                    }

                                    if (data == '99') {
                                        $('#1').html('Пожалуйста, сначала откройте полный доступ к фотографии. <br> Зайдите "Вконтакте" : Мои настройки->Приватность <br> На поле "Кто видит комментарии к записям" установите <b>Все пользователи</b> ');
                                    }

                                }
                            });

                        }
                        ;
                    </script>
                    <div id="2">
                        <form action="http://snebes.ru/add_tasks.php?t=add&type=1" method="post">
                            <table class="table_2" cellpadding="1" style="height:100%;width:100%;">
                                <tbody>
                                <tr>
                                    <td style="height:100%;width:230px;" valign="top">
                                        <b>1. Ссылка:</b><br>
                                        <font color="#777777">Введите ссылку, куда лайкать</font>
                                    </td>
                                    <td valign="top">
                                        <input id="url" class="form_text" type="text" name="url"
                                               maxlength="100" style="width: 90%"
                                               placeholder="на запись, фото или видео">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:100%;width:230px;" valign="top">
                                        <b>2. Цена задания (мин. 2 балла):</b><br>
                                        <font color="#777777">Введите цену, которую будете платить за
                                            лайк<br>Чем выше цена, тем выше Ваш заказ в списке
                                            заданий</font>
                                    </td>
                                    <td valign="top">
                                        <input id="pri" class="form_text" type="text" name="price"
                                               maxlength="7" style="width: 85px" value="13"><br>
                                        <small>С комиссией: <b id="pri_kom">9<b></b></b></small>
                                        <b id="pri_kom"><b>
                                            </b></b></td>
                                </tr>
                                <tr>
                                    <td style="height:100%;width:230px;" valign="top">
                                        <b>3. Сколько нужно лайков:</b><br>
                                        <font color="#777777">Минимум 10</font>
                                    </td>
                                    <td valign="top">
                                        <input id="ko" class="form_text" type="text" name="ko" maxlength="7"
                                               style="width: 85px" value="15">
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
                                               maxlength="7" style="width: 85px" value="195"
                                               disabled="disabled"><br>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <center>
                                <input id="button1" type="button" value="Добавить задание" class="submit"
                                       onclick="s()">
                            </center>
                        </form>

                        <hr>
                        <center><font color="#777777">
                                Комиссия системы от цены задания 30% или минимум 1 балл.
                            </font></center>
                        <script type="text/javascript"
                                src="/img/jquery-1.11.0.min.js"></script>
                        <script type="text/javascript"> $("#pri").keyup(function () {
                                var p = Number($("#pri").val());
                                var k = Number($("#ko").val());
                                if (p < 10) {
                                    $("#pri_kom").html(Math.floor(p - 1));
                                } else {
                                    $("#pri_kom").html(Math.floor(p - (p / 100 * 30)));
                                }
                                $("#balls").val(p * k);
                                $("#balanse").val(p * k);
                            });
                            $("#ko").keyup(function () {
                                var p = Number($("#pri").val());
                                var k = Number($("#ko").val());
                                $("#balls").val(p * k);
                                $("#balanse").val(p * k);
                            });</script>
                    </div>
                </div>
            </div>
        </td>
    </tr>
    </tbody>
</table>