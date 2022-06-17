<?php

require 'vendor/autoload.php';
require 'settings.php';

class GitHubApi
{
    private $client;

    public function __construct()
    {
        $this->client = new GuzzleHttp\Client();
    }

    public function getDataUser($userName)
    {
        $response = $this->client->request(
            "GET",
            "https://api.github.com/users/{$userName}",
        );

        $response = json_decode($response->getBody());
        return $response;

    }

}

?>