<?php

namespace LT\Helpers;

use A7\A7;
use A7\ReflectionUtils;
use LT\Exceptions\UndefinedMethodException;

class App {

    /** @var App */
    protected static $instance;
    protected static $phpWarning = [
        E_WARNING,
        E_CORE_WARNING,
        E_COMPILE_WARNING,
        E_USER_WARNING,
        E_NOTICE,
        E_USER_NOTICE,
    ];
    protected static $session;
    protected static $page;
    protected static $locales;

    protected $builder;

    /**
     * @var \A7\A7
     */
    public $container;

    private function  __construct() {
    }

    /**
     * @return App
     */
    public static function getInstance() {
        if(!isset(static::$instance)) {
            static::$instance = new self();
            static::$instance->init();
        }
        return static::$instance;
    }


    protected function init() {
        $config = Config::getInstance();
        if($config->useSession) {
            session_start();
        }
        set_error_handler(['LT\Helpers\App','errorHandler']);
        $this->container = new A7();
        $this->container->enablePostProcessor('DependencyInjection', $config->definition);
        $this->container->enablePostProcessor('Transaction', ['class' => '\LT\Helpers\DB']);
    }

    public static function getPartnerId() {
        return Config::getInstance()->partnerId;
    }

    public static function getUserId() {
        $id = 0;
        $user = static::getSession()->user;
        if(isset($user)) {
            $id = $user->getVkId();
        }
        return $id;
    }

    private static function initLocales() {
        if(!isset(static::$locales)) {
            $path = Config::getGlobalDir()."/locale/".static::getInstance()->getLocale().".json";
            if(file_exists($path)) {
                static::$locales = json_decode(file_get_contents($path));
            } else {
                static::$locales = [];
            }
        }
    }

    public function callFromRequest(array $arguments = []) {
        $classData  = static::getClassNameAndMethodFromURI();
        $className  = str_replace('-', '', $classData['className']);
        $methodName = str_replace('-', '', $classData['methodName']);
        if(empty($className)) {
            throw new \UnexpectedValueException('empty class name');
        }
        if(empty($methodName)) {
            throw new \UnexpectedValueException('empty method name');
        }
        $className = 'LT\Services\\'.ucfirst($className).'Service';

        return $this->call($className, $methodName, $arguments);
    }

    protected static function getClassNameAndMethodFromURI($apiPrefix = 'api/') {
        $retData = [
            'className'  => '',
            'methodName' => '',
        ];
        $requestURI = $_SERVER['REQUEST_URI'];
        $pos = strpos($requestURI, $apiPrefix);
        if($pos !== false) {
            $requestURI = substr($requestURI, $pos+strlen($apiPrefix));
            $parsData = explode('/', $requestURI);
            if(count($parsData) > 0) {
                $retData['className'] = $parsData[0];
            }
            if(count($parsData) > 1) {
                $retData['methodName'] = $parsData[1];
            }
        }
        return $retData;
    }

    public function call($className, $methodName, array $arguments = []) {
        $class = $this->container->get($className);
        if(A7::methodExists($class, $methodName)) {
            $reflectorMethod = ReflectionUtils::getInstance()->getMethodReflection($className, $methodName);
            foreach ($reflectorMethod->getParameters() as $param) {
                if(isset($arguments[$param->name])) {
                    $paramRefClass = $param->getClass();
                    if($paramRefClass instanceof \ReflectionClass) {
                        $parentClass = $paramRefClass->getParentClass();
                        if($parentClass && $parentClass->name == 'LT\Helpers\Model') {
                            if(!$arguments[$param->name] instanceof Model) {
                                $arguments[$param->name] = new $paramRefClass->name($arguments[$param->name]);
                            }
                        } elseif($paramRefClass->name == 'DateTime') {
                            if(!$arguments[$param->name] instanceof \DateTime) {
                                $arguments[$param->name] = new \DateTime($arguments[$param->name]);
                            }
                        }
                    }
                }
            }
        } else {
            throw new UndefinedMethodException();
        }

        return $this->container->call($class, $methodName, $arguments);
    }

    public static function exceptionHandler(\Exception $exception) {
        if (Config::getInstance()->environment != 'development') {
            return;
        }
        $content = $exception->getMessage()."\n file ".$exception->getFile()." line ".$exception->getLine();
        Notification::error(1, $content, 'php_exception');
    }

    public static function errorHandler($errno, $errstr, $errfile, $errline) {
        if(Config::getInstance()->environment != 'development') {
            return;
        }

        if($errno == E_STRICT) {
            return;
        }

        $content = $errstr."\n file ".$errfile." line ".$errline;

        if(in_array($errno, static::$phpWarning)) {
            Notification::warning(1, $content, 'php_warning');
        } else {
            Notification::error(1, $content, 'php_error');
        }
    }

    public static function getCurrentPage() {
        $page = 'index';
        if(isset(static::$page)) {
            $page = static::$page;
        } elseif(isset($_GET['page'])) {
            $page = $_GET['page'];
        }
        static::$page = $page;
        return $page;
    }

    public static function setCurrentPage($page) {
        static::$page = $page;
    }

    /*************** USER ***************/
    /**
     * @return Session
     */
    public static function getSession() {
        if(!isset(static::$session)) {
            static::$session = new Session();
        }
        return static::$session;
    }

    /**
     * @return bool
     * @throws \LT\Exceptions\ConfigurationException
     */
    public static function isLoggedUser() {
        $config = Config::getInstance();
        if($config->test) {
            return true;
        }
        $session = static::getSession();
        return isset($session->isLogged) ? $session->isLogged : false;
    }

    public static function getUserRole() {
        return Defines::ROLE_ADMIN;
    }
    public static function getUserData() {
        $app = static::getInstance();
        /** @var \LT\Services\UserService $userDAO */
        $userDAO = $app->container->get('LT\Services\UserService');
        return $userDAO->getUserData();
    }

    public static function redirectHandler() {
        Template::file('redirect.php');
    }


    public static function getLocale() {
        return 'ru_RU';
    }

    /*************** COMMON DATA ***************/

    /**
     * Translate the word
     *
     * @param String $key Word
     * @return String Translated word
     */
    public static function t($key) {
        static::initLocales();
        if (array_key_exists($key, static::$locales)) {
            return static::$locales[$key];
        } else {
            return $key;
        }
    }

}