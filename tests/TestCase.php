<?php


namespace BnMcG\TescoPHP\Tests;

use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class TestCase extends PHPUnitTestCase
{
    /**
     * Load testing environment variables before running tests
     */

    public static function setUpBeforeClass() {
        $dotenv = new Dotenv(__DIR__.'/../', '.env.testing');
        $dotenv->load();
    }
}