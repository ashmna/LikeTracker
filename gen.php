<?php
namespace A7\Commands;

require_once __DIR__. "/vendor/autoload.php";

use A7\Utils\AutoTestGen;

class AutoTest
{

    public static function genUnit()
    {
        AutoTestGen::generate(
            __DIR__.'/Tests/a7-tests-records.php',
            __DIR__.'/Tests/Auto/Unit/',
            'LT\Tests\Auto\Unit',
            'Unit'
        );
    }

    public static function genIntegration()
    {
        AutoTestGen::generate(
            __DIR__.'/Tests/a7-tests-records.php',
            __DIR__.'/Tests/Auto/Integration/',
            'LT\Tests\Auto\Integration',
            'Integration'
        );
    }

}

AutoTest::genUnit();
AutoTest::genIntegration();
