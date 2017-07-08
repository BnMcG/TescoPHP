<?php
/**
 * Created by PhpStorm.
 * User: bmagee
 * Date: 08/07/2017
 * Time: 21:00
 */

namespace BnMcG\TescoPHP;


use GuzzleHttp\Client;

class TescoRequestor
{
    public static function get($uri, $params) {
        $client = new Client([
            'base_uri' => 'https://dev.tescolabs.com'
        ]);

        $response = $client->get($uri, [
            'query' => $params,
            'headers' => [
                'Ocp-Apim-Subscription-Key' => getenv('TESCO_SUBSCRIPTION_KEY')
            ]
        ]);

        return json_decode($response->getBody());

    }
}