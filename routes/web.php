<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('campaign');
});

Route::get('/brand', function () {
    return view('brand');
});

Route::get('/objects', function () {
    return view('object');
});

Route::get('/text', function () {
    return view('text');
});

Route::get('/dev', function () {
    return view('dev');
});

Route::post('/download', function(Request $request) {

    $img = $request->input('image');
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $fileData = base64_decode($img);
    //saving
    $filename = 'example-'.time().'.png';
    $file = Storage::disk('public')->put($filename, $fileData);
    return Storage::disk('public')->download($filename);
});
