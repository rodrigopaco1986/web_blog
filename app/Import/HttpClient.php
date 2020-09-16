<?php

namespace App\Import;


use GuzzleHttp\Client;

class HttpClient
{

    /**
     * @var null
     */
    static $httpClient = null;

    /**
     * @return Client|null
     */
    public static function client()
    {
        if(isset(self::$httpClient)) {
            return self::$httpClient;
        }

        $opts = [
            'curl' => [
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_SSL_VERIFYPEER => false,
            ],
            'verify' => false,
            'defaults' => [
                'curl' => [
                    CURLOPT_SSL_VERIFYHOST => false,
                    CURLOPT_SSL_VERIFYPEER => false,
                ],
                'verify' => false
            ],
            'timeout' => 60,
        ];
        return self::$httpClient = new Client($opts);
    }
}
