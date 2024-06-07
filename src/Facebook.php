<?php
namespace MySocialPosts;

use GuzzleHttp\Client;

class Facebook {
    private $accessToken;
    private $client;

    public function __construct($accessToken) {
        $this->accessToken = $accessToken;
        $this->client = new Client();
    }

    public function getPosts($pageId, $limit = 10) {
        $url = "https://graph.facebook.com/$pageId/posts";
        $response = $this->client->request('GET', $url, [
            'query' => [
                'fields' => 'id,message,story,created_time,full_picture,permalink_url',
                'access_token' => $this->accessToken,
                'limit' => $limit
            ]
        ]);

        return json_decode($response->getBody(), true);
    }
}
