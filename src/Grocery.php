<?php


namespace BnMcG\TescoPHP;


class Grocery
{
    /**
     * Find a grocery product given its TPNC (Tesco Product Number - Consumer Unit (UK Identifier))
     *
     * @param $id
     * @return mixed
     */

    public static function findByTpnc($id) {
        $request = TescoRequestor::get('/grocery/products/', [
            'query' => $id,
            'offset' => 0,
            'limit' => 1
        ]);

        return $request->uk->ghs->products->results[0];
    }
}