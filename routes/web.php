<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = ['page_name' => 'Home'];
    return view('index') -> with($data);
});

Route::get('/rooms', function () {
    $data = ['page_name' => 'Rooms'];
    return view('rooms')-> with($data);
});

Route::get('/rooms-details', function () {
    $data = ['page_name' => 'Rooms Details'];
    return view('rooms-details')-> with($data);
});

Route::get('/gallery', function () {
    $data = ['page_name' => 'Gallery'];
    return view('gallery')-> with($data);
});

Route::get('/contact', function () {
    $data = ['page_name' => 'Contact'];
    return view('contact')-> with($data);
});

Route::get('/blog', function () {
    $data = ['page_name' => 'Blog'];
    return view('blog')-> with($data);
});

Route::get('/blog-details', function () {
    $data = ['page_name' => 'Blog'];
    return view('blog-details')-> with($data);
});

Route::get('/about-us', function () {
    $data = ['page_name' => 'About'];
    return view('about')-> with($data);
});

Route::get('/food-menu', function () {
    $data = ['page_name' => 'Menu'];
    return view('menu')-> with($data);
});

Route::get('/our-offers', function () {
    $data = ['page_name' => 'Offers'];
    return view('offers')-> with($data);
});

Route::get('/places', function () {
    $data = ['page_name' => 'Places'];
    return view('places')-> with($data);
});

Route::get('/places-details', function () {
    $data = ['page_name' => 'Places'];
    return view('places-details')-> with($data);
});

Route::get('/restaurant', function () {
    $data = ['page_name' => 'Restaurant'];
    return view('restaurant')-> with($data);
});

// Add Subscriber Email
Route::post('/add-subscriber-email', 'App\Http\Controllers\Front\NewsletterController@addSubscriber');

// Contact Form Submit
Route::post('/add-contact', 'App\Http\Controllers\Front\ContactSubmitController@addContact');
