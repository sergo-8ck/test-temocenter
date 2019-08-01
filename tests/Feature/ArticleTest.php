<?php

namespace Tests\Feature;

use App\Http\Middleware\ApiAuthentication;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ArticleTestTest extends TestCase
{
    use RefreshDatabase;

    public function setUp():void {

        parent::setUp();

        $this->refreshDatabase();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAuthentication()
    {
        $response = $this->get('/');

        $response->assertStatus(401);
    }

    public function testAuthenticationArticles()
    {
        $response = $this->get('/api/v1/articles');

        $response->assertStatus(401);
    }

    public function testGetArticles()
    {
        $response = $this->get('/api/v1/articles', self::getToken());

        $response->assertStatus(200);
    }

    public function testCreateArticle() {

        $data = [];

        $response = $this->post('/api/v1/articles',$data, self::getToken());

        $response->assertStatus(422);

        $data = [
            'name' => 'MyArticle',
            'announce' => 'This is announce',
            'description' => 'This is description'
        ];

        $response = $this->post('/api/v1/articles', $data, self::getToken());

        $response->assertStatus(201);
    }

    private static function getToken() {

        return [ApiAuthentication::API_KEY_HEADER => config('services.api.token')];
    }
}
