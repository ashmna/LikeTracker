<?php
use LT\Helpers\App;
use LT\Helpers\Config;
use LT\Helpers\Template;

require_once dirname(dirname(__DIR__)) . '/vendor/autoload.php';

Config::init(__DIR__);
App::redirectHandler();
Template::init();