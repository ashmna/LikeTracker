		</td>
	</tr>
</tbody>
</table>

<?php
use LT\Helpers\App;
if(App::isLoggedUser()) { ?>


<script src="/global/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="/global/ng/app.js"></script>
<?php } else { ?>
<script src="/global/ng/app.js"></script>
<?php } ?>

<!-- angular -->
<script src="/global/ng/factory/serverConnector.js"></script>
<script src="/global/ng/factory/notification.js"></script>

<!-- angular services -->
<script src="/global/ng/service/userService.js"></script>

<!-- angular controllers -->
<script src="/global/ng/controller/userController.js"></script>
<script src="/global/ng/controller/taskListController.js"></script>

	<!-- angular directives -->
<script src="/global/ng/directives/perfectUploader.js"></script>
<script src="/global/ng/directives/perfectDatepicker.js"></script>
<script src="/global/ng/directives/perfectTimeInput.js"></script>



</body>
</html>