<?php


namespace LT\Helpers;


class UnitTestCase extends \PHPUnit_Framework_TestCase {

    /** @var \LT\Helpers\App */
    protected $app;

    public function setUp() {
        Config::init('test');
        $this->app = App::getInstance();
    }

    public function invokeMethod($class, $methodName, array $parameters = []) {
        $reflection = new \ReflectionClass(get_class($class));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);

        return $method->invokeArgs($class, $parameters);
    }
}