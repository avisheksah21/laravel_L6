<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'offers' => [
            [
                'title' => 'HarryPotter',
                'price' => '500'
            ],
            [
                'title' => 'Gauthali',
                'price' => '700'
            ],
            [
                'title' => 'Bhagya',
                'price' => '600'
            ],
        ]
    ]);
});

Route::get('/bestseller', function () {
    return view('bestseller');
});

Route::get('/newarrival', function () {
    return view('newarrival');
});
