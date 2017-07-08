<?php


namespace BnMcG\TescoPHP\Tests;


class EnvironmentTest extends TestCase
{
    public function testEnvironmentVariables() {
        $this->assertNotNull(getenv('TESCO_SUBSCRIPTION_KEY'));
    }
}