<table style="height:100%;width:800px; border-collapse: collapse;"
	ng-controller="userController"
	ng-init="init(<?= \LT\Helpers\Config::getInstance()->getAppId() ?>)">
	<tbody>
	<tr>
		<td valign="top" style="height:100%;width:0%;"></td>
		<td width="" valign="top" style="height:100%;width:100%;">
			<div class="right_block">
				<div class="title" style="padding:15px;"><font color="#333333">
						<center><b>Добро пожаловать на биржу пиара в vk!</b></center>
					</font></div>
				<div class="line_block">
					<center style="padding-top:15px;">
						Чтобы начать работать с сайтом, введите ссылку<br>
						на Вашу страничку ВКонтакте:
						<div id="login_button" ng-click="login()"></div>
					<br></center>
					<hr>
					<br>
					<center><b><font color="#FF3300">Нужны лайки, друзья, подписчики, вступившие в группу?
								Хочешь чтобы тебя увидели и оценили? <br>Ты попал по нужному
								адресу!:)</font></b><br><br><b><font color="#000000">А главное тут все совершенно
								бесплатно!</font></b><br>

						<div class="info"
							 style="margin-top: 15px; padding:15px; line-height: 1.5; text-align:center; color: #333333;">
							На нашем сайте можно бесплатно получить сердечки вконтакте, получить подписчиков
							или найти тысячи друзей. Это работает благодаря обмену с другими пользователями.
							Все происходит Online прямо на сайте. Это анонимно (никто не узнает), быстро и
							безопасно (не надо вводить пароль от вконтакте).
						</div>
						<table style="padding-top: 11px; height:100%;width:100%;">
							<tbody>
							<tr>
								<td align="center">

									<table class="table_3" bordercolor="#DEE4E8" cellpadding="1"
										   style="height:100%;width:85%;">
										<tbody>
										<tr>
											<td bgcolor="#F5F7F8" align="center">
												<font color="#000000"><b style="font-size: 15px;">Вы сможете:<b></b></b></font>
											</td>
										</tr>
										<tr>
											<td bgcolor="" width="100%">
												<img src="/img/likes.png">
												&nbsp; Увеличить количество <b>Мне нравится</b>
											</td>
										</tr>
										<tr>
											<td bgcolor="" width="100%">
												<img src="/img/copies.png">
												&nbsp; Увеличить количество <b>Рассказать друзьям</b>
											</td>
										</tr>
										<tr>
											<td bgcolor="" width="100%">
												<img src="/img/friends.png">
												&nbsp; Увеличить аудиторию Вашей страниц - получить
												подписчиков, <b>друзей</b>
											</td>
										</tr>
										<tr>
											<td bgcolor="" width="100%">
												<img src="/img/groups.png">
												&nbsp; Увеличить аудиторию Вашего сообщества - получить <b>участников</b>
											</td>
										</tr>
										<tr>
											<td bgcolor="" width="100%">
												<img src="/img/comm.png">
												&nbsp; Увеличить количество <b>комментариев</b> на Ваших
												фотографиях, записях
											</td>
										</tr>
										</tbody>
									</table>
								</td>
							</tr>
							</tbody>
						</table>
					</center>
				</div>
			</div>
		</td>
	</tr>
	</tbody>
</table>
