<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public const TILES_CONFIG_KEY = 'sitedata.home.tiles';

    public static function getTiles($tilesConfig): array
    {
        $tilesText = $tilesConfig['text'] ?? [];

        if (empty($tilesText)) {
            return [];
        }

        $tiles = [];
        $unusedColorClasses = [];

        foreach ($tilesText as $tileText) {
            if (empty($unusedColorClasses)) {
                $unusedColorClasses = $tilesConfig['colorClasses'] ?? [];
            }

            $idxColorClass = empty($unusedColorClasses) ? null : array_rand($unusedColorClasses);

            $tiles[] = [
                'text' => $tileText,
                'colorClass' => $unusedColorClasses[$idxColorClass] ?? null
            ];

            array_splice($unusedColorClasses, $idxColorClass, 1);
        }

        return $tiles;
    }

    public function index() {
        return view('home', [
            'tiles' => self::getTiles(config(self::TILES_CONFIG_KEY, [])),
        ]);
    }
}
