<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjas = [
        ['name' => 'Naruto', 'skill' => 75, 'id' => '1'],
        ['name' => 'Sasuke', 'skill' => 80, 'id' => '2'],
        ['name' => 'Sakura', 'skill' => 65, 'id' => '3'],
    ];

    return view('ninjas.index',
        ['ninjas' => $ninjas,
            'greeting' => 'Welcome to the Ninja network!',
        ]
    );
});

Route::get('/ninjas/{id}', function ($id) {
    // $ninjas = [
    //     '1' => ['name' => 'Naruto', 'skill' => 75, 'id' => '1'],
    //     '2' => ['name' => 'Sasuke', 'skill' => 80, 'id' => '2'],
    //     '3' => ['name' => 'Sakura', 'skill' => 65, 'id' => '3'],
    // ];

    // if (! array_key_exists($id, $ninjas)) {
    //     abort(404);
    // }

    $ninjas = [
        ['name' => 'Naruto', 'skill' => 75, 'id' => '1'],
        ['name' => 'Sasuke', 'skill' => 80, 'id' => '2'],
        ['name' => 'Sakura', 'skill' => 65, 'id' => '3'],
    ];

    // return view('ninjas.show', ['ninja' => $ninjas[$id]]);
    return view('ninjas.show', ['id' => $id]);
});
