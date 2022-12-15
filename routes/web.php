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
    $comics = config('comics');
    $shopCard = [
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
    return view('home', compact("navbar", "comics", "shopCard"));
})->name("home");
