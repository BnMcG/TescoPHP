<?php


namespace BnMcG\TescoPHP\Tests;


use BnMcG\TescoPHP\Grocery;

class GroceryTest extends TestCase
{
    public function testFindByTpnc() {
        $object = Grocery::findByTpnc('255927642');

        var_dump($object);

        $this->assertNotNull($object);

        $this->assertObjectHasAttribute('name', $object);
        $this->assertObjectHasAttribute('description', $object);
        $this->assertObjectHasAttribute('price', $object);
        $this->assertObjectHasAttribute('ContentsMeasureType', $object);
    }
}