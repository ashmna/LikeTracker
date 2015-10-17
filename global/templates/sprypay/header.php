<?php
use LT\Helpers\Config;
use LT\Helpers\App;
?>
<!DOCTYPE html>
<html ng-app="app">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<link rel="icon" href="/img/favicon.ico">
	<link rel="stylesheet" href="/css/style.css" type="text/css">
	<script src="/global/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="/global/bower_components/angular/angular.min.js"></script>
	<script src="/global/bower_components/angular-sanitize/angular-sanitize.min.js"></script>
	<script src="/global/bower_components/angular-route/angular-route.min.js"></script>
	<?php if(App::isLoggedUser()) { ?>
	<?php } else { ?>
	<script src="http://vk.com/js/api/openapi.js" type="text/javascript"></script>
	<?php } ?>
	<title><?= Config::getInstance()->partnerName ?></title>
</head>
<body>

<table style="height:100%;width:100%;">
	<tbody>
	<tr>
		<td align="center">
