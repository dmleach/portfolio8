<?php

namespace Tests\Unit\App\Http\Controllers;

use App\Http\Controllers\HomeController;
use PHPUnit\Framework\TestCase;

class HomeControllerTest extends TestCase
{
    public function provideGetTiles()
    {
        return [
            'Multiple tiles, multiple colors' => [
                'testTilesConfig' => [
                    'text' => ["test-text-1", "test-text-2", "test-text-3",],
                    'colorClasses' => ['test-color-1', 'test-color-2', 'test-color-3',]
                ],
                'expectedTileText' => ["test-text-1", "test-text-2", "test-text-3",],
                'expectedTileColors' => ['test-color-1', 'test-color-2', 'test-color-3',],
            ],
        ];
    }

    /**
     * @dataProvider provideGetTiles
     */
    public function testGetTiles($testTilesConfig, $expectedText, $expectedColorClasses)
    {
        $actualResult = HomeController::getTiles($testTilesConfig);

        foreach ($actualResult as $actualResultTile) {
            $this->assertContains($actualResultTile['text'], $expectedText);
            $this->assertContains($actualResultTile['colorClass'], $expectedColorClasses);
        }
    }
}

