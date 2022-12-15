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
        "name"=> "Characters",
        "link"=> "characters"
    ],
    [
        "name"=> "Comics",
        "link"=> "comics"
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
    $comics = config('comics');
    $shopCards = [
        [
            "imgName" => "buy-comics-digital-comics.png",
            "imgAlt" => "Tablet con all'interno logo DC",
            "cardText" => "Digital Comics",
        ],
        [
            "imgName" => "buy-comics-merchandise.png",
            "imgAlt" => "T-shirt con logo DC",
            "cardText" => "DC Merchandise",
        ],
        [
            "imgName" => "buy-comics-subscriptions.png",
            "imgAlt" => "Carte con simbolo di Flash",
            "cardText" => "Subscription",
        ],
        [
            "imgName" => "buy-comics-shop-locator.png",
            "imgAlt" => "Puntatore mappa",
            "cardText" => "Comic Shop Locator",
        ],
        [
            "imgName" => "buy-dc-power-visa.svg",
            "imgAlt" => "Carta di credito con simbolo di Flash",
            "cardText" => "DC Power Visa",
        ]
    ];
    return view('home', compact("navbar", "comics", "shopCards"));
})->name("home");

Route::get("/comics", function() use($navbarLinks){

    $navbar = $navbarLinks;
    $comics = config('comics');

    return view('comics', compact("navbar", "comics"));
})->name("comics");


Route::get("/characters", function() use($navbarLinks){

    $navbar = $navbarLinks;

    return view('characters', compact("navbar"));
})->name("characters");

Route::get("/movies", function() use($navbarLinks){

    $navbar = $navbarLinks;

    return view('movies', compact("navbar"));
})->name("movies");

Route::get("/tv", function() use($navbarLinks){

    $navbar = $navbarLinks;

    return view('tv', compact("navbar"));
})->name("tv");

Route::get("/games", function() use($navbarLinks){

    $navbar = $navbarLinks;

    return view('games', compact("navbar"));
})->name("games");

Route::get("/collectibles", function() use($navbarLinks){

    $navbar = $navbarLinks;

    return view('collectibles', compact("navbar"));
})->name("collectibles");

Route::get("/videos", function() use($navbarLinks){

    $navbar = $navbarLinks;

    return view('videos', compact("navbar"));
})->name("videos");

Route::get("/fans", function() use($navbarLinks){

    $navbar = $navbarLinks;

    return view('fans', compact("navbar"));
})->name("fans");

Route::get("/news", function() use($navbarLinks){

    $navbar = $navbarLinks;

    return view('news', compact("navbar"));
})->name("news");

Route::get("/shop", function() use($navbarLinks){

    $navbar = $navbarLinks;

    return view('shop', compact("navbar"));
})->name("shop");