<?php

namespace Gonon;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Gonon\ApiException;

class GameValidation
{
    const API_URL = "https://gonon.my.id/api/v1/game-validation";
    
    public function checkUser($code, $userId, $zoneId = null)
    {
        
        $field = array(
            'code' => (string) $code,
            'userId' => (string) $userId,
            'zoneId' => (string) $zoneId
        );
        
        return self::request(self::API_URL . "/check", $field);
    }
    
    public function gameList()
    {
        return self::request(self::API_URL . "/list");
    }
    
    protected function request($url, $post = false, $headers = false)
    {
        $client = new Client();

        if ($post) {
            $response = $client->request('POST', $url, [
                'json' => $post,
            ])->getBody()->getContents();
        } else {
            $response = $client->request('GET', $url)->getBody()->getContents();
        }

        $response = json_decode($response);
        return $response;
    }
}