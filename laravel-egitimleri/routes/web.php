<?php

use App\Http\Controllers\BasicController;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/grow', function() {
   return 'sen niye boyumursen a bala?';
});

Route::get('/yas', function() {
    return 'sen nece yasin var ay qiz?';
});

Route::get ('/greeting-json' , function () {
    return response() -> json(['message' => 'This is a json response']);
});

Route::get ('/greeting-from-controller', [BasicController::class, 'greeting']);

Route::get('/test', function () {
    return view('test');
});

Route::post('/greeting', function() {
    return 'Hello World Post Request!';
})->withoutMiddleware([ValidateCsrfToken::class])->name('greeting.post');

Route::delete('/greeting', function() {
    return 'Hello World Delete Request!';
})->withoutMiddleware([ValidateCsrfToken::class])->name('greeting.delete');


Route::get('/post/{id}/comment/{comment}', function($id, $comment) {
   return 'Post '.$id. ' Comment ' .$comment;
});
