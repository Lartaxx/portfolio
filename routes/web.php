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
        ],
        [
            "name" => "Lost In The Shell",
            "description" => "Hacking trainer for the 42Perpignan school., Association of the school",
            "image" => "lis.png",
            "skills" => ["html", "css", "js", "laravel", "nodejs", "git", "php"],
        ],
        [
            "name" => "Convertway",
            "description" => "Project of currency conversions, complete vision of these conversions etc.",
            "image" => "convertway.png",
            "skills" => ["html", "css", "js", "laravel", "git"]
        ]
    ];
    return view('main', compact('projects'));
});

