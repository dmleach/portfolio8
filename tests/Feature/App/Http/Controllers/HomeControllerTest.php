<?php

namespace Tests\Feature;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    public function testIndex()
    {
        Config::set(HomeController::TILES_CONFIG_KEY, ['text' => ['test-string-1', 'test-string-2']]);
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSeeText(['test-string-1', 'test-string-2']);
        $response->assertDontSeeText('test-string-3');
    }
}
