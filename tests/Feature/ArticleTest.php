<?php

namespace Tests\Feature;

use App\Http\Middleware\ApiAuthentication;
use Tests\TestCase;

class ArticleTestTest extends TestCase
{
     public function testCreateArticle() {

        $data = [];

        $credentials = [
            'email' => 'admin@admin.com',
            'password' => 'admin',
        ];

        $response = $this->post('/api/v1/articles',$data, $this->getToken($credentials));

        $response->assertStatus(422);

        $data = [
            'name' => 'MyArticle',
            'announce' => 'This is announce',
            'description' => 'This is description'
        ];

        $response = $this->post('/api/v1/articles',$data, $this->getToken($credentials));

        $response->assertStatus(201);
    }

    private function getToken($credentials)
    {
        $token = auth('api')->attempt($credentials);

        return ['Authorization' => 'Bearer ' . $token];
    }
}
