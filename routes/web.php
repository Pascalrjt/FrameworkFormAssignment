<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

// Handle form submission
Route::post('/submit', function (Request $request) {
    $data = [
        'data' => $request->input('data'),
        'date_of_birth' => $request->input('date_of_birth'),
        'date_of_death' => $request->input('date_of_death'),
        'description' => $request->input('description'),
        'double_value' => $request->input('double_value'),
    ];
    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagePath = $image->store('pictures', 'public'); // Store the image in the 'public' disk
    }
    

    return view('submitted', compact('data'));
});