<?php

use Illuminate\Support\Facades\Route;

// Utils
use App\Utils\Utils;

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
    $projects = Utils::getProjects();
    return view('main', compact('projects'));
});

Route::get("/projects/{project}", function($project) {
    $project = Utils::getProject($project);
    if (is_null($project) || !isset($project["project"])) {
        return redirect("/")->with("error", "This project doesn't exist.");
    }
    return view("project", ["gradient" => $project["project"]["gradient"], "project" => $project]);
})->name("project");

