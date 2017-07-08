<?php


namespace BnMcG\TescoPHP\Tests;


use BnMcG\TescoPHP\Product;
use BnMcG\TescoPHP\TescoRequestor;

class ProductTest extends TestCase
{
    public function testFindByTpnc() {
        $object = Product::findByTpnc('255927642');

        $this->assertNotNull($object);

        $this->assertObjectHasAttribute('tpnc', $object);
        $this->assertObjectHasAttribute('description', $object);
        $this->assertObjectHasAttribute('qtyContents', $object);
        $this->assertObjectHasAttribute('productCharacteristics', $object);
    }

    public function testFindByGtin() {
        $object = Product::findByGtin('07312040017034');

        $this->assertNotNull($object);

        $this->assertObjectHasAttribute('tpnc', $object);
        $this->assertObjectHasAttribute('description', $object);
        $this->assertObjectHasAttribute('qtyContents', $object);
        $this->assertObjectHasAttribute('productCharacteristics', $object);
    }

    public function testFindByTpnb() {
        $object = Product::findByTpnb('057844158');

        $this->assertNotNull($object);

        $this->assertObjectHasAttribute('tpnc', $object);
        $this->assertObjectHasAttribute('description', $object);
        $this->assertObjectHasAttribute('qtyContents', $object);
        $this->assertObjectHasAttribute('productCharacteristics', $object);
    }
}