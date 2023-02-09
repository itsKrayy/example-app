<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample/{id}', function ($id) {
    return response('Post ' . $id);
})->where('id', '[0-9]+');



Route::get('/search', function (Request $request) {
    ddd($request);
    return ($request->name . "" . $request->pet);
});

//view basics and passing of data
Route::get('/products', function (Request $request) {
    return view('index' ,[
        'title'=>'Products',
    'heading' => 'Coffee',
    'product' => [
        [    
            'flavor' => 'Hazelnut',
            'desc' => 'This coffe is hazelnut flavor. This coffee is hazelnut flavor'
        ],
        [    
            'flavor' => 'Ice Coffee',
            'desc' => 'Just a random description'
        ]
    ]
    ]);
});
