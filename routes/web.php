<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::view('/career', 'career');
Route::view('/projects', 'projects');

Route::get('/projects/{projectName}',  function ($projectName = null) {
    return view('project-details', ['projectName' => $projectName]);
});

Route::get('/skills', [\App\Http\Controllers\SkillsController::class, 'index']);
