<?php
namespace MySocialPosts;

use GuzzleHttp\Client;

class Instagram {
    private $accessToken;
    private $client;

    public function __construct($accessToken) {
        $this->accessToken = $accessToken;
        $this->client = new Client();
    }

    public function getPosts() {
        $url = "https://graph.instagram.com/me/media";
        $response = $this->client->request('GET', $url, [
            'query' => [
                'fields' => 'id,caption,media_type,media_url,thumbnail_url,permalink',
                'access_token' => $this->accessToken
            ]
        ]);

        return json_decode($response->getBody(), true);
    }
}
