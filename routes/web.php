<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $projects = [
        [
            "name" => "Beggin",
            "description" => "Garry's Mod server pushed on the American roleplay, server totally made by our hands.",
            "image" => "beggin.png",
            "skills" => ["html", "css", "js", "laravel", "nodejs", "git", "expressjs"],
        ]
    ];
    return view('main', compact('projects'));
});

