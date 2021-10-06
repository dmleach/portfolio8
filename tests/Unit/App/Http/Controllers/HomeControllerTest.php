<?php

namespace Tests\Unit\App\Http\Controllers;

use App\Http\Controllers\HomeController;
use PHPUnit\Framework\TestCase;

class HomeControllerTest extends TestCase
{
    public function provideGetTiles()
    {
        return [
            'Multiple text, multiple colors' => [
                'testTilesConfig' => [
                    'text' => ["test-text-1", "test-text-2", "test-text-3",],
                    'colorClasses' => ['test-color-1', 'test-color-2', 'test-color-3',]
                ],
                'expectedTileCount' => 3,
            ],
            'Multiple text, single color' => [
                'testTilesConfig' => [
                    'text' => ["test-text-1", "test-text-2", "test-text-3",],
                    'colorClasses' => ['test-color-1']
                ],
                'expectedTileCount' => 3,
            ],
            'Multiple text, empty colors' => [
                'testTilesConfig' => [
                    'text' => ["test-text-1", "test-text-2", "test-text-3",],
                    'colorClasses' => []
                ],
                'expectedTileCount' => 3,
            ],
            'Multiple text, no colors' => [
                'testTilesConfig' => [
                    'text' => ["test-text-1", "test-text-2", "test-text-3",],
                ],
                'expectedTileCount' => 3,
            ],
            'Single text, multiple colors' => [
                'testTilesConfig' => [
                    'text' => ["test-text-2",],
                    'colorClasses' => ['test-color-1', 'test-color-2', 'test-color-3',]
                ],
                'expectedTileCount' => 1,
            ],
            'Single text, single color' => [
                'testTilesConfig' => [
                    'text' => ["test-text-2",],
                    'colorClasses' => ['test-color-1']
                ],
                'expectedTileCount' => 1,
            ],
            'Single text, empty colors' => [
                'testTilesConfig' => [
                    'text' => ["test-text-2",],
                    'colorClasses' => []
                ],
                'expectedTileCount' => 1,
            ],
            'Single text, no colors' => [
                'testTilesConfig' => [
                    'text' => ["test-text-2",],
                ],
                'expectedTileCount' => 1,
            ],
            'Empty text, multiple colors' => [
                'testTilesConfig' => [
                    'text' => [],
                    'colorClasses' => ['test-color-1', 'test-color-2', 'test-color-3',]
                ],
                'expectedTileCount' => 0,
            ],
            'Empty text, single color' => [
                'testTilesConfig' => [
                    'text' => [],
                    'colorClasses' => ['test-color-1']
                ],
                'expectedTileCount' => 0,
            ],
            'Empty text, empty colors' => [
                'testTilesConfig' => [
                    'text' => [],
                    'colorClasses' => []
                ],
                'expectedTileCount' => 0,
            ],
            'Empty text, no colors' => [
                'testTilesConfig' => [
                    'text' => [],
                ],
                'expectedTileCount' => 0,
            ],
            'No text, multiple colors' => [
                'testTilesConfig' => [
                    'colorClasses' => ['test-color-1', 'test-color-2', 'test-color-3',]
                ],
                'expectedTileCount' => 0,
            ],
            'No text, single color' => [
                'testTilesConfig' => [
                    'colorClasses' => ['test-color-1']
                ],
                'expectedTileCount' => 0,
            ],
            'No text, empty colors' => [
                'testTilesConfig' => [
                    'colorClasses' => []
                ],
                'expectedTileCount' => 0,
            ],
            'No text, no colors' => [
                'testTilesConfig' => [],
                'expectedTileCount' => 0,
            ],
        ];
    }

    /**
     * @dataProvider provideGetTiles
     */
    public function testGetTiles($testTilesConfig, $expectedTileCount)
    {
        $actualResult = HomeController::getTiles($testTilesConfig);
        $this->assertCount($expectedTileCount, $actualResult);
    }
}

