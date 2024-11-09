<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

// Страница "О нас"
Route::get('/about', function () {
    return view('about');
})->name('about');

// Страница "Контакты"
Route::get('/contacts', function () {
    $contacts = [
        'Телефон' => '+7 (123) 456-78-90',
        'Email' => 'info@example.com',
        'Адрес' => 'г. Москва, ул. Примерная, д. 1',
    ];
    return view('contacts', compact('contacts'));
})->name('contacts');