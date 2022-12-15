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

$navbarLinks = [
    [
        "name"=> "Caracters",
        "link"=> "caracters"
    ],
    [
        "name"=> "Comics",
        "link"=> "home"
    ],
    [
        "name"=> "Movies",
        "link"=> "movies"
    ],
    [
        "name"=> "Tv",
        "link"=> "tv"
    ],
    [
        "name"=> "Games",
        "link"=> "games"
    ],
    [
        "name"=> "Collectibles",
        "link"=> "collectibles"
    ],
    [
        "name"=> "Videos",
        "link"=> "videos"
    ],
    [
        "name"=> "Fans",
        "link"=> "fans"
    ],
    [
        "name"=> "News",
        "link"=> "news"
    ],
    [
        "name"=> "Shop",
        "link"=> "shop"
    ],
];

Route::get('/', function () use ($navbarLinks) {
    $navbar = $navbarLinks;
    return view('home', compact("navbar"));
})->name("home");
