<?php


namespace BnMcG\TescoPHP\Tests;


use BnMcG\TescoPHP\TescoRequestor;

class RequestorTest extends TestCase
{
    public function testGetRequest() {
        $object = TescoRequestor::get('/product', [
            'tpnc' => '255927642'
        ]);

        $this->assertNotNull($object);
        $this->assertObjectHasAttribute('products', $object);
    }
}