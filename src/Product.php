<?php


namespace BnMcG\TescoPHP;


class Product
{
    /**
     * Find a product given its TPNC (Tesco Product Number - Consumer Unit (UK Identifier))
     *
     * @param $id
     * @return mixed
     */

    public static function findByTpnc($id) {
        $request = TescoRequestor::get('/product', [
            'tpnc' => $id
        ]);

        return $request->products[0];
    }

    /**
     * Find a product given its Global Trade Identification Number (e.g. an EAN 13: 4548736003446)
     *
     * @param $id
     * @return mixed
     */

    public static function findByGtin($id) {
        $request = TescoRequestor::get('/product', [
            'gtin' => $id
        ]);

        return $request->products[0];
    }

    /**
     * Find a product given its Tesco Product Number - Base Product (UK Identifier) e.g. 079121963
     *
     * @param $id
     * @return mixed
     */

    public static function findByTpnb($id) {
        $request = TescoRequestor::get('/product', [
            'tpnb' => $id
        ]);

        return $request->products[0];
    }
}