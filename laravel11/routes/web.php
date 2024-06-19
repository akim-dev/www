<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Djayom', 'title' => 'About']);
});


Route::get('/posts', function () {
    return view('posts', [
        'judul' => 'lorejasdhfjhfjsdhfjsdhf',
        'title' => 'Blog',
        'posts' =>
            [
                [
                    'id' => '1',
                    'slug' => 'judul-artikel-1',
                    'title' => 'Judul Artikel 1',
                    'author' => 'Djayom',
                    'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid inventore nobis
            distinctio earum ad ex qui
            quasi quam ipsam doloremque?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid inventore nobis
            distinctio earum ad ex qui
            quasi quam ipsam doloremque?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid inventore nobis
            distinctio earum ad ex qui
            quasi quam ipsam doloremque?'
                ],
                [
                    'id' => '2',
                    'slug' => 'judul-artikel-2',
                    'title' => 'Judul Artikel 2',
                    'author' => 'Djayom',
                    'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid inventore nobis
            distinctio earum ad ex qui
            quasi quam ipsam doloremque?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid inventore nobis
            distinctio earum ad ex qui
            quasi quam ipsam doloremque?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid inventore nobis
            distinctio earum ad ex qui
            quasi quam ipsam doloremque?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid inventore nobis
            distinctio earum ad ex qui
            quasi quam ipsam doloremque?'
                ],
                [
                    'id' => '3',
                    'slug' => 'judul-artikel-3',
                    'title' => 'Judul Artikel 3',
                    'author' => 'Djayom',
                    'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid inventore nobis
            distinctio earum ad ex qui
            quasi quam ipsam doloremque?'
                ]
            ]
    ]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/posts/{slug}', function ($slug) {
    //  dd ($id);

    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Djayom',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid inventore nobis
            distinctio earum ad ex qui
            quasi quam ipsam doloremque?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid inventore nobis
            distinctio earum ad ex qui
            quasi quam ipsam doloremque?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid inventore nobis
            distinctio earum ad ex qui
            quasi quam ipsam doloremque?'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Djayom',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid inventore nobis
            distinctio earum ad ex qui
            quasi quam ipsam doloremque?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid inventore nobis
            distinctio earum ad ex qui
            quasi quam ipsam doloremque?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid inventore nobis
            distinctio earum ad ex qui
            quasi quam ipsam doloremque?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid inventore nobis
            distinctio earum ad ex qui
            quasi quam ipsam doloremque?'
        ],
        [
            'id' => '3',
            'slug' => 'judul-artikel-3',
            'title' => 'Judul Artikel 3',
            'author' => 'Djayom',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid inventore nobis
            distinctio earum ad ex qui
            quasi quam ipsam doloremque?'
        ]

    ];

    $post = Arr::first($posts, function ($item) use ($slug) {
        return $item['slug'] == $slug;
    });


    return view('post', ['title' => 'Single Post', 'post' => $post]);

});